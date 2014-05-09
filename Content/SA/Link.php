<p align="right"><a href="<?php echo $base_url;?>/TambahLink" class="icon foundicon-plus"></a></p>
<h5>Link</h5>
<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<tr>
    <th>No</th>
    <th>Link</th>
    <th>Keterangan</th>
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

$table  ="menu";
$dari=(($page*$batas)-$batas);
$id ="IdMenu";
$query  =$arsen->view($table,$dari,$batas,$id);

while($array  =$arsen->doArray()){
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $array[1];?></td>
    <td><?php echo ucfirst($array[3]);?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteLink/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditLink/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
	<a href="<?php echo $base_url;?>/DetailLink/<?php echo $array[0];?>" class="icon foundicon-right-arrow"></a>
    </td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$table2="menu";
$url="Link";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>