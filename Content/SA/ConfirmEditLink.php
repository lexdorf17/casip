<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "menu";
$where  =   array("IdMenu");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url;?>/Proses/Link.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $array[0];?>"/>

<fieldset>
<legend>Form Edit Link</legend>


Kategori<br /><br />
<select name="keterangan" class="five">
<option value="">Pilih</option>
<?php if($array['Keterangan'] == "tender"){?>
<option value="tender" selected="selected">Tender</option>
<option value="goverment">Goverment</option>
<?php }else{ ?>
<option value="tender">Tender</option>
<option value="goverment" selected="selected">Goverment</option>
<?php } ?>
</select><br /><br />


Title<br /><br />
<input type="text" name="menu" value="<?php echo $array[1];?>"/>


Image <b>(format .jpg)</b><br /><br />
<input type="file" name="foto1"/><br /><br />



Link (Jika mempunyai alamat web tersendiri)<br /><br />
<textarea name="isian" cols="45" rows="15"><?php echo $array[4];?></textarea>
<p>Awali dengan <b>http://</b> saat menginputnya 
contoh <i>http://facebook.com</i></p>

<br /><br />

<p><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>

</fieldset>