<?php

require_once 'connection.php';



class Admin extends Connection
{
    public function allAdmins()
    {
        $sql = "SELECT * FROM `users` WHERE admin = 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}