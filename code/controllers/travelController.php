<?php

// include 'models/travel.php';
include_once '../models/travel.php';

if (isset($_POST['searching'])) searching();

function searching()
{
    extract($_POST);
    $travel = new Travel();
    $travel = $travel->search($d_station, $a_station, $date_d, $train_type, $nbr_adults, $nbr_kids);
    // header('location: ../search.php');
}


if (isset($_POST['save'])) {
    extract($_POST);
    $travel = new Travel($id, $time, $price, $start, $end, $date, $train);
    $travel->saveTravel();
    header('location:../travels.php');
}

if (isset($_GET['id'])) {
    extract($_GET);
    $travel = new Travel();
    $travel->getId($id);
    $travel->deleteTravel();
    header('location:../travels.php');
}

if (isset($_POST['update'])) {
    extract($_POST);
    $travel = new Travel($id, $time, $price, $start, $end, $date, $train);
    // var_dump($travel);
    // die;
    $travel->updateTravel();
    header('location:../travels.php');
}
