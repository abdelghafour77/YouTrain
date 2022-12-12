<?php
require_once '../models/city.php';

if (isset($_POST['save'])) {
    extract($_POST);
    $city = new City($name);
    $city->saveCity();
    header('location:../cities.php');
}

if (isset($_GET['id'])) {
    extract($_GET);
    $city = new City();
    $city->getId($id);
    $city->deleteCity();
    header('location:../cities.php');
}

if (isset($_POST['update'])) {
    extract($_POST);
    $city = new City($name, $id);
    $city->updateCity();
    header('location:../cities.php');
}
