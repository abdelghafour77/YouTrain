<?php
include_once './models/traveldetail.php';
$all_travels = new TravelDetail();
// $all_travels->id=16;
// $travels = $all_travels->allTravelDetails();
// var_dump($travels);
// die;
// require_once '../models/traveldetail.php';

if (isset($_GET['id'])) {
    extract($_GET);
    $travel = new TravelDetail();
    $travel->getId($id);
    // var_dump($travel);
    // die;
    $travels = $travel->allTravelDetails();
    // header('location:../traveldetails.php');
}
?>
<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th>Time</th>
            <th>Price</th>
            <th>Start Station</th>
            <th>End Station</th>
            <th>Date Start</th>
            <th>Train</th>
        </tr>
    </thead>
    <tbody>
        <?php

        ?>
        <tr class="odd">
            <td class=""><?= $travels["time"] ?></td>
            <td class=""><?= $travels["price"] ?></td>
            <td class=""><?= $travels["station_start"] ?></td>
            <td class=""><?= $travels["station_end"] ?></td>
            <td class=""><?= $travels["date_start"] ?></td>
            <td class=""><?= $travels["train"] ?></td>
        </tr>
        <?php
        ?>
    </tbody>
</table>