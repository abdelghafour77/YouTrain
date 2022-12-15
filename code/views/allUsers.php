<?php
include_once './models/user.php';
$all_users = new User();
$users = $all_users->allUsers();
// var_dump($users);
// die;
?>
<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Age</th>
            <th>Admin</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
        ?>

            <tr>
                <td class="sorting_1"><?= $user['first_name'] . " " . $user['last_name']  ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= ($user['phone'] == '') ? 'Null' : $user['phone'] ?></td>
                <td><?= ($user['age'] == 0 || $user['age'] == '') ? 'Null' : $user['age'] ?></td>
                <td>
                    <span class="badge text-bg-<?= ($user['admin'] == 0) ? 'primary' : 'success' ?> fs-6"><?= ($user['admin'] == 1) ? 'Admin' : 'User' ?></span>
                </td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="edituser.php?iduser=<?= $user['id'] ?>" class="btn btn-warning me-3"><i class="bi bi-pencil-square users-icon mr"></i> Edit Profil</a>
                    </div>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
</table>