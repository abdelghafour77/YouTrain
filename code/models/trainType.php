<?php
require_once 'connection.php';

class TrainType extends Connection
{
  public $id;
  public $name;

  public function __construct($id = null, $name = null)
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function allTrainType()
  {
    $sql = "SELECT * FROM type_trains";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }
}
