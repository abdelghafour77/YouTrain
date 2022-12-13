<?php

require_once dirname(__DIR__) . '/include/session.php';

if (!isset($_SESSION['first_name'])) {
    var_dump($_SESSION);
    // header('location: index.php');
    die;
}
