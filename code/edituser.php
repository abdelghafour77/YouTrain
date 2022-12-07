<?php




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
    <div class="container col-lg-4 mt-4">
        <div class="card">
            <img src="assets/img/user.png">
            <div class="row">
                <h1 class="text-center">Edit Profil</h1>
                <div class="col-5 ms-5 mt-4 ps-3">
                    <label>First Name</label>
                    <input type="text" name="" placeholder="first Name" class="form-control">
                </div>
                <div class="col-5 mt-4">
                    <label>last Name</label>
                    <input type="text" name="" placeholder="last Name" class="form-control">
                </div>
                <div class="col-5 ms-5 mt-4 ps-3">
                    <label>age</label>
                    <input type="number" name="" placeholder="your age" class="form-control">
                </div>
                <div class="col-5 mt-4">
                    <label>email</label>
                    <input type="email" name="" placeholder="email" class="form-control">
                </div>
                <div class="col-5 ms-5 mt-4 ps-3">
                    <label>phone</label>
                    <input type="number" name="" placeholder="phone number" class="form-control">
                </div>
                <div class="col-5 mt-4 mb-3">
                    <label>password</label>
                    <input type="password" name="" placeholder="new password" class="form-control">
                </div>
                <div class="botonat">
                    <button type="submit" name="cancel" class="btn btn-danger" id="cancel">cancel</a>
                        <button type="submit" name="save" class="btn btn-primary" id="save">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>