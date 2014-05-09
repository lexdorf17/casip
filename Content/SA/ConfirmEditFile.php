<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "file";
$where  =   array("IdFile");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>

<form method="post" action="<?php echo $base_url;?>/Proses/File.php" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $_SESSION['username']?>" name="user"/>
<input type="hidden" name="id" value="<?php echo $id[0]; ?>" />

<fieldset>
<legend>Form File</legend>

Pilih File:&nbsp;<input type="file" name="foto1"/><br /><br />
Keterangan:&nbsp;<input type="text" maxlength="100" name="ket" class="five" value="<?php echo $array['Ket']; ?>" />

<p align="right"><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>

</fieldset>
</form>
