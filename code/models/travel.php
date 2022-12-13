<?php

require_once 'connection.php';



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
                start_station.name as station_start,
                end_station.name as station_end
                from travels
                inner join stations as start_station on start_station.id = travels.start_station_id
                inner join stations as end_station on end_station.id = travels.end_station_id
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

    public function search($d_station, $a_station, $date_d, $train_type, $nbr_adults, $nbr_kids)
    {
      $nbr = $nbr_adults + $nbr_kids;
      $sql = "SELECT 
                travels.* ,
                trains.name as train,
                trains.capacity as capacity,
                type_trains.name as type_train,
                s_start.name as station_start,
                s_end.name as station_end,
                c_start.name as city_start,
                c_end.name as city_end
                FROM travels
                inner join stations as s_start on s_start.id=travels.start_station_id 
                inner join stations as s_end on s_end.id=travels.end_station_id 
                inner join trains on trains.id=travels.train_id
                inner join type_trains on type_trains.id=trains.type_id
                inner join cities as c_start on c_start.id=s_start.city_id
                inner join cities as c_end on c_end.id=s_end.city_id
              where 
                travels.start_station_id =? and
                travels.end_station_id=? and
                travels.date_start>= ?  and
                type_trains.id=?";
      $_SESSION['search'] = ['start_station' => $d_station, 'end_station' => $a_station, 'date_start' => $date_d, 'train_type' => $train_type, 'nbr_adults' => $nbr_adults, 'nbr_kids' => $nbr_kids];
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$d_station, $a_station, $date_d, $train_type]);
      $result = $stmt->fetchAll();
      return  $result;
    }

  public function searchAll()
  {
    $sql = "SELECT 
              travels.* ,
              trains.name as train,
              trains.capacity as capacity,
              type_trains.name as type_train,
              s_start.name as station_start,
              s_end.name as station_end,
              c_start.name as city_start,
              c_end.name as city_end
            FROM travels
              inner join stations as s_start on s_start.id=travels.start_station_id 
              inner join stations as s_end on s_end.id=travels.end_station_id 
              inner join trains on trains.id=travels.train_id
              inner join type_trains on type_trains.id=trains.type_id
              inner join cities as c_start on c_start.id=s_start.city_id
              inner join cities as c_end on c_end.id=s_end.city_id
            ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }
}

