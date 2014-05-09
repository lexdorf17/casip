<form method="post" action="<?php echo $base_url;?>/Proses/Image.php" enctype="multipart/form-data">
<fieldset>
<legend>Form Image</legend>

Judul Galeri<br /><br />
<select name="IdGaleri" class="five">
<option value="">Pilih</option>
<?php
$query=mysql_query("select * from galeri order by Judul ");
while($array=mysql_fetch_array($query)){
    echo("<option value='$array[0]'>$array[2]</option>");
}
?>
</select>

<br /><br />

Foto <br /><br /><input type="file" name="foto1"/>

<br /><br/>Keterangan<br /><br />
<textarea name="keterangan"></textarea>

<p align="right"><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>

</fieldset>
</form>
