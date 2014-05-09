<?php
session_start();
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$kode = $_POST['kode'];
if($_POST['submit']){
    if(empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['website'])){
        $arsen->redirect("Berita/$_POST[idnews]?me=ed"); 
    }else{
        if(strtoupper($kode) == $_SESSION['kodeRandom']){
            mysql_query("INSERT INTO `t40196_casip`.`komentar` (`id_komentar`, `id_news`, `nama`, `email`, `website`, `komentar`, `tanggal`)
            VALUES (NULL, '$_POST[idnews]', '$_POST[nama]', '$_POST[email]', '$_POST[website]', '$_POST[komentar]', sysdate());");

            $arsen->redirect("Berita/$_POST[idnews]?me=cs");   
        }else{
            $arsen->redirect("Berita/$_POST[idnews]?me=cf");          
        }
    }
}

?>
