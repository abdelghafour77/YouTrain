<?php
require 'models/travel.php';
if (isset($_POST['searching'])) searching();

function searching()
{
  extract($_POST);
  $travel = new Travel();
  $travel = $travel->search($d_station, $a_station, $date_d, $train_type, $nbr_adults, $nbr_kids);
  // header('location: ../search.php');
}
