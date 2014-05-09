<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "modul";
$where  =   array("IdModul");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['TanggalUpdate']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
?>
<h5>Detail Modul</h5>
<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<tr>
<th>Judul</th>
<td><?php echo $array[3]; ?></td>
</tr>
<tr>
<th>Modul</th>
<td><?php echo $array[1]; ?></td>
</tr>
<tr>
<th>Uploader</th>
<td><?php echo $array[4]; ?></td>
</tr>
<tr>
<th>Tanggal Update</th>
<td><?php echo date("d F Y",$date).", Pukul ".$exp[1]; ?></td>
</tr>
</table>

<p>
    <a href="<?php echo $base_url;?>/ConfirmDeleteModul/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditModul/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
</p>
