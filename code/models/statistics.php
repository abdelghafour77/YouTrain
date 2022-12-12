<?php 
    require 'connection.php';

    class Statistics extends Connection {


        public function count($param){
    
            $sql = 'SELECT COUNT(*) FROM '.$param;
            $stmt= $pdo->prepare($sql);
            $stmt = execute(); //[$name, $surname, $sex]
    
    //hhhhh
            return $stmt;
        }
    
    
    
    }


?>