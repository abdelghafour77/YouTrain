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
            $sql = "SELECT bookings.* ,
            travels.price,
            users.first_name,
            users.last_name,
            s1.name as start_station,
            s2.name as end_station
            FROM `bookings` 
            INNER JOIN travels ON bookings.travel_id = travels.id 
            INNER JOIN users ON bookings.user_id = users.id
            INNER JOIN stations as s1 ON travels.start_station_id = s1.id
            INNER JOIN stations as s2 ON travels.start_station_id = s2.id
            WHERE bookings.user_id= ?";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->fetchAll();

            return $result;
      }
      public function getInfo()
      {
            $dele = "SELECT users.*, card_payments.* from users
            left join card_payments on users.id=card_payments.id 
            where users.id = ?";
            $stmt = $this->connect()->prepare($dele);
            $stmt->execute([$this->id]);
            $result = $stmt->fetch();
            return  $result;
      }
      public function getTravel()
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
                  where 
                    travels.id=?";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            $result = $stmt->fetch();
            return  $result;
      }
      public function checkout()
      {
            $sql = "INSERT INTO `bookings`
            ( `user_id`, `travel_id`, `nbr_adults`, `nbr_kids`, `created_at`)
             VALUES
            (?,?,?,?,?)";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->user_id, $this->travel_id, $this->nbr_adults, $this->nbr_kids, $this->date]);
            return $stmt;
      }
}
