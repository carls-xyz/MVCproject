<?php

class ActivityModel extends Bdd

{ 
    public function GetAllActivities(): array
    {
        $activities = $this->co->prepare('SELECT * FROM Activities');
        $activities->execute();

        $result = $activities->fetchAll();

        return $result;
    }

    public function GetActivityById(int $id): array
    {
        $activities = $this->co->prepare('SELECT * FROM Activities WHERE id = :id');
        $activities->execute([
            'id' => $id
        ]);

        return $activities->fetch();
    }

public function getPlacesLeft(int $activityId): int
{
    $stmt = $this->co->prepare(
        'SELECT places_disponibles FROM activities WHERE id = :id'
    );
    $stmt->execute(['id' => $activityId]);
    $activity = $stmt->fetch();
    
    if (!$activity) {
        return 0;
    }
    
    $placesDisponibles = (int)$activity['places_disponibles'];
    
    $stmt = $this->co->prepare(
        'SELECT COUNT(*) as count FROM reservations 
         WHERE activite_id = :id AND etat = 1'
    );
    $stmt->execute(['id' => $activityId]);
    $result = $stmt->fetch();
    $reservationsActives = (int)$result['count'];
    
    return $placesDisponibles - $reservationsActives;
}
}