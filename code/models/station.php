<?php
require_once 'connection.php';




class Station extends Connection
{
    public $id;
    public $name;
    public $address;
    public $capacity;
    public $city;

    function __construct($id = null, $name = null, $address = null, $capacity = null, $city = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->capacity = $capacity;
        $this->city = $city;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function allStations()
    {
        $sql = "SELECT stations.*,
                cities.name as city 
                from stations
                inner join cities on cities.id=stations.city_id";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }


    public function allCities()
    {
        $sql = "SELECT * FROM cities";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function saveStation()
    {
        $sql = "INSERT INTO `stations`(`name`, `address`, `capacity`, `city_id`) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->name, $this->address, $this->capacity, $this->city]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Station add successfully';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }

    public function deleteStation()
    {
        $sql = "DELETE FROM stations WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Station are deleted';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }

    public function updateStation()
    {
        $sql = "UPDATE `stations` SET `name`= ? ,`address`= ?,`capacity`= ?,`city_id`= ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->name, $this->address, $this->capacity, $this->city, $this->id]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Station are updated';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }
}
