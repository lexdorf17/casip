<?php

/**
 * @author lexdorf
 * @copyright 2013
 */

include_once("ArsenLibrary.php");

$arsen=new arsenlexdorf;
$arsen->doConnect();

$isi    =   trim($_POST['isi']);

if($_POST['indo']){
    $update =   "update content set home_indo='$isi'";
}else{
    $update =   "update content set home_ing='$_POST[isi]'";
}

mysql_query($update);

$arsen->redirect("ManageContent?me=es");        
          
?>