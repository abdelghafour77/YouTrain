<?php
require_once 'connection.php';

class Station extends Connection
{
  public $id;
  public $name;
  public $address;
  public $capacity;
  public $city_id;



  public function __construct($id = null, $name = null, $address = null, $capacity = null, $city_id = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->address = $address;
    $this->capacity = $capacity;
    $this->city_id = $city_id;
  }


  public function allStations()
  {
    $sql = "SELECT 
              stations.* ,
              cities.name as city
            FROM stations
              inner join cities on cities.id=stations.city_id
            ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }
}
