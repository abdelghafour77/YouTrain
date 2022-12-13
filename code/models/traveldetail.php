<?php

require_once 'connection.php';

class TravelDetail extends Connection
{
    public $id;

    function __construct($id = null)
    {
        $this->id  = $id;
    }

    function getId($id)
    {
        $this->id = $id;
    }

    public function allTravelDetails()
    {
        $sql = "SELECT travels.*,
                trains.name as train,
                start_station.name as station_start,
                end_station.name as station_end
                from travels
                inner join stations as start_station on start_station.id = travels.start_station_id
                inner join stations as end_station on end_station.id = travels.end_station_id
                inner join trains on trains.id = travels.train_id
                inner join bookings on bookings.travel_id = travels.id
                WHERE travels.id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
        $result = $stmt->fetch();

        // var_dump($result);
        // die;

        return $result;
    }
}
