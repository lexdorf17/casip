<?php
session_start();
    $session    =   "english";
    $_SESSION['bahasa'] =   $session;
    header("location:index.php");
    exit();
?>