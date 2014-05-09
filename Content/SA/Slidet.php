<p align="right"><a href="<?php echo $base_url;?>/TambahSlidet" class="icon foundicon-plus"></a></p>
<h5>Slide Tengah</h5>
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

$table  ="slide";
$id ="Tanggal";
$dari=(($page*$batas)-$batas);
$query  =$arsen->view($table,$dari,$batas,$id,"Posisi","tengah");

while($array  =$arsen->doArray()){
$kata   =   $array[1];
$foto   =   substr($kata,0,20);
?>
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $foto;?>...</td>
    <td><?php echo ucwords($array['Uploader']);?></td>
        <td><?php echo $array['Tanggal'];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteSlidet/<?php echo $array['IdSlide'];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditSlidet/<?php echo $array['IdSlide'];?>" class="icon foundicon-edit"></a>
	<a href="<?php echo $base_url;?>/DetailSlidet/<?php echo $array['IdSlide'];?>" class="icon foundicon-right-arrow"></a>
    </td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$table2="slide";
$url="Slidet";
$arsen->pagging($table2,$page,$batas,$url,"Posisi","tengah");
$arsen->doClose();
?>
</div>
