<form method="post" action="<?php echo $base_url;?>/Proses/Link.php" enctype="multipart/form-data">
<fieldset>
<legend>Form Link</legend>

Kategori<br /><br />
<select name="keterangan" class="five">
<option value="">Pilih</option>
<option value="tender">Tender</option>
<option value="goverment">Goverment</option>
</select><br /><br />

Title<br /><br /><input type="text" name="menu"/>

Image <b>(format .jpg)</b><br /><br /><input type="file" name="foto1"/><br /><br />

Link (Jika menu mempunya alamat web tersendiri)<br /><br /><textarea name="isian"cols="45" rows="15"></textarea>

<p>Awali dengan <b>http://</b> saat menginputnya 
contoh <i>http://facebook.com</i></p>



<p><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>
</fieldset>
</form>
