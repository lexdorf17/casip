<p align="right"><a href="<?php echo $base_url;?>/TambahLelang"  class="icon foundicon-plus"></a></p>
<h5>LELANG</h5>
<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Awal</th>
    <th>Sampai</th>
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

$table  ="lelang";
$dari=(($page*$batas)-$batas);
$id ="IdLelang";
$query  =$arsen->view($table,$dari,$batas,$id);

while($array  =$arsen->doArray()){
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $array[1];?></td>
    <td><?php echo $array['Tanggal'];?></td>
    <td><?php echo $array['Expired'];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteLelang?id=<?php echo $array[0];?>"  class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditLelang?id=<?php echo $array[0];?>"  class="icon foundicon-edit"></a>
    </td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$table2="lelang";
$url="Lelang";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>
