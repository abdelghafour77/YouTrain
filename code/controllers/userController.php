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
if (isset($_POST['updateUser'])) {
    extract($_POST);
    if ($password == '') {
        $user = (new User())->getUser();
        $password = $user->password;
    }
    $user = new User($email, $password, $first_name, $last_name, $phone, $age, $id);
    // var_dump($user);
    // die;
    $user->updateUser();
}
