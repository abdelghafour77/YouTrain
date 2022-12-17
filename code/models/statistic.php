<?php
require_once 'connection.php';

class Statistics extends Connection
{

      public function statistics_count($param)
      {

            $sql = "SELECT COUNT(*) FROM " . $param;
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch();
            return $res;
      }

      public function available_tickets_count()
      {

            $sql = "SELECT sum(trains.capacity) as total FROM travels inner join trains on trains.id=travels.train_id;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch();
            return $res['total'];
      }
      public function reserved_tickets_count()
      {

            $sql = "SELECT sum(travels.seat) as total FROM travels ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch();
            return $res['total'];
      }
      public function remaining_tickets_count()
      {

            $sql = "SELECT sum(trains.capacity-travels.seat) as total FROM travels inner join trains on trains.id=travels.train_id;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch();
            return $res['total'];
      }
}
