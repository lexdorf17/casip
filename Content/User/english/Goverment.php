<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "menu";
$where  =   array("IdMenu");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();

?>
<div class="goverment" id="">
<img src="<?php echo "$base_url/Data/Link/$array[2]";?>" align="left" width="200" height="150"/>
<?php
echo "".$array[4]."<br>";
echo "<div class=date>".$array[5]."</div>";
?>
</div>
