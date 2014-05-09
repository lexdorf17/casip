<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "message";
$where  =   array("Code");
$id     =   array("'$_GET[me]'");

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();

if($array['Status'] == 0){
?>

<div class="alert-box alert">
  <?php echo $array[3]; ?>
  <a href="" class="close">&times;</a>
</div>

<?php
}else if($array['Status'] == 1){
?>

<div class="alert-box success">
  <?php echo $array[3]; ?>
  <a href="" class="close">&times;</a>
</div>

<?php
}else{
?>

<div class="alert-box warning">
  <?php echo $array[3]; ?>
  <a href="" class="close">&times;</a>
</div>

<?php } ?>
