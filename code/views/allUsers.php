<?php
include_once './models/user.php';
$all_users = new user();
$users = $all_users->allUsers();
// var_dump($users);
// die;
?>
<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 131.163px">Full Name</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 218.163px">Email</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 96.9625px">Phone Number</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 39.0125px">Age</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 85.55px">Admin</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 73.3px">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
        ?>

            <tr class="odd">
                <td class="sorting_1"><?= $user['first_name'] . " " . $user['last_name']  ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['age'] ?></td>
                <td>
                    <span class="badge text-bg-<?= ($user['admin'] == 0) ? 'primary' : 'success' ?> fs-6"><?= ($user['admin'] == 1) ? 'Admin' : 'User' ?></span>
                </td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="" class="btn btn-warning me-3"><i class="bi bi-pencil-square users-icon"></i></a>
                        <a href="" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
</table>