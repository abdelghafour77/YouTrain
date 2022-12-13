<?php
session_start();
if (isset($_SESSION['id'])) {
  // var_dump($_SESSION);
  header('location: index.php');
  die;
}
