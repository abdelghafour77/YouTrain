<!DOCTYPE html>
<html lang="en">
<?php
$title = "TrainPal | Sign Up page";
include("include/head.php");
require_once 'include/role.php';
?>

<body id="signup">
    <div class="form-style mx-auto py-4">
        <form action="./controllers/userController.php" method="POST" id="form" data-parsley-validate>
            <a href="index.php">
                <img src="assets/img/logo.webp" class="img-fluid me-2 mb-3" alt="Bootstrap" width="180" height="40">
            </a>
            <h2 class="text-white">Create an account</h2>
            <input type="text" name="first_name" placeholder="First Name" required data-parsley-minlength="3" data-parsley-trigger="keyup">
            <input type="text" name="last_name" placeholder="Last Name" required data-parsley-minlength="3" data-parsley-trigger="keyup">
            <input type="email" name="email" placeholder="Email" required data-parsley-trigger="keyup">
            <input type="password" name="password" id="pass" placeholder="Password" required data-parsley-minlength="5" data-parsley-trigger="keyup">
            <input type="password" id="cpass" placeholder="Confirm your password" required data-parsley-equalto="#pass" data-parsley-trigger="keyup">
            <div class="mt-3 mb-4">
                <button type="submit" name="signup" class="form-btn text-black">Register Now</button>
            </div>
            <p class="fs-6 mt-2 text-light">Already have an account?
                <a href="login.php" class="text-decoration-none text-white text-center btn btn-outline-danger btn-sm ms-1">
                    Login
                </a>
            </p>
        </form>
    </div>
    <?php require_once 'include/alert.php'; ?>
</body>

</html>