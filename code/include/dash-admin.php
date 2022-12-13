<?php
// session_start();
if (!isset($_SESSION['first_name'])) {
    var_dump($_SESSION);
    header('location: index.php');
    die;
}
