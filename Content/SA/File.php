<form method="post" action="<?php echo $base_url;?>/Proses/File.php" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $_SESSION['username']?>" name="user"/>
<fieldset>
<legend>Form File</legend>

Pilih File:&nbsp;<input type="file" name="foto1"/><br /><br />
Keterangan:&nbsp;<input type="text" maxlength="100" name="ket" class="five" />
<p align="right"><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>

</fieldset>
</form>
