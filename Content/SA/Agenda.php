<p align="right"><a href="<?php echo $base_url;?>/TambahAgenda" class="icon foundicon-plus"></a></p>
<h5>Agenda</h5>
<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<tr>
    <th>No</th>
    <th>Judul Agenda</th>
    <th>Tanggal Pelaksanaan</th>
    <th>Aksi</th>
</tr>
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =10;

$table  ="agenda";
$id="IdAgenda";
$dari=(($page*$batas)-$batas);
$query  =$arsen->view($table,$dari,$batas,$id);

$i=1;
while($array  =$arsen->doArray()){
    $exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $array['JudulAgenda'];?></td>
    <td><?php echo date("d M Y",$date).", Pukul ".$exp[1];?></td>
    <td>
    <a href="<?php echo $base_url;?>/ConfirmDeleteAgenda/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditAgenda/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
    <a href="<?php echo $base_url;?>/DetailAgenda/<?php echo $array[0];?>" class="icon foundicon-right-arrow"></a>
	</td>
</tr>
<?php
$i++;
}
?>
</table>
<div align="center">
<?php
$table2="agenda";
$url="Agenda";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>