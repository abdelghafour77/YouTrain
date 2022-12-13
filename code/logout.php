<?php
require_once dirname(__DIR__) . '/code/include/session.php';
session_destroy();
header('location:index.php');
