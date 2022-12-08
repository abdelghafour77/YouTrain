<?php
require_once '../models/station.php';

if (isset($_POST['save'])) {
    extract($_POST);
    $citie = new Station($id, $name, $address, $capacity, $city);
    $citie->saveStation();
    header('location:../stations.php');
}
