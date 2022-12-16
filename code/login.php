<!DOCTYPE html>
<html lang="en">
<?php
$title = "TrainPal | Login page";
include("include/head.php");
require_once 'include/role.php';
?>

<body id="login">
    <div class="form-style mx-auto py-4">
        <form action="./controllers/userController.php" method="POST" id="form" data-parsley-validate>
            <a href="index.php">
                <img src="assets/img/logo.webp" class="img-fluid me-2 mb-3" alt="Bootstrap" width="180" height="40">
            </a>
            <h2 class="text-white mb-3">Login</h2>
            <input type="email" name="email" placeholder="email" required data-parsley-trigger="keyup">
            <input type="password" name="password" placeholder="password" required data-parsley-trigger="keyup">
            <div class="mt-3 mb-4">
                <button type="submit" name="login" class="form-btn text-black">Login</button>
            </div>
            <p class="fs-5 text-light">Don't you have an account?
                <button class="btn btn-outline-danger btn-sm ms-1">
                    <a href="signup.php" class="text-decoration-none text-white">
                        Register here
                    </a>
                </button>
            </p>
        </form>
    </div>
    <?php require_once 'include/alert.php'; ?>
</body>

</html>