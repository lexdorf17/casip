<?php
session_start();
include_once("ArsenLibrary.php");

$arsen=new arsenlexdorf;

if(isset($_SESSION['username'])){
    session_destroy();    
}

$url	=	"";
$arsen->redirect($url);
?>
