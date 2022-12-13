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
            <img src="assets/img/logo.webp" class="img-fluid me-2 mb-3" alt="Bootstrap" width="180" height="40">
            <h2 class="text-white mb-3">Please Login</h2>
            <input type="email" name="email" placeholder="email" required data-parsley-trigger="keyup">
            <input type="password" name="password" placeholder="password" required data-parsley-trigger="keyup">
            <!-- <input type="submit" name="login" value="login" class="form-btn"> -->
            <div class="mt-3 mb-4">
                <button type="submit" name="login" class="form-btn text-black">Login</button>
            </div>
            <p class="fs-5 text-light">Don't you have an account? <button class="btn btn-outline-danger btn-sm ms-1">
                                        <a href="signup.php" class="text-decoration-none text-white">Register here</a></button></p>
        </form>
    </div>
</body>
