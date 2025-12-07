<?php
class ReservationController
{
    use Render;
    public function index()
    {
        $reservations = ReservationModel::getAllReservations();
        $this->renderView('reservation/index', [
            'reservations' => $reservations
        ]);
        
    }
    public function create(int $activityId)
    {
        $activitie = ActivityModel::getActivityById($activityId);
        $this->renderView('reservation/create', [
            'activitie' => $activitie
        ]);
    }
    public function show(int $id){
        $reservation = ReservationModel::getReservationById($id);
        $this->renderView('reservation/show', [
            'reservation' => $reservation
        ]);
    }
    public function cancel(int $id){
        $reservation = ReservationModel::getReservationById($id);
        $reservation->cancel();
        $this->renderView('reservation/index');
    }
}