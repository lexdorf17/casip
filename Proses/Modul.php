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

$tanggal=   date("Y-m-d h:i:s");

$view = $arsen->count_data("modul","IdModul");
$data = $arsen->doArray();
$IdModul = $data['jumlah']+1;

$table  = "modul";
$id     = $_POST['id'];
$where  = "IdModul";

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($foto1_name) || (empty($judul))){
        $arsen->redirect("TambahModul?me=ed");   
    }else{
    
        if($foto1_size>1000000){
            $arsen->redirect("TambahModul?me=mp");   
        }else{
                if($foto1_type=="application/pdf"){
                    $arsen->upload($path,$foto1_name,$foto1_tmp);
                    if($_POST['simpan']){
                        $field  = array("IdModul","Modul","TanggalUpdate","Judul","Uploader");
                        $record = array($IdModul,$foto1_name,$tanggal,$judul,$uploader);
                        $arsen->insert($table,$field,$record);    
                        $arsen->redirect("Modul?me=is");
                    }else{
                        $field  = array("Modul","TanggalUpdate","Judul","Uploader");
                        $record = array($foto1_name,$tanggal,$judul,$uploader);
                        $arsen->unlink_file("../Data/Modul/","Modul","modul","IdModul",$id);
                        $arsen->edit($table,$field,$record,$where,$id);
                        $arsen->redirect("Modul?me=es"); 
                    }
                }else{
                    if($_POST['simpan']){
                        $url = "TambahModul?me=fns";
                    }else{
                        $url = "ConfirmEditModul/$id?me=fns";
                    }
                    $arsen->redirect($url);                                
                }   
            }        
        }

}elseif($_POST['hapus']){
    $arsen->unlink_file("../Data/Modul/","Modul","modul","IdModul",$id);
        $arsen->hapus($table,$where,$id);
        $arsen->redirect("Modul?me=ds");          
}else{
        $arsen->redirect("Modul");              
}
?>