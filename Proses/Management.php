<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$username  =   strip_tags($_POST['username']);
$password  =   strip_tags($_POST['password']);
$email     =   strip_tags($_POST['email']);
$level     =   "1";
$keterangan=   "aktif";

   
$table  = "login";
$where  = "Username";

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($username) || (empty($password) || (empty($email) || (empty($level))))){
        $arsen->redirect("TambahManagement?me=ed");   
    }else{
            
    if($_POST['simpan']){
                        $field  = array("Username","Password","Email","Level","Keterangan");
                        $record = array($username,md5($password),$email,$level,$keterangan);
                        $arsen->insert($table,$field,$record);    
                    }else{
                        $field  = array("Password","Email","Level");
                        $record = array(md5($password),$email,$level);
                        $arsen->edit($table,$field,$record,$where,$username);
                        $arsen->redirect("Management?me=es");        
                    }
                
        $arsen->redirect("Management?me=is");
}

}elseif($_POST['hapus']){
        $arsen->hapus($table,$where,$username);
        $arsen->redirect("Management?me=ds");   
    
}elseif($_POST['reset']){
        $field  = array("LogError","Keterangan");
        $record = array(0,"Aktif");
        $arsen->edit($table,$field,$record,$where,$username);
        $arsen->redirect("Management?me=es");        
}else{
        $arsen->redirect("Management");       
}
?>
