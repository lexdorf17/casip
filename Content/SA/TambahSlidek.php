<form method="post" action="<?php echo $base_url;?>/Proses/Slide.php" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $_SESSION['username']?>" name="user"/>
<input type="hidden" value="kiri" name="posisi"/>

<fieldset>
<legend>Form Slide Kiri</legend>

<table>
<tr>
    <td>Pilih Foto</td>
    <td><input type="file" name="foto1"/></td>
</tr>
<tr>
    <td>Keterangan</td>
    <td><textarea name="ket"></textarea></td>
</tr>
</table>


<p align="right"><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>

</fieldset>
</form>
