<script src="<?php echo $base_url; ?>/Lib/jquery/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.core.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.datepicker.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/datepicker/jquery-ui.css" />
<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />

<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "agenda";
$where  =   array("IdAgenda");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$get = explode(" ",$array['Tanggal']);
?>
<form method="post" action="<?php echo $base_url; ?>/Proses/Agenda.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>

<h5>Form Edit Agenda</h5>

<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>

<fieldset>
<legend>Bahasa Indonesia</legend>



Judul<br /><br /><input type="text" name="judul" value="<?php echo $array['JudulAgenda']; ?>" size="66" />



Catatan<br /><br /><textarea name="catatan" id="editor1" cols="50" rows="15"><?php echo $array['Catatan']; ?></textarea>


</fieldset>



<fieldset>
<legend>Bahasa Inggris</legend>



Title<br /><br /><input type="text" name="title" size="66" value="<?php echo $array['Title']; ?>" />



Note<br /><br /><textarea name="note" id="editor2" cols="50" rows="15"><?php echo $array['Note']; ?></textarea>

</fieldset>

Tanggal Agenda<br /><br /><input type="text" name="tanggal" id="tgl" value="<?php echo $get[0]; ?>" class="five" /><br /><br />

Waktu Pelaksanaan<br /><input type="text" name="waktu" value="<?php echo $get[1]; ?>"  class="five" /> format (h:m:s). contoh: 12:09:30.


<hr />

<p align="right"><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>


</form>

<script>
$("#tgl").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
});
</script>
<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>
