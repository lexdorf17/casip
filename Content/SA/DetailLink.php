<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "menu";
$where  =   array("IdMenu");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
?>

<h5>Detail Link</h5><hr />

<div class="six">

<img src="<?php echo $base_url; ?>/Data/Link/<?php echo $array['Image']; ?>" />

<fieldset>
<legend>Menu</legend>
<?php echo $array[1]; ?>
</fieldset>

<fieldset>
<legend>Keterangan</legend>
<?php echo $array[3]; ?>
</fieldset>

<fieldset>
<legend>Tanggal update</legend>
<?php echo date("d F Y",$date).", Pukul ".$exp[1]; ?>
</fieldset>

</div>


<p>
    <a href="/ConfirmDeleteLink/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="/ConfirmEditLink/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
</p>