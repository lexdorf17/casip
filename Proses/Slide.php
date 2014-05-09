<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$path   =   "../Data/Slide/";

$foto1_name   =   $_FILES['foto1']['name'];
$foto1_tmp    =   $_FILES['foto1']['tmp_name'];
$foto1_size   =   $_FILES['foto1']['size'];

$ket = $_POST['ket'];
$posisi      =   $_POST['posisi'];
$user      =   $_POST['user'];
$tanggal    =   date("Y-m-d h:i:s");

$field  = array("Foto","Tanggal","Posisi","Uploader","Ket");
$record = array($foto1_name,$tanggal,$posisi,$user,$ket);
$table = "slide";
$where = "IdSlide";
$id = $_POST['id'];

if($posisi == "tengah"){
    $slide = "Slidet";
}else{
    $slide = "Slidek";
}

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($foto1_name)){
        if($_POST['simpan']){
            $url = "Tambah$slide?me=ed";    
        }else{
            $url = "ConfirmEdit$slide/$id?me=ed";
        }
        $arsen->redirect($url);
    }else{
        if($foto1_size>2000000){
            if($_POST['simpan']){
                $url = "Tambah$slide?me=mp";    
            }else{
                $url = "ConfirmEdit$slide/$id?me=mp";
            }
            $arsen->redirect($url);
        }else{
            if($_POST['simpan'] || $_POST['edit']){
                if($_POST['simpan']){
                    $arsen->upload($path,$foto1_name,$foto1_tmp);
                    $field  = array("Foto","Tanggal","Posisi","Uploader","Ket");
                    $record = array($foto1_name,$tanggal,$posisi,$user,$ket);
                    $arsen->insert($table,$field,$record);    
                    $arsen->redirect("$slide?me=is");    
                }else{
                    $arsen->unlink_file($path,"Foto",$table,$where,$id);   
                    $arsen->upload($path,$foto1_name,$foto1_tmp);
                    $arsen->edit($table,$field,$record,$where,$id);    
                    $arsen->redirect("$slide?me=es");
                }           
            }            
        }        
}

}elseif($_POST['hapus']){
    $arsen->unlink_file($path,"Foto",$table,$where,$id);
    $arsen->hapus($table,$where,$id);    
    $arsen->redirect("$slide?me=ds");    
}else{
                    $arsen->redirect("$slide");        
}
?>
