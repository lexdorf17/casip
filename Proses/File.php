<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$path   =   "../Data/File/";

$foto1_name   =   $_FILES['foto1']['name'];
$foto1_tmp    =   $_FILES['foto1']['tmp_name'];
$foto1_size   =   $_FILES['foto1']['size'];
$foto1_type   =   $_FILES['foto1']['type'];

$user      =   $_POST['user'];
$tanggal    =   date("Y-m-d h:i:s");
$ket = strip_tags(trim($_POST['ket']));


$table = "file";
$where = "IdFile";
$id     = $_POST['id'];

$field  = array("File","Size","Type","Tanggal","Uploader","Ket");
$record = array($foto1_name,$foto1_size,$foto1_type,$tanggal,$user,$ket);

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($foto1_name)){
        if($_POST['simpan']){
            $url ="File?me=ed";    
        }else{
            $url ="ConfirmEditFile/$id?me=ed";
        }
        $arsen->redirect($url);   
    }else{
    
        if($foto1_size>2000000){
            if($_POST['simpan']){
                $url ="File?me=mp";    
            }else{
                $url ="ConfirmEditFile/$id?me=mp";
            }
            $arsen->redirect($url);   
        }else{
            if($_POST['simpan']){
                $arsen->upload($path,$foto1_name,$foto1_tmp);
                $arsen->insert($table,$field,$record);    
                $arsen->redirect("Files?me=is");   
            }else{
                $arsen->unlink_file($path,"File","file","IdFile",$id);
                $arsen->upload($path,$foto1_name,$foto1_tmp);
                $arsen->edit($table,$field,$record,$where,$id);    
                $arsen->redirect("Files?me=es");
            }
    }        
}

}elseif($_POST['hapus']){
    $arsen->unlink_file($path,"File","file","IdFile",$id);
    $arsen->hapus($table,$where,$id);    
    $arsen->redirect("Files?me=ds");
}else{
    $arsen->redirect("Files");        
}
?>
