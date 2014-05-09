<table align="left" id="view" cellpadding="0" cellspacing="0">
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $hal   =   1;
}else{
    $hal   =   $_GET['page'];
}
$batas  =10;

$table  ="`lelang` where `Expired` > CURRENT_DATE() and `Tanggal` <= CURRENT_DATE()";
$dari=(($hal*$batas)-$batas);
$id ="IdLelang";
$query  =$arsen->view($table,$dari,$batas,$id);

while($array  =$arsen->doArray()){
//$tanggal	=;
?>
<tr>
    <td><a href="/Data/Modul/<?php echo $array[2];?>" target="_blank"><?php echo $array[1];?></a></td>
 </tr>

<tr>
    <td>Berlaku sampai : <?php echo $array['Expired'];?></td>
 </tr>

<?php
}
?>
</table>

<br/>
<div></div>
