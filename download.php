<?php

include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$id = $_GET['id'];
$arsen->pilih("file",array("IdFile"),array($id));
$array = $arsen->doArray();

header("Content-Disposition: attachment; filename=".$array['File']);
header("Content-length: ".$array['Size']);
header("Content-type: ".$array['Type']);

$fp = fopen("Data/File/".$array['File'], 'r');
$content = fread($fp, filesize("Data/File/".$array['File']));
fclose($fp);

echo $content;
exit;
?>