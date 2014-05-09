<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "slide";
$where  =   array("IdSlide");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url;?>/Proses/Slide.php" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $_SESSION['username']?>" name="user"/>
<input type="hidden" value="tengah" name="posisi"/>
<input type="hidden" value="<?php echo $id[0]; ?>" name="id"/>

<fieldset>
<legend>Form Slide Tengah</legend>


Pilih Foto: <input type="file" name="foto1"/> <br /><br />
<b>(Maximal ukuran gambar : 960 X 260)</b>

<p align="right"><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>

</fieldset>
</form>
