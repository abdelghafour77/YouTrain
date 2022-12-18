<?php
require_once 'connection.php';

class Train extends Connection
{
    public $id;
    public $name;
    public $capacity;
    public $type;

    function __construct($id = null, $name = null, $capacity = null, $type = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->capacity = $capacity;
        $this->type = $type;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function allTrains()
    {
        $sql = "SELECT trains.*,
                type_trains.name as type 
                from trains
                inner join type_trains on trains.type_id = type_trains.id";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function allTypes()
    {
        $sql = "SELECT * FROM type_trains";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function saveTrain()
    {
        $sql = "INSERT INTO `trains`(`name`, `capacity`, `type_id`) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->name, $this->capacity, $this->type]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Train add successfully';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }

    public function deleteTrain()
    {
        $sql = "DELETE FROM trains WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Train deleted successfully';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }

    public function updateTrain()
    {
        $sql = "UPDATE `trains` SET `name`= ? , `capacity`= ?,`type_id`= ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->name, $this->capacity, $this->type, $this->id]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Train updated successfully';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }
}
