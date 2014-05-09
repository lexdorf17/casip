<?php
session_start();
    $session    =   "indonesia";
    $_SESSION['bahasa'] =   $session;
    header("location:index.php");
    exit();
?>