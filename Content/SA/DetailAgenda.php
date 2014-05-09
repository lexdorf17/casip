<h5>Detail Agenda</h5><hr />
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "agenda";
$where  =   array("IdAgenda");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);

echo "<b>".$array['JudulAgenda']."</b><br>";
echo "<p>".$array['Catatan']."</p>";
echo "<b>".date("d F Y",$date).", Pukul ".$exp[1]."</b><br>";
?>
<p>
    <a href="<?php echo $base_url;?>/ConfirmDeleteAgenda/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditAgenda/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
</p>
