<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />

<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "galeri";
$where  =   array("IdGaleri");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="/Proses/Galeri.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>
<input type="hidden" name="penulis" value="<?php echo $_SESSION['username'];?>"/>
<h5>Form Edit Galeri</h5>

<fieldset>

<legend>Bahasa Indonesia</legend>

Judul<br /><br /><input type="text" name="judul" size="66" value="<?php echo $array[2];?>"/>

Narasi<br /><br /><textarea name="narasi" id="editor1" cols="50" rows="15"><?php echo $array[3];?></textarea>

</fieldset>



<fieldset>
<legend>Bahasa Inggris</legend>

Title<br /><br /><input type="text" name="title" size="66" value="<?php echo $array['JudulEnglish']; ?>" />

Naration<br /><br /><textarea name="naration" id="editor2" cols="50" rows="15"><?php echo $array['NarasiEnglish']; ?></textarea>
</fieldset>

<p align="right"><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>

</form>

<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>
