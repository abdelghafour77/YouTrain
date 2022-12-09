<?php

require 'connection.php';

class Search extends Connection{

    public $id;
    public $time;
    public $price;
    public $seats_number = 1;
    public $departure;
    public $destination;
    public $train_id;

    


public function __construct($id,$time,$price,$seats_number,$departure,$destination,$train_id){

    $this->id = $id;
    $this->time = $time;
    $this->price = $price;
    $this->seats_number = $seats_number;
    $this->departure = $departure;
    $this->destination = $destination;
    $this->train_id = $train_id;


}


    public function getTravels(){

    $stmt = $pdo->prepare("SELECT * FROM travels WHERE start_station_id=? AND end_station_id=? AND date_start=?      ");
    $stmt->execute([$this->departure,$this->destination,$this->date,$this->seats_number]); 
    $travels = $stmt->fetchAll();

        return $travels;

    }



}