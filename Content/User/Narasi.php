
<table align="center" id="narasi">
<tr>
<td>
<?php
$sql_2 		=	"select * from image where IdGaleri='$id' ";
$query_2	=	mysql_query($sql_2);
$array_2	=	mysql_fetch_array($query_2);
?>
<img src="/Data/Galeri/<?php echo $array_2[1];?>" height=300 width=300 align="left"/>

<div>
<?php
include_once("Proses/Database.php");

$arsen	=	new DB;
$arsen->doConnect();

$sql 	=	"select * from galeri where IdGaleri='$id' ";
$query	=	mysql_query($sql);
$array_1=	mysql_fetch_array($query);
?>

<div>Judul : <?php echo $array_1[2];?></div>
<?php
$sql_2 		=	"select * from image where IdGaleri='$id' ";
$query_2	=	mysql_query($sql_2);
$array_2	=	mysql_fetch_array($query_2);
?>
<div>
<?php echo $array_1[3];?>



</div>

</div>
</td>
</tr>
</table>