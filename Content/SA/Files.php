<p align="right"><a href="<?php echo $base_url;?>/File" class="icon foundicon-plus"></a></p>
<h5>File</h5>
<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<tr>
    <th>No</th>
    <th>File</th>
    <th>Uploader</th>
    <th>Tanggal</th>
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

$table  ="file";
$id ="Tanggal";
$dari=(($page*$batas)-$batas);
$query  =$arsen->view($table,$dari,$batas,"Tanggal");

while($array  =$arsen->doArray()){
$kata   =   $array[1];
$foto   =   substr($kata,0,20);
?>
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $foto;?>...</td>
    <td><?php echo $array[5];?></td>
        <td><?php echo $array[4];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteFile/<?php echo $array['IdFile'];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditFile/<?php echo $array['IdFile'];?>" class="icon foundicon-edit"></a>
	<a href="<?php echo $base_url;?>/DetailFile/<?php echo $array['IdFile'];?>" class="icon foundicon-right-arrow"></a>
    </td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$table2="file";
$url="Files";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>
