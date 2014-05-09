<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />

<form method="post" action="<?php echo $base_url;?>/Proses/Berita.php" enctype="multipart/form-data">
<h5>Form Berita</h5>
<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>

<fieldset>

<legend>Bahasa Indonesia</legend>

Judul<br /><br /><input type="text" name="judul" size="66" />


Isi Berita<br /><br /><textarea name="berita" id="editor1" cols="50" rows="15"></textarea>

</fieldset>

<fieldset>
<legend>Bahasa Inggris</legend>

Title<br /><br /><input type="text" name="title" size="66" />

News Value<br /><br /><textarea name="news" id="editor2" cols="50" rows="15"></textarea>

</fieldset>

Gambar<br /><br /><input type="file" name="gambar" />
<hr />
<p align="right"><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>

</form>

<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>