<h5>Detail User</h5><hr />
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "login";
$where  =   array("Username");
$id     =   array("'$id'");

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();

echo "<table class='responsive table' cellpadding=0 cellspacing=0>";

echo "<tr><td>Username</td><td>".$array[0]."</td></tr>";
echo "<tr><td>Email</td><td>".$array[2]."</td></tr>";
echo "<tr><td>Level</td><td>";
if($array[3]=="1"){
echo "<b>Super Admin</b>";
}else{
echo "<b>Admin</b>";    
}
echo "</tr></td></table>";
?>
<p>
    <a href="<?php echo $base_url;?>/ConfirmDeleteManagement/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
    <a href="<?php echo $base_url;?>/ConfirmEditManagement/<?php echo $array[0];?>" class="icon foundicon-edit"></a>
</p>

<form method="post" action="<?php echo $base_url;?>/Proses/Management.php">
<input type="hidden" name="username" value="<?php echo $array[0];?>"/>
<input type="submit" value="Aktifkan Kembali" class="button small secondary" name="reset"/>
</form>
