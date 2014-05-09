<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "image";
$where  =   array("IdImage");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url;?>/Proses/Image.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>

<fieldset>
<legend>Form Edit Image</legend>

Judul Galeri<br /><br />
<select name="IdGaleri" class="five">
<option value="">Pilih</option>
<?php
$query=mysql_query("select * from galeri order by Judul ");
while($x=mysql_fetch_array($query)){
    echo("<option value='$x[0]'>$x[2]</option>");
}
?>
</select><br /><br />


Foto<br /><br />
<input type="file" name="foto1"/>

Keterangan<br /><br />
<textarea name="keterangan"><?php echo $array[2];?></textarea>


<input type="submit" name="edit" value="Edit" class="button small secondary"/>

</fieldset>
