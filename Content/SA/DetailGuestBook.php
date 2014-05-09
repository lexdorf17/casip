<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$table  =   "guestbook";
$where  =   array("IdGuest");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();
$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
?>

<h4><?php echo ucwords($array[1]); ?></h4>

<?php echo $array[2]; ?><br /><br />

<fieldset>
<legend>Pertanyaan</legend>
<p>
<?php echo $array[3]; ?> <span class="tsmall abu"><?php echo date("d F Y",$date).", Pukul ".$exp[1]; ?></span>
</p>


<fieldset>
<legend>Jawaban</legend>
<p><?php echo $array[5]; ?></p>
</fieldset>

</fieldset>






<p>
    <a href="<?php echo $base_url;?>/ConfirmDeleteGuestBook/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
</p>
