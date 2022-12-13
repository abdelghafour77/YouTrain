<?php
    require_once 'include/role.php';
    $title = "TrainPal | Login page";
    include("include/head.php");
?>

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
            <input type="email" name="email" placeholder="email" required data-parsley-trigger="keyup">
            <input type="password" name="password" placeholder="password" required data-parsley-trigger="keyup">
            <input type="submit" name="login" value="login" class="form-btn">
            <h3 class="fs-5 text-light">don't you have an account?<a class="text-decoration-none fs-5 text-danger" href="signup.php">regist now</a></h3>
        </form>
    </div>
</body>
