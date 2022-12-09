<?php
include_once './models/train.php';
$all_trains = new Train();
$trains = $all_trains->allTrains();
?>
<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th>Name</th>
            <th>Capacity</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($trains as $train) {
        ?>
            <tr class="odd"  id = "<?= $train['id'];?>" train = "<?= $train['name'];?>" 
            capacity = "<?= $train['capacity'];?>" type = "<?= $train['type_id']; ?>">
                <td class="sorting_1"><?= $train["name"] ?></td>
                <td class=""><?= $train["capacity"] ?></td>
                <td class=""><?= $train["type"] ?></td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="#modal-city" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editTrain(<?= $train['id']; ?>)"><i class="bi bi-pencil-square users-icon"></i></a>
                        <a href="controllers/trainController.php?id=<?= $train['id'] ?>" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>
<script src="assets/js/main.js"></script>