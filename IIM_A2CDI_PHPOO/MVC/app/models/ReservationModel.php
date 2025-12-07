<?php

class ReservationModel extends Bdd
{
public function createReservation(int $userId, int $activityId): bool
{
    $stmt = $this->co->prepare(
        'INSERT INTO reservations (user_id, activite_id, date_reservation, etat) 
         VALUES (:user_id, :activity_id, :date_reservation, :etat)'
    );
    
    $result = $stmt->execute([
        'user_id' => $userId,
        'activity_id' => $activityId,
        'date_reservation' => date('Y-m-d H:i:s'),
        'etat' => 1 // true = 1 en base de données
    ]);
    
    return $result;
}
public function getReservationsByUserId(int $userId): array
{
    $reservations = $this->co->prepare('SELECT * FROM Reservations WHERE user_id = :user_id');
    $reservations->execute([
        'user_id' => $userId
    ]);
    return $reservations->fetchAll();
}

public function cancelReservation(int $reservationId): bool
{
    $reservation = $this->co->prepare('UPDATE Reservations SET etat = true WHERE id = :reservation_id');
    $reservation->execute([
        'reservation_id' => $reservationId
    ]);
    return true;
}
}