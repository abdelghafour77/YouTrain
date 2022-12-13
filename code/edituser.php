<?php

session_start()
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
            <div class="card-edit">
                <img src="assets/img/user.png" class="img-user img-fluid">
                <div class="row">
                    <h1 class="text-center">Edit User Profil</h1>
                    <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                    <div class="col-5 ms-4 mt-4 ps-md-3 ps-0">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="First Name" value="<?= $_SESSION['first_name'] ?>" class="form-control">
                    </div>
                    <div class="col-5 mt-4 ps-md-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Last Name" value="<?= $_SESSION['last_name'] ?>" class="form-control">
                    </div>
                    <div class="col-5 ms-4 mt-4 ps-md-3 ps-0">
                        <label>Age</label>
                        <input type="number" name="age" placeholder="Your age" value="<?= $_SESSION['age'] ?>" class="form-control">
                    </div>
                    <div class="col-5 mt-4">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" value="<?= $_SESSION['email'] ?>" class="form-control">
                    </div>
                    <div class="col-5 ms-4 mt-4 ps-md-3 ps-0">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Phone number" value="<?= $_SESSION['phone'] ?>" class="form-control">
                    </div>
                    <div class="col-5 mt-4 mb-3">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="New password" class="form-control">
                    </div>
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