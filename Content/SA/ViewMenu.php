<a href="<?php echo $base_url;?>/index.php/TambahMenu">Tambah Data</a>
<table border="1" align="center">
<tr>
    <th>Menu</th>
    <th>Url</th>
    <th>Aksi</th>
</tr>
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

$hal   =   $_GET['page'];
if(!isset($hal)){
    $page   =   1;
}else{
    $page   =   $hal;
}
$batas  =1;

$table  ="menu";
$dari=(($page*$batas)-$batas);
$query  =$arsen->view($table,$dari,$batas);

while($array  =$arsen->doArray()){
?>
<tr>
    <td><?php echo $array[1];?></td>
    <td><?php echo $array[2];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteMenu/<?php echo $array[0];?>">Delete</a>
    <a href="<?php echo $base_url;?>/ConfirmEditMenu/<?php echo $array[0];?>">Edit</a>
    </td>
</tr>
<?php
}
?>
</table>
<div align="center">
<?php
$url="ViewMenu";
$arsen->pagging($table,$page,$batas,$url);
$arsen->doClose();
?>
</div>