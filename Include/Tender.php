
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
$x      =array("'tender'");
$sort  ="IdMenu";
$query  =$arsen->relasi($table,$where,$x,$dari,$batas,$sort);

while($array  =$arsen->doArray()){
$isian  =   $array[4];
$cut    =   substr($isian,0,6);
if($cut=="http:/"){
?>
<a href="<?php echo $array[4];?>" target="_blank"><img src="<?php echo "$base_url/Data/Link/$array[2]";?>"/></a><br/>


<?php
    }else{
        
?>
<a href="<?php echo $base_url; ?>/Tender/<?php echo $array[0];?>"><img src="<?php echo "$base_url/Data/Link/$array[2]";?>"/></a><br/>

<?php
    }
}
?>
