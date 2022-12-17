<?php
require_once '../models/traveldetail.php';

if (isset($_GET['id'])) {
    extract($_GET);
    $travel = new TravelDetail();
    $travel->setId($id);
    // var_dump($travel);
    // die;
    $travel->allTravelDetails();
    // header('location:../traveldetails.php');
}
