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
}
