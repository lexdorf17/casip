<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$id     =   $_POST['id'];

/*


$foto1_size   =   $_FILES['foto1']['size'];

$foto2_name   =   $_FILES['foto2']['name'];
$foto2_tmp    =   $_FILES['foto2']['tmp_name'];
$foto2_size   =   $_FILES['foto2']['size'];
*/
$judul  =   strip_tags($_POST['judul']);
$berita =   $_POST['berita'];
$title  =   strip_tags($_POST['title']);
$news =   $_POST['news'];
$tanggal=   date("Y-m-d h:i:s");
$uploader = $_POST['uploader'];

$path   =   "../Data/Berita/";
$gambar   =   $_FILES['gambar']['name'];
$tmp    =   $_FILES['gambar']['tmp_name'];
   
$table  = "news";
$where  = "IdNews";
$field  = array("Judul","News","Tanggal","Title","NewsEnglish","Uploader","Gambar");
$record = array($judul,$berita,$tanggal,$title,$news,$uploader,$gambar);

//$field  = array("News","Tanggal","Foto_1","Foto_2");
//$record = array($berita,$tanggal,$foto1_name,$foto2_name);

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($berita) || empty($judul) || empty($news) || empty($title)){
        $arsen->redirect($web."/TambahBerita?me=ed");   
    }else{
    
        /*if($foto1_size>2000000 || $foto2_size>2000000){
            $arsen->redirect("TambahBerita?me=mp");   
        }else{
                if(isset($foto2_name)){
                    $arsen->upload($path,$foto1_name,$foto1_tmp);
                    $arsen->upload($path,$foto2_name,$foto2_tmp);
                }else{
                    $arsen->upload($path,$foto1_name,$foto1_tmp);
                }
                       
    }*/        
        
        if($_POST['simpan']){
            $arsen->upload($path,$gambar,$tmp);
            $arsen->insert($table,$field,$record);    
        }else{
            $arsen->unlink_file($path,"Gambar","news","IdNews",$id);
            $arsen->upload($path,$gambar,$tmp);
            $arsen->edit($table,$field,$record,$where,$id);
            $arsen->redirect($web."/Berita?me=es");        
        }
                
        $arsen->redirect($web."/Berita?me=is");
    }

}elseif($_POST['act'] = "hapus"){
    $arsen->unlink_file($path,"Gambar","news","IdNews",$id);
    $arsen->hapus($table,$where,$id);
    $arsen->redirect($web."/Berita?me=ds");   
    
}else{
    $arsen->redirect($web."/Berita");   
}
?>
