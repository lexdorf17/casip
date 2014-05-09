	<ul class="vertical-menu">
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $pages   =   1;
}else{
    $pages   =   $_GET['page'];
}
if($page=="info"){
$batas  =50;
}else{
$batas=5;
}

$table  ="modul order by IdModul desc";
$dari=(($pages*$batas)-$batas);
$id ="IdModul";
$query  =mysql_query("select * from modul order by TanggalUpdate desc limit $dari,$batas");;

while($array  =mysql_fetch_array($query)){
?>
<li><a href="<?php echo $base_url; ?>/Data/Modul/<?php echo $array[1];?>" target="_blank"><?php echo $array[3];?></a></li>

<?php
}
?>
</ul>
