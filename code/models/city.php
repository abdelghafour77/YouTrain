<?php
require 'connection.php';

class City extends Connection
{
    public $name;

    function __construct($name = null)
    {
        $this->name = $name;
    }

    public function allCities()
    {
        $sql = "SELECT * FROM cities limit 100";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
