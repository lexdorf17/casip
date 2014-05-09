
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =5;

$table  ="menu";
$dari=(($page*$batas)-$batas);
$where =array("Keterangan");
$x    =array("'goverment'");
$sort  ="IdMenu";
$query  =$arsen->relasi($table,$where,$x,$dari,$batas,$sort);

while($array  =$arsen->doArray()){
?>
<a href="<?php echo $array[4];?>" target="_blank"><img src="<?php echo "$base_url/Data/Link/$array[2]";?>"/>

<?php
}
?>

