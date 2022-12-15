<?php
require_once 'connection.php';

class Booking extends Connection
{
      public $id;
      public $user_id;
      public $travel_id;
      public $nbr_adults;
      public $nbr_kids;
      public $date;


      function __construct($user_id = null, $travel_id = null, $nbr_adults = null, $nbr_kids = null, $date = null, $id = null)
      {
            $this->user_id = $user_id;
            $this->travel_id = $travel_id;
            $this->nbr_adults = $nbr_adults;
            $this->nbr_kids = $nbr_kids;
            $this->date = $date;
            $this->id = $id;
      }
      function setId($id)
      {
            $this->id = $id;
      }

      public function booking()
      {
            $sql = "SELECT * FROM `bookings` 
        INNER JOIN travels ON bookings.travel_id = travels.id 
        INNER JOIN users ON bookings.user_id = users.id
        WHERE bookings.user_id= ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->fetchAll();

            return $result;
      }
}
