<form method="post" action="<?php echo $base_url;?>/Proses/Modul.php" enctype="multipart/form-data">
<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>
<fieldset>
<legend>Form Modul</legend>

Judul<br /><br /><input type="text" name="judul" class="five"/>

Modul<br /><br /><input type="file" name="foto1"/>
<br/><br />
<p><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>

</fieldset>
</form>