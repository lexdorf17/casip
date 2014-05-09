<p align="right"><a href="<?php echo $base_url;?>/TambahManagement"  class="icon foundicon-plus"></a></p>
<h5>Management Account</h5>
<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<tr>
    <th>No</th>
    <th>Username</th>
    <th>Email</th>
    <th>Status</th>
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

$table  ="login";
$id ="Username";
$dari=(($page*$batas)-$batas);
$query  =$arsen->view($table,$dari,$batas,$id);

while($array  =$arsen->doArray()){
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $array[0];?></td>
    <td><?php echo $array[2];?></td>
    <td><?php echo $array[5];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteManagement/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditManagement/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
	<a href="<?php echo $base_url;?>/DetailManagement/<?php echo $array[0];?>" class="icon foundicon-right-arrow"></a>
    </td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$url="Management";
$arsen->pagging($table,$page,$batas,$url);
$arsen->doClose();
?>
</div>