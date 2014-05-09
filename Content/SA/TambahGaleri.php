<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />

<form method="post" action="<?php echo $base_url; ?>/Proses/Galeri.php" enctype="multipart/form-data">
<input type="hidden" name="penulis" value="<?php echo $_SESSION['username'];?>"/>
<h5>Form Galeri</h5>

<fieldset>
<legend>Bahasa Indonesia</legend>

Judul<br /><br /><input type="text" name="judul" size="66" />

Narasi<br /><br /><textarea name="narasi" id="editor1" cols="50" rows="15"></textarea>
</fieldset>

<fieldset>
<legend>Bahasa Inggris</legend>

Title<br /><br /><input type="text" name="title" size="66" />

Naration<br /><br /><textarea name="naration"id="editor2" cols="50" rows="15"></textarea>
</fieldset>

<p align="right"><input type="submit" name="simpan" value="Simpan" class="button small secondary" /></p>

</form>

<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>
