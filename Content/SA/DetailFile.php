<h5>Detail Image</h5><hr />
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "file";
$where  =   array("IdFile");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
$size = $arsen->float_format($array['Size']/1024,2);
?>

<table>
<tr>
    <td>Nama File</td>
    <td>:</td>
    <td><?php echo $array['File']; ?></td>
</tr>
<tr>
    <td>Ukuran File</td>
    <td>:</td>
    <td><?php echo $size; ?> Kb</td>
</tr>
<tr>
    <td>Tipe File</td>
    <td>:</td>
    <td><?php echo $array['Type']; ?></td>
</tr>
<tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><?php echo ucfirst($array['Ket']); ?></td>
</tr>
</table>
<p style="font-size: 11px;" class="abu">Diunggah oleh <?php echo ucwords($array['Uploader']); ?>. Pada tanggal <?php echo date("d F Y",$date).", Pukul ".$exp[1]; ?>.</p>

<a href="<?php echo $base_url;?>/ConfirmDeleteFile/<?php echo $array['IdFile'];?>" class="icon foundicon-trash"></a>
<a href="<?php echo $base_url;?>/ConfirmEditFile/<?php echo $array['IdFile'];?>" class="icon foundicon-edit"></a>