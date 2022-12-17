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

    $id = $_POST['id'];

    if ($password == '') {
        $user = new User;
        $user->setId($id);
        $user = $user->getUser();
        $password = $user['password'];
        // var_dump($user);
        // die;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    $user = new User($email, $password, $first_name, $last_name, $phone, $age, $id, $admin);
    var_dump($user);
    // die;
    $user->updateUser();
}
if (isset($_POST['delete'])) {
    $user = new User();
    $user->setId($_SESSION['id']);
    $user->deleteUser();
    header('location:../index.php');
}
