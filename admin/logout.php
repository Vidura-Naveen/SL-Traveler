<?php
 include("../path.php");



 
session_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['admin']);
    unset($_SESSION['massage']);
    unset($_SESSION['type']);

    session_destroy();


    header('location: ' .BASE_URL  . 'admin/index.php');














?>