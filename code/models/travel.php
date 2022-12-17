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

  function setId($id)
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
    $id = $_SESSION['id'];
    $sql = "INSERT INTO `travels`(`time`, `price`, `start_station_id`, `end_station_id`, `date_start`, `train_id`,`created_by`) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->time, $this->price, $this->start, $this->end, $this->date, $this->train, $id]);
    if ($stmt) {
      $_SESSION['type_message'] = "success";
      $_SESSION['message'] = 'Travel add successfully';
    } else {
      $_SESSION['type_message'] = "error";
      $_SESSION['message'] = 'Retry again !';
    }
  }

  public function deleteTravel()
  {
    $sql = "DELETE FROM travels WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->id]);
    if ($stmt) {
      $_SESSION['type_message'] = "success";
      $_SESSION['message'] = 'Travel deleted successfully';
    } else {
      $_SESSION['type_message'] = "error";
      $_SESSION['message'] = 'Retry again !';
    }
  }

  public function updateTravel()
  {
    $id = $_SESSION['id'];
    $sql = "UPDATE `travels` SET `time`= ?,`price`= ?,`start_station_id`= ?,`end_station_id`= ?,`date_start`= ?, `train_id`= ? ,`updated_by`= ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->time, $this->price, $this->start, $this->end, $this->date, $this->train, $id, $this->id]);
    if ($stmt) {
      $_SESSION['type_message'] = "success";
      $_SESSION['message'] = 'Travel updated successfully';
    } else {
      $_SESSION['type_message'] = "error";
      $_SESSION['message'] = 'Retry again !';
    }
  }

  public function search($d_station = null, $a_station = null, $date_d = null, $train_type = null, $nbr_adults = null, $nbr_kids = null)
  {
    if ($date_d == null) {
      $date_d = date("Y-m-d");
    }
    $_SESSION['search'] = ['start_station' => $d_station, 'end_station' => $a_station, 'date_start' => $date_d, 'train_type' => $train_type, 'nbr_adults' => $nbr_adults, 'nbr_kids' => $nbr_kids];

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
                travels.date_start >= ? ";
    $arr = [$date_d];
    if ($d_station != null) {
      $sql .= "and travels.start_station_id =? ";
      array_push($arr, $d_station);
    }
    if ($a_station != null) {
      $sql .= "and travels.end_station_id=? ";
      array_push($arr, $a_station);
    }
    if ($train_type != null) {
      $sql .= "and type_trains.id=? ";
      array_push($arr, $train_type);
    }
    $sql .= "order by travels.date_start";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($arr);
    $result = $stmt->fetchAll();
    return  $result;
  }
  public function index_tickets()
  {

    $date_d = date("Y-m-d H:i:s");
    $date_e = date("Y-m-d H:i:s", strtotime($date_d . ' + 2 days'));

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
                travels.date_start between ? and ?
                limit 5
                ";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$date_d, $date_e]);
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
