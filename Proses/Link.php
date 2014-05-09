<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$path   =   "../Data/Link/";

$menu   =   strip_tags($_POST['menu']);
$keterangan= $_POST['keterangan'];
$isian  =   trim(strip_tags($_POST['isian']));

$foto1_name   =   $_FILES['foto1']['name'];
$foto1_tmp    =   $_FILES['foto1']['tmp_name'];
$foto1_size   =   $_FILES['foto1']['size'];
$foto1_type   =   $_FILES['foto1']['type'];

/*$foto2_name   =   $_FILES['foto2']['name'];
$foto2_tmp    =   $_FILES['foto2']['tmp_name'];
$foto2_size   =   $_FILES['foto2']['size'];
$foto2_type   =   $_FILES['foto2']['type'];*/

$tanggal=   date("Y-m-d h:i:s");

$view = $arsen->count_data("menu","IdMenu");
$data = $arsen->doArray();
$IdMenu = $data['jumlah']+1;

$table  = "menu";
$where  = "IdMenu";
$id     = $_POST['id'];  

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($foto1_name) || (empty($menu) || (empty($keterangan) ))){
        if($_POST['simpan']){
            $url = "TambahLink?me=ed";
        }else{
            $url = "ConfirmEditLink?me=ed";
        }
        $arsen->redirect($url);   
    }else{
    
        if($foto1_size>1000000 || $foto1_type!='image/jpeg'){
            if($_POST['simpan']){
                $url = "TambahLink?me=mp";
            }else{
                $url = "ConfirmEditLink?me=mp";
            }
            $arsen->redirect($url);    
        }else{
            $arsen->upload($path,$foto1_name,$foto1_tmp);   
            //$arsen->upload($path,$foto2_name,$foto2_tmp);
            if($_POST['simpan']){
                $field  = array("IdMenu","Menu","Image","Keterangan","Isian","Tanggal");
                $record = array($IdMenu,$menu,$foto1_name,$keterangan,$isian,$tanggal);
                $arsen->insert($table,$field,$record);    
                $arsen->redirect("Link?me=is");
            }else{
                $field  = array("Menu","Image","Keterangan","Isian","Tanggal");
                $record = array($menu,$foto1_name,$keterangan,$isian,$tanggal);
                $arsen->unlink_file($path,"Image","menu","IdMenu",$id);
                $arsen->edit($table,$field,$record,$where,$id);    
                $arsen->redirect("Link?me=es");    
            }
        }        
    }
}else{
    $arsen->unlink_file($path,"Image","menu","IdMenu",$id);
    $arsen->hapus($table,$where,$id);    
    $arsen->redirect("Link?me=ds");    
}
?>