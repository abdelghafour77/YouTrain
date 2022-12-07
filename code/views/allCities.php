<?php
include_once './models/city.php';
$all_cities = new City();
$cities = $all_cities->allCities();
?>
<table id="data-table" class="display dataTable me-4" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 524.3135px">Full Name</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 158.85px">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cities as $city) {
        ?>

            <tr class="odd">
                <td class="sorting_1"><?= $city['name'] ?></td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="#modal-city" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editCity()"><i class="bi bi-pencil-square users-icon"></i></a>
                        <a href="#modal-city" data-bs-toggle="modal" class="btn btn-danger text-dark" onclick="deleteCity()"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
</table>
<script src="assets/js/main.js"></script>