<?php

/**
 * @author lexdorf
 * @copyright 2013
 */

include_once("ArsenLibrary.php");

$arsen=new arsenlexdorf;
$arsen->doConnect();

$r1 = str_replace('<p>','',trim($_POST['isi']));
$r2 = str_replace('</p>','',$r1);

if($_POST['indo']){
    $update =   "update content set marquee_indo='$r2'";
}else{
    $update =   "update content set marquee_ing='$r2'";
}


mysql_query($update);
$arsen->redirect("ManageContent?me=es");        
          
?>