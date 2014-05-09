<?php
if(isset($_GET['me'])){
include("Include/Message.php");
}

$url        =   explode("/",$_SERVER['PATH_INFO']);

//$url = explode('/', substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),1));


$page       =   $url[1];
if (isset($_GET['me']) and $_GET['me']!="lf" and isset($url[3])){ 
$page       =   $url[2];
$id         =   $url[3];
}else{
$page       =   $url[1];
$id         =   $url[2];
}

if(!isset($_SESSION['username'])){
    if(!isset($_SESSION['bahasa']) || $_SESSION['bahasa']=="indonesia"){
            include ("Content/User/Content.php");        
    }else{
            include ("Content/User/english/Content.php");            
    }
}else{
    if($_SESSION['level']==1){
        include ("Content/SA/Content.php");        
    }else{
        include ("Content/SA/Content.php");            
    }
}
?>
