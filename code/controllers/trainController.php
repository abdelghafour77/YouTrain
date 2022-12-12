<?php
require_once '../models/train.php';

if (isset($_POST['save'])) {
    extract($_POST);
    $train = new Train($id, $name, $capacity, $type);
    $train->saveTrain();
    header('location:../trains.php');
}

if (isset($_GET['id'])) {
    extract($_GET);
    $train = new Train();
    $train->getId($id);
    $train->deleteTrain();
    header('location:../trains.php');
}

if (isset($_POST['update'])) {
    extract($_POST);
    $train = new Train($id, $name, $capacity, $type);
    $train->updateTrain();
    header('location:../trains.php');
}