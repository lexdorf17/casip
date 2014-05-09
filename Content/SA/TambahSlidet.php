<form method="post" action="<?php echo $base_url;?>/Proses/Slide.php" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $_SESSION['username']?>" name="user"/>
<input type="hidden" value="tengah" name="posisi"/>

<fieldset>
<legend>Form Slide Tengah</legend>


Pilih Foto: <input type="file" name="foto1"/><br /><br />
<b>(Maximal ukuran gambar : 960 X 260)</b>

<p align="right"><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>

</fieldset>
</form>
