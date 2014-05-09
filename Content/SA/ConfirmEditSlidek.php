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
<input type="hidden" value="kiri" name="posisi"/>
<input type="hidden" value="<?php echo $id[0]; ?>" name="id"/>

<fieldset>
<legend>Form Slide Kiri</legend>


<table>
<tr>
    <td>Pilih Foto</td>
    <td><input type="file" name="foto1"/></td>
</tr>
<tr>
    <td>Keterangan</td>
    <td><textarea name="ket"><?php echo $array['Ket']; ?></textarea></td>
</tr>
</table>

<p align="right"><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>

</fieldset>
</form>
