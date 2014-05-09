<?php
session_start();
include_once("ArsenLibrary.php");

$arsen=new arsenlexdorf;
$arsen->doConnect();

$username   =   strip_tags($_POST['username']);
$pass       =   strip_tags($_POST['password']);
$password   =   md5($pass);

$table  ="login";
$field  =array("username","password");
$record =array($username,$password);

$arsen->login($table,$field,$record);



$row    =   $arsen->totalRecords();
$array  =   $arsen->doArray();
$hak    =   $array['Level'];
$error  =   $array['LogError'];

$query  =   $arsen->pilih($table,array("username"),array("'$username'"));
$x      =   $arsen->doArray();

$log    =   $x['LogError'];
$jumlah =   $log+1;
   if($row==0){
        session_destroy();
            if($log<3){
                $field  =   array("LogError");
                $record =   array($jumlah);
                $where  =   "username";                            
                $arsen->edit($table,$field,$record,$where,$username);
                $arsen->redirect("L?me=lf");
            }else{
                $field  =   array("Keterangan");
                $record =   array("Non Aktif");
                $where  =   "username";                            
                $arsen->edit($table,$field,$record,$where,$username);
                $arsen->redirect("L?me=ad");
            }
        
    }else{
            if($error>=3){
                session_destroy();
                $arsen->redirect("L?me=ad");    
            }else{
            $_SESSION['username']   =   $username;
            $_SESSION['level']      =   $hak;
            $arsen->redirect("home");        
            }
         }
    
$arsen->doClose();
?>
