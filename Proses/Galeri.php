<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$tanggal=   date("Y-m-d h:i:s");
$judul  =   trim(strip_tags($_POST['judul']));
$narasi =   trim($_POST['narasi']);
$penulis=   trim(strip_tags($_POST['penulis']));
$title  =   trim(strip_tags($_POST['title']));
$naration =   trim($_POST['naration']);
   
$table  = "galeri";
$field  = array("Tanggal","Judul","Narasi","Penulis","JudulEnglish","NarasiEnglish");
$record = array($tanggal,$judul,$narasi,$penulis,$title,$naration);
$where  = "IdGaleri";
$id     = $_POST['id'];

if($_POST['simpan'] || ($_POST['edit'])){
    
    if(empty($tanggal) || empty($judul) || empty($narasi) || empty($title) || empty($naration)){
        $arsen->redirect("TambahGaleri?me=ed");   
    }else{
    
            if($_POST['simpan']){
               $arsen->insert($table,$field,$record);    
               $arsen->redirect("Galeri?me=is");
               }else{
               $arsen->edit($table,$field,$record,$where,$id);    
               $arsen->redirect("Galeri?me=es"); 
               }   
    }        
}elseif($_POST['hapus']){
    $arsen->hapus($table,$where,$id);
    $arsen->redirect("Galeri?me=ds");
               
}else{
    $arsen->redirect("Galeri");
}

?>
