<?php
include_once './models/travel.php';
$all_travels = new Travel();
$travels = $all_travels->allTravels();
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
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($travels as $travel) {
        ?>
            <tr class="odd" id = "<?= $travel['id'];?>" time = "<?= $travel['time'];?>" 
            price = "<?= $travel['price'];?>" start = "<?= $travel['start_station_id']; ?>" end = "<?= $travel['end_station_id']; ?>"
            date = "<?= $travel['date_start']; ?>" train = "<?= $travel['train_id']; ?>">
                <td class=""><?= $travel["time"] ?></td>
                <td class=""><?= $travel["price"] ?></td>
                <td class=""><?= $travel["station_start"] ?></td>
                <td class=""><?= $travel["station_end"] ?></td>
                <td class=""><?= $travel["date_start"] ?></td>
                <td class=""><?= $travel["train"] ?></td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="#modal-city" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editTravel(<?= $travel['id']; ?>)"><i class="bi bi-pencil-square users-icon"></i></a>
                        <a href="controllers/travelController.php?id=<?= $travel['id']; ?>" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
            <?php
                }   
            ?>
    </tbody>
</table>
<script src="assets/js/main.js"></script>