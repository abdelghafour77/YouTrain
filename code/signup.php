<?php
    require_once 'include/role.php';
    $title = "TrainPal | Sign Up page";
    include("include/head.php");
?>

<body>
    <style>
        body {
            background-image: url(assets/img/yay.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <div class="form-style mx-auto py-4">
        <form action="./controllers/userController.php" method="POST" id="form" data-parsley-validate>
            <h3>please regist</h3>
            <input type="text" name="first_name" placeholder="First Name" required data-parsley-minlength="3" data-parsley-trigger="keyup">
            <input type="text" name="last_name" placeholder="Last Name" required data-parsley-minlength="3" data-parsley-trigger="keyup">
            <input type="email" name="email" placeholder="email" required data-parsley-trigger="keyup">
            <input type="password" name="password" id="pass" placeholder="password" required data-parsley-minlength="5" data-parsley-trigger="keyup">
            <input type="password" id="cpass" placeholder="confirm your password" required data-parsley-equalto="#pass" data-parsley-trigger="keyup">
            <input type="submit" name="signup" value="register now" class="form-btn">
            <h3 class="fs-5 m-3 text-light">already have an account?<a class="text-decoration-none text-danger" href="login.php">login now</a></h3>
        </form>
    </div>
</body>
