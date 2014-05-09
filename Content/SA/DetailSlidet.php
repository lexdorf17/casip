<h5>Detail Slide</h5><hr />
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "slide";
$where  =   array("IdSlide");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);

echo "<img src='$base_url/Data/Slide/".$array['Foto']."' width='300' height='300'><br>";
?>
<br />
<p style="font-size: 11px;" class="abu">Diunggah oleh <?php echo ucwords($array['Uploader']); ?>. Pada tanggal <?php echo date("d F Y",$date).", Pukul ".$exp[1]; ?></p>

<p>
    <a href="<?php echo $base_url;?>/ConfirmDeleteSlidet/<?php echo $array['IdSlide'];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditSlidet/<?php echo $array['IdSlide'];?>" class="icon foundicon-edit"></a>
</p>
