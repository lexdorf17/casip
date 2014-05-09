<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$x=$id;

$table  =   "login";
$where  =   array("Username");
$y     =   array("'$x'");

$arsen->pilih($table,$where,$y);

$array  =   $arsen->doArray();
?>
<form method="post" action="<?php echo $base_url;?>/Proses/Management.php">
<input type="hidden" name="username" value="<?php echo $id;?>"/>

<fieldset>
<legend>Form Edit Management</legend>


Password<br /><br />
<input type="password" name="password" class="five"/>



Email<br /><br />
<input type="email" name="email" class="five" value="<?php echo $array['Email'];?>"/>

<p><input type="submit" name="edit" value="Edit" class="button small secondary"/></p>

</fieldset>

</form>
