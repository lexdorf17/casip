<p align="right"><a href="<?php echo $base_url;?>/TambahModul" class="icon foundicon-plus"></a></p>
<h5>Modul</h5>
<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Aksi</th>
</tr>
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page']) || $_GET['page'] == 1){
    $page   =   1;
    $i=1;
}else{
    $page   =   $_GET['page'];
    $i = $_GET['page']*10-9;
}
$batas  =10;

$table  ="modul";
$dari=(($page*$batas)-$batas);
$id ="IdModul";
$query  =$arsen->view($table,$dari,$batas,"TanggalUpdate");

while($array  =$arsen->doArray()){
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $array[3];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteModul/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditModul/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
	<a href="<?php echo $base_url;?>/DetailModul/<?php echo $array[0];?>" class="icon foundicon-right-arrow"></a>
    </td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$table2="modul";
$url="Modul";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>