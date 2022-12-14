<?php
require_once 'connection.php';

class City extends Connection
{
    public $id;
    public $name;

    function __construct($name = null, $id = null)
    {
        $this->name = $name;
        $this->id = $id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function allCities()
    {
        $sql = "SELECT * FROM cities";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function saveCity()
    {
        $sql = "INSERT INTO cities (`name`) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->name]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'City added successfully';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }

    public function deleteCity()
    {
        $sql = "DELETE FROM cities WHERE id = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'City are deleted';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }

    public function updateCity()
    {
        $sql = "UPDATE `cities` SET `name`= ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        // var_dump($this);
        // die;
        $stmt->execute([$this->name, $this->id]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'City are updated';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
    }
}
