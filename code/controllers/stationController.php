<?php
require_once '../models/station.php';

if (isset($_POST['save'])) {
    extract($_POST);
    $citie = new Station($id, $name, $address, $capacity, $city);
    $citie->saveStation();
    header('location:../stations.php');
}

if (isset($_GET['id'])) {
    extract($_GET);
    $station = new Station();
    $station->getId($id);
    $station->deleteStation();
    header('location:../stations.php');
}

if (isset($_POST['update'])) {
    extract($_POST);
    $station = new Station($id, $name, $address, $capacity, $city);
    $station->updateStation();
    header('location:../stations.php');
}
