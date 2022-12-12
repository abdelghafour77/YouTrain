<?php

require_once '../models/user.php';

if (isset($_POST['sign_up'])) {
  extract($_POST);
  $user = new User($first_name, $last_name, $email, $phone, $age, $password);
  $user->sign_up();
}
