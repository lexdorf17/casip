<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "modul";
$where  =   array("IdModul");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url;?>/Proses/Modul.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>
<input type="hidden" name="uploader" value="<?php echo $_SESSION['username'];?>"/>

<fieldset>
<legend>Form Modul</legend>

Judul<br /><br />
<input type="text" name="judul" value="<?php echo $array[3];?>"/>

Modul<br /><br /><input type="file" name="foto1"/><br /><br />

<p><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>
</fieldset>

</form>
