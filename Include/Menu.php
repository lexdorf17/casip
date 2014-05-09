<?php
if(!isset($_SESSION['username'])){
    include ("Content/User/Menu.php");
}else{
    if($_SESSION['level']==1){
        include ("Content/SA/Menu.php");        
    }else{
        include ("Content/SA/Menu.php");            
    }
}
?>