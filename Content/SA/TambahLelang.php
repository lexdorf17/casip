<script src="<?php echo $base_url; ?>/Lib/jquery/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.core.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/datepicker/jquery.ui.datepicker.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/datepicker/jquery-ui.css" />

<form method="post" action="<?php echo $base_url;?>/Proses/Lelang.php" enctype="multipart/form-data">
<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>
<fieldset>
<legend>Form Lelang</legend>


Judul<br /><br /><input type="text" name="judul"/>

Lelang (PDF)<br /><br />
<input type="file" name="foto1"/><br /><br />

Awal Tayang<br /><br /><input type="text" name="tanggal" id="tgl1" /><br /><br />

Akhir Tayang<br /><br /><input type="text" name="date" id="tgl2" /><br /><br />

<p><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>
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