<?php
require 'connection.php';

class Travel extends Connection
{
    public $id;
    public $time;
    public $price;
    public $start;
    public $end;
    public $date;
    public $train;

    function __construct($id = null, $time = null, $price = null, $start = null, $end = null, $date = null, $train = null)
    {
        $this->id    = $id;
        $this->time  = $time;
        $this->price = $price;
        $this->start = $start;
        $this->end   = $end;
        $this->date  = $date;
        $this->train = $train;
    }

    function getId($id)
    {
        $this->id = $id;
    }

    public function allTravels()
    {
        $sql = "SELECT travels.*,
                trains.name as train,
                stations.name as station
                from travels
                inner join stations on stations.id = travels.start_station_id
                inner join trains on trains.id = travels.train_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function allStations()
    {
        $sql = "SELECT * FROM stations";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function allTrains()
    {
        $sql = "SELECT * FROM trains";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function saveTravel()
    {
        $sql = "INSERT INTO `travels`(`time`, `price`, `start_station_id`, `end_station_id`, `date_start`, `train_id`) 
        VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->time, $this->price, $this->start, $this->end, $this->date, $this->train]);
    }

    public function deleteTravel()
    {
        $sql = "DELETE FROM travels WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function updateTravel()
    {
        $sql = "UPDATE `travels` SET `time`= ?,`price`= ?,`start_station_id`= ?,`end_station_id`= ?,`date_start`= ?, `train_id`= ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->time, $this->price, $this->start, $this->end, $this->date, $this->train, $this->id]);
        // var_dump($stmt);
        // die;
    }
}