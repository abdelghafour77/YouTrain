<?php
require_once 'connection.php';

class Travel extends Connection
{
  public $id;
  public $time;
  public $price;
  public $start_station_id;
  public $end_station_id;
  public $date_start;
  public $created_by;
  public $updated_by;
  public $train_id;


  public function __construct($id = null, $time = null, $price = null, $start_station_id = null, $end_station_id = null, $date_start = null, $created_by = null, $updated_by = null, $train_id = null)
  {
    $this->id = $id;
    $this->time = $time;
    $this->price = $price;
    $this->start_station_id = $start_station_id;
    $this->end_station_id = $end_station_id;
    $this->date_start = $date_start;
    $this->created_by = $created_by;
    $this->updated_by = $updated_by;
    $this->train_id = $train_id;
  }

  // public function setSearch($start_station_id, $end_station_id, $date_start,  $train_id)
  // {
  //   $this->start_station_id = $start_station_id;
  //   $this->end_station_id = $end_station_id;
  //   $this->date_start = $date_start;
  //   $this->train_id = $train_id;
  // }

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
}
