<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "guestbook";
$where  =   array("IdGuest");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url;?>/Proses/GuestBook.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>
<h5>Guestbook</h5>
<table id="view" cellpadding="3" cellspacing="3">
<tr>
<td>Dari</td>
<td><?php echo $array[1];?></td>
</tr>

<tr>
<td>Pertanyyan</td>
<td><?php echo $array[3];?></td>
</tr>

<?php 
$jawaban    =   $array[5];
if($jawaban!=""){
?>
<tr>
<td>Jawab</td>
<td><?php echo $jawaban;?></td>
</tr>
<?php
}
?>
<tr>
<td></td>
<td><input type="submit" name="hapus" value="Hapus" class="button small secondary"/> <input type="submit" name="tidak" value="Tidak" class="button small secondary"/></td>
</tr>

</table>
</form>
