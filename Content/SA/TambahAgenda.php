<script src="<?php echo $base_url; ?>/Lib/jquery/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.core.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.datepicker.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/datepicker/jquery-ui.css" />

<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />

<form method="post" action="<?php echo $base_url;?>/Proses/Agenda.php">

<h5>Agenda</h5>

<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>

<fieldset>
<legend>Bahasa Indonesia</legend>

Judul<br /><br /><input type="text" name="judul" size="66" />

Catatan<br /><br /><textarea name="catatan" id="editor1" cols="50" rows="15"></textarea>
</fieldset>

<fieldset>
<legend>Bahasa Inggris</legend>

Title<br /><br /><input type="text" name="title" size="66" />

Note<br /><br /><textarea name="note" id="editor2" cols="50" rows="15"></textarea>
</fieldset>

Tanggal Agenda<br /><br /><input type="text" name="tanggal" id="tgl" class="five" /><br /><br />

Waktu Pelaksanaan<br /><input type="text" name="waktu" class="five" /> format (h:m:s). contoh: 12:09:30.

<p align="right"><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>


</form>

<script>
$("#tgl").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
});
</script>
<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>