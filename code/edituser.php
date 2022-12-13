<?php

require_once 'models/user.php';
if (isset($_GET['iduser'])) {
    $obj = new User();
    $obj->setId($_GET['iduser']);
    $user = $obj->getUser();
    $admin = $user['admin'];

    // var_dump($user);
    // die;
} else {
    // var_dump($_SESSION);
    $obj = new User();
    $obj->setId($_SESSION['id']);
    $user = $obj->getUser();
    // var_dump($user);
    // die;
}
// var_dump($user);
// die;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profil</title>
    <!-- parsley -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- end of Parsley -->
    <!-- ================== BEGIN core-css ================== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css%22%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- ================== END core-css ================== -->
</head>

<body class="bol">
    <form action="controllers/userController.php" method="POST">
        <div class="container col-4 mb-3 mt-3">
            <div class="card">
                <img src="assets/img/user.png" class="img-fluid">
                <div class="row">
                    <h1 class="text-center">Edit User Profil</h1>
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <div class="col-5 ms-4 mt-4 ps-md-3 ps-0">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="First Name" value="<?= $user['first_name'] ?>" class="form-control">
                    </div>
                    <div class="col-5 mt-4 ps-md-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Last Name" value="<?= $user['last_name'] ?>" class="form-control">
                    </div>
                    <div class="col-5 ms-4 mt-4 ps-md-3 ps-0">
                        <label>Age</label>
                        <input type="number" name="age" placeholder="Your age" value="<?= $user['age'] ?>" class="form-control">
                    </div>
                    <div class="col-5 mt-4">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" class="form-control">
                    </div>
                    <div class="col-5 ms-4 mt-4 ps-md-3 ps-0">
                        <label>Phone</label>
                        <input type="number" name="phone" placeholder="Phone number" value="<?= $user['phone'] ?>" class="form-control">
                    </div>
                    <div class="col-5 mt-4 mb-3">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="New password" class="form-control">
                    </div>
                    <?php
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) { ?>
                        <div class="col-5 ms-4 mt-4 ps-md-3 ps-0">
                            <label>Role</label>
                            <select name="admin" id="" class="form-control">
                                <option value="0" <?= ($user['admin'] == '0') ? 'selected' : '' ?>>User</option>
                                <option value="1" <?= ($user['admin'] == '1') ? 'selected' : '' ?>>Admin</option>
                            </select>

                        </div>
                    <?php } ?>
                    <div class="botonat d-flex flex-row-reverse">
                        <button type="submit" name="updateUser" class="btn btn-primary me-2 mb-2" id="save">Save</button>
                        <button type="submit" name="delete" class="btn btn-danger me-2 mb-2" id="delete">Delete</a>

                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>