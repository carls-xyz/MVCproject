<?php
class ActivityController
{
    use Render;
    public function index()
    {
        $model = new ActivityModel();
$activities = $model->GetAllActivities();
        $this->renderView('activity/index', [
            'activities' => $activities
        ]);
    }

public function show(int $id): void
{
    $model = new ActivityModel();
    $activity = $model->getActivityById($id);
    $this->renderView('activity/show', ['activity' => $activity]);
}

public function update(int $id, array $data): void
{
    $model = new ActivityModel();
    $stmt = $model->getCo()->prepare(
        'UPDATE activities SET nom = :nom, type_id = :type_id, 
         places_disponibles = :places, description = :desc, 
         datetime_debut = :debut, duree = :duree WHERE id = :id'
    );
    $stmt->execute([
        'id' => $id,
        'nom' => $data['nom'],
        'type_id' => $data['type_id'],
        'places' => $data['places_disponibles'],
        'desc' => $data['description'],
        'debut' => $data['datetime_debut'],
        'duree' => $data['duree']
    ]);
    
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    $baseUrl = ($scriptDir === '/' || $scriptDir === '\\') ? '' : $scriptDir;
    header('Location: ' . $baseUrl . '/activity/show?id=' . $id);
    exit;
}

public function delete(int $id): void
{
    $model = new ActivityModel();
    $reservationModel = new ReservationModel();
    $stmt = $reservationModel->getCo()->prepare(
        'DELETE FROM reservations WHERE activite_id = :id'
    );
    $stmt->execute(['id' => $id]);
    
    $stmt = $model->getCo()->prepare('DELETE FROM activities WHERE id = :id');
    $stmt->execute(['id' => $id]);
    
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    $baseUrl = ($scriptDir === '/' || $scriptDir === '\\') ? '' : $scriptDir;
    header('Location: ' . $baseUrl . '/');
    exit;
}
}