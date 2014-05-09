<p align="right"><a href="<?php echo $base_url;?>/TambahBerita" class="foundicon-plus"></a></p>
<h5>Berita</h5>
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

$table  ="news";
$id="IdNews";
$dari=(($page*$batas)-$batas);
$query  =$arsen->view($table,$dari,$batas,$id);

while($array  =$arsen->doArray()){
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $array['Judul'];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteBerita/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditBerita/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
    <a href="<?php echo $base_url;?>/DetailBerita/<?php echo $array[0];?>" class="foundicon-right-arrow"></a>
	</td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$table2="news";
$url="News";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>