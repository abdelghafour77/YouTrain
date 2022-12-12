<?php
include_once './models/city.php';
$all_cities = new City();
$cities = $all_cities->allCities();
?>
<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cities as $city) {
        ?>
            <tr class="odd"  id = "<?= $city['id']; ?>"  city = "<?=$city['name']; ?>">
                <td class="sorting_1"><?= $city['name'] ?></td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="#modal-city" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editCity(<?= $city['id'] ?>)"><i class="bi bi-pencil-square users-icon"></i></a>
                        <a href="controllers/cityController.php?id=<?= $city['id'] ?>" class="btn btn-danger text-dark" onclick="deleteCity()"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
</table>
<script src="assets/js/main.js"></script>