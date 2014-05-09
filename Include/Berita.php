 <marquee direction="up" onload="this.start()" onmouseover="this.stop()" width="100%" scrollamount="2" onmouseout="this.start()" height="200">
<?php
include_once("Proses/ArsenLibrary.php");

include_once("Proses/Database.php");

$arsen	=	new DB;
$arsen->doConnect();


if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =5;

$sql 	=	"SELECT * FROM `news` order by IdNews desc limit $batas";
$query	=	mysql_query($sql);

while($array  =mysql_fetch_array($query)){
$isi =  substr($array['News'],0,100);
?>

    <b><?php echo $array[1];?></b><br /><br />
    <div style="font-size:  10px;"><?php echo $isi; ?>...[<a href="<?php echo $base_url; ?>/Berita/<?php echo $array[0];?>">selengkapnya</a>]</div>
    <hr />
<?php
}
?>
</marquee>
