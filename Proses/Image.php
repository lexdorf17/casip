<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$path   =   "../Data/Galeri/";

$foto1_name   =   $_FILES['foto1']['name'];
$foto1_tmp    =   $_FILES['foto1']['tmp_name'];
$foto1_size   =   $_FILES['foto1']['size'];

$IdGaleri   =   $_POST['IdGaleri'];
$keterangan =   trim(strip_tags($_POST['keterangan']));
$tanggal    =   date("Y-m-d h:i:s");

$view = $arsen->count_data("image","IdImage");
$data = $arsen->doArray();
$IdImage = $data['jumlah']+1;

$table  = "image";
$where  = "IdImage";
$id     = $_POST['id'];  

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($foto1_name) || (empty($IdGaleri) || (empty($keterangan)))){
        $arsen->redirect("TambahImage?me=ed");   
    }else{
    
        if($foto1_size>2000000){
            $arsen->redirect("TambahImage?me=mp");   
        }else{
                    if($_POST['simpan'] || $_POST['edit']){
                        $x  =array("IdGaleri");
                        $y  =array("$IdGaleri");

                        $query  =   $arsen->pilih($table,$x,$y);
                        $row    =   $arsen->totalRecords($query);       
   
                        if($row>=2){
                        $arsen->redirect("TambahImage?me=dne");           
                        }else{
                            $arsen->upload($path,$foto1_name,$foto1_tmp);
                            if($_POST['simpan']){
                                $field  = array("IdGaleri","Image","Keterangan","Tanggal","IdImage");
                                $record = array($IdGaleri,$foto1_name,$keterangan,$tanggal,$IdImage);
                                $arsen->insert($table,$field,$record);    
                                $arsen->redirect("Image?me=is");   
                            }else{
                                $field  = array("IdGaleri","Image","Keterangan","Tanggal");
                                $record = array($IdGaleri,$foto1_name,$keterangan,$tanggal);
                                $arsen->unlink_file($path,"Image","image","IdImage",$id);
                                $arsen->edit($table,$field,$record,$where,$id);    
                                $arsen->redirect("Image?me=es");       
                            }        
                        }
                    }
                    
    }        
}

}elseif($_POST['hapus']){
    $arsen->unlink_file($path,"Image","image","IdImage",$id);
                    $arsen->hapus($table,$where,$id);    
                    $arsen->redirect("Image?me=ds");    
}else{
                    $arsen->redirect("Image");        
}
?>
