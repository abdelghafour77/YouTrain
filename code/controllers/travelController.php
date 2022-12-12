<?php
require_once '../models/travel.php';

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