<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$path   =   "../Data/Modul/";

$foto1_name   =   $_FILES['foto1']['name'];
$foto1_tmp    =   $_FILES['foto1']['tmp_name'];
$foto1_size   =   $_FILES['foto1']['size'];
$foto1_type   =   $_FILES['foto1']['type'];


$judul  =   trim(strip_tags($_POST['judul']));

$uploader   =   trim(strip_tags($_POST['uploader']));

$tanggal=   $_POST['tanggal'];
$expired=   $_POST['date'];   
 
/*$n      =   $_POST['n'];
$next =mktime(0, 0, 0, date("m"), date("d") + $n, date("Y"));
$expired=date("Y-m-d",$next);
*/
$table  = "lelang";
$id     = $_POST['id'];
$where  = "IdLelang";
$field  = array("Judul","Isi","Tanggal","Expired","Uploader");
$record = array($judul,$foto1_name,$tanggal,$expired,$uploader);

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($foto1_name) || (empty($judul))){
        if($_POST['simpan']){
            $url = "TambahLelang?me=ed";
        }else{
            $url = "ConfirmEditLelang?me=ed&id=$id";
        }
        $arsen->redirect($url);   
    }else{
    
        if($foto1_size>1000000){
            if($_POST['simpan']){
                $url = "TambahLelang?me=mp";
            }else{
                $url = "ConfirmEditLelang?me=mp&id=$id";
            }
            $arsen->redirect($url); 
        }else{
                if($foto1_type=="application/pdf"){
                    $arsen->upload($path,$foto1_name,$foto1_tmp);
                    if($_POST['simpan']){
                        $arsen->insert($table,$field,$record);    
                        $arsen->redirect("Lelang?me=is");
                    }else{
                        $arsen->unlink_file($path,"Isi","lelang","IdLelang",$id);
                        $arsen->edit($table,$field,$record,$where,$id);
                        $arsen->redirect("Lelang?me=es"); 
                    }
                }else{
                    if($_POST['simpan']){
                        $url = "TambahLelang?me=fns";
                    }else{
                        $url = "ConfirmEditLelang?me=fns&id=$id";
                    }
                    $arsen->redirect($url);                                
                }   
            }        
        }

}elseif($_POST['hapus']){
    $arsen->unlink_file($path,"Isi","lelang","IdLelang",$id);
    $arsen->hapus($table,$where,$id);
    $arsen->redirect("Lelang?me=ds");          
}else{
        $arsen->redirect("Lelang");              
}   
?>
