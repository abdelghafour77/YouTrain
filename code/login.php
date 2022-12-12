<?php
require_once 'include/role.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTrain Login</title>


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

<body>
    <style>
        body {
            background-image: url(assets/img/trains.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: multiply;

        }
    </style>
    <div class="form-style mx-auto py-4">
        <form action="./controllers/userController.php" method="POST" id="form" data-parsley-validate>
            <h3>please login</h3>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" data-parsley-minlenght="5" data-parsley-message="set a password more than 5 characters" required>
            <input type="submit" name="login" value="login" class="form-btn">
            <h3 class="fs-5 text-light">don't you have an account?<a class="text-decoration-none fs-5 text-danger" href="signup.php">regist now</a></h3>
        </form>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>