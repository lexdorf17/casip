<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

mysql_query("UPDATE guestbook SET Baca='1' WHERE IdGuest='".$id."'");
$sql	=	mysql_query("select * from guestbook where IdGuest='$id'");
$array  =   mysql_fetch_array($sql);
?>
<a href="<?php echo $base_url;?>/ConfirmDeleteGuestBook/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
<form method="post" action="<?php echo $base_url;?>/Proses/GuestBook.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id[0];?>"/>

<fieldset>

<legend>Form Jawab</legend>

<strong>Tanggal Masuk</strong> : <?php echo $array[4];?><br /><br />

<strong>Dari</strong> : <?php echo $array[1];?><br /><br />

<strong>Pertanyaan</strong><br /><br /><p><?php echo $array[3];?></p>

<strong>Jawab</strong><br /><br />
<textarea name="jawaban"></textarea>

<input type="submit" name="edit" class="button small secondary" value="Edit"/>

</fieldset>

</form>    