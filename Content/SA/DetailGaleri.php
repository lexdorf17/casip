<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "galeri";
$where  =   array("IdGaleri");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);

if($array['Penulis'] == ""){
    $uploader = "-";
}else{
    $uploader = ucwords($array['Penulis']);
}

echo "<h5>".$array[2]."</h5><hr/>";
echo "<p>".$array[3]."<p>";
echo "<span style='font-size: 11px;' class='abu'>Ditulis oleh ".$uploader.". Pada tanggal ".date("d F Y",$date).", Pukul ".$exp[1]."</span><br>";
?>
<p>
    <a href="/ConfirmDeleteGaleri/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="/ConfirmEditGaleri/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
</p>
