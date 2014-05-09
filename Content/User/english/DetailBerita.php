<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "news";
$where  =   array("IdNews");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();

echo "<br><b>".$array[1]."</b>";
echo "<br><div>".$array[2]."</div>";
echo "<br><div class=date>".$array[3]."</div>";

?>
