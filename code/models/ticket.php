<?php
require 'connection.php';

class Ticket extends Connection
{
    public $id;
    function __construct($id = null) {
        $this->id = $id;
    }

    public function allTickets()
    {
        $sql = "SELECT bookings.*,
                travels.id as travel_number,
                users.first_name as first_name,
                users.last_name as last_name
                from bookings
                inner join users on users.id = bookings.user_id
                inner join travels on travels.id = bookings.travel_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function deleteTicket()
    {
        $sql = "DELETE FROM bookings WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function orderTickets()
    {
        $sql = "SELECT bookings.*,
                travels.id as travel_number,
                users.first_name as first_name,
                users.last_name as last_name
                from bookings
                inner join users on users.id = bookings.user_id
                inner join travels on travels.id = bookings.travel_id
                ORDER BY bookings.id DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}