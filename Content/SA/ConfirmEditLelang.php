<script src="<?php echo $base_url; ?>/Lib/jquery/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.core.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.datepicker.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/datepicker/jquery-ui.css" />
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "lelang";
$where  =   array("IdLelang");
$id     =   array($_GET['id']);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url;?>/Proses/Lelang.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>
<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>

<fieldset>
<legend>Form Edit Lelang</legend>

Judul<br /><br />
<input type="text" name="judul" value="<?php echo $array[1];?>"/>



Lelang File (PDF)<br /><br />
<input type="file" name="foto1"/><br /><br />



Awal Tayang<br /><br />
<input type="text" id="tgl1" name="tanggal" value="<?php echo $array['Tanggal']; ?>" /><br /><br />



Akhir Tayang<br /><br />
<input type="text" id="tgl2" name="date" value="<?php echo $array['Expired']; ?>" /><br /><br />




<p><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>

</fieldset>

</form>
<script>
$("#tgl1").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
});
$("#tgl2").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
});
</script>
