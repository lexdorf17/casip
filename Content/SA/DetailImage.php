<h5>Detail Image</h5><hr />
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "image";
$where  =   array("IdImage");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
?>

<b><?php echo ucwords($array[2]); ?></b>
<br />
<p style="font-size: 11px;" class="abu">Diunggah pada tanggal <?php echo date("d F Y",$date).", Pukul ".$exp[1]; ?></p>


<?php
echo "<img src='$base_url/Data/Galeri/".$array['Image']."' width='300' height='300'><br>";
?>
<br />
<p>
    <a href="<?php echo $base_url;?>/ConfirmDeleteImage/<?php echo $array[4];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditImage/<?php echo $array[4];?>" class="icon foundicon-edit"></a>
</p>
