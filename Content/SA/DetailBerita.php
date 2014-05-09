<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "news";
$where  =   array("IdNews");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);

if($array['Uploader'] == ""){
    $uploader = "-";
}else{
    $uploader = ucwords($array['Uploader']);
}

if($array['Gambar']==""){
    $gambar =  "Design/images/news_default.jpg"; 
}else{
    $gambar =   "Data/Berita/".$array['Gambar'];
}

echo "<h5>".$array[1]."</h5><hr>";
?>
<img src="<?php echo $base_url; ?>/<?php echo $gambar;?>" class="five" align="left" style="margin: 5px 10px 15px 0px;" />
<?php
echo "<p style='text-align: justify;'>".$array[2]."</p>";
echo "<span style='font-size: 11px;' class='abu'>Ditulis oleh: ".$uploader.". Pada tanggal ".date("d F Y",$date).", Pukul ".$exp[1]."</span><br>";
?>
<p>
    <a href="/ConfirmDeleteBerita/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="/ConfirmEditBerita/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
</p>
