<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />

<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "news";
$where  =   array("IdNews");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url; ?>/Proses/Berita.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>
<h5>Form Edit Berita</h5>
<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>

<fieldset>

<legend>Bahasa Indonesia</legend>

Judul<br /><br /><input type="text" name="judul" size="66" value="<?php echo $array['Judul'];?>"/>

Isi Berita<br /><br /><textarea name="berita" id="editor1" cols="50" rows="15"><?php echo $array['News'];?></textarea>

</fieldset>


<fieldset>
<legend>Bahasa Inggris</legend>

Title<br /><br /><input type="text" name="title" size="66" value="<?php echo $array['Title'];?>" />

News Value<br /><br /><textarea name="news" id="editor2" cols="50" rows="15"><?php echo $array['NewsEnglish'];?></textarea>
</fieldset>

Gambar<br /><br /><input type="file" name="gambar" /><hr />

<p align="right"><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>


</form>

<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>
