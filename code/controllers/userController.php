<?php
require_once '../models/user.php';

if (isset($_POST['signup'])) {
    extract($_POST);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user = new User($email, $password, $first_name, $last_name);
    $user->registration();
}
if (isset($_POST['login'])) {
    extract($_POST);
    $user = new User($email, $password);
    $user->login();
}
