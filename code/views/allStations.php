<?php
include_once './models/station.php';
$all_stations = new Station();
$stations = $all_stations->allStations();
// var_dump($stations);
// die;
?>

<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th>Name</th>
            <th>Adress</th>
            <th>Capacity</th>
            <th>city</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($stations as $station) {
        ?>
            <tr class="odd">
                <td class="sorting_1"><?= $station['name'];?></td>
                <td class=""><?= $station['address'];?></td>
                <td class=""><?= $station['capacity'];?></td>
                <td class=""><?= $station['city'];?></td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="#modal-city" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editCity()"><i class="bi bi-pencil-square users-icon"></i></a>
                        <a href="" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>
<script src="assets/js/main.js"></script>