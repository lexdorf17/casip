<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />
<form method="post" action="Proses/EditProfile.php">
<fieldset>
<?php 
if($_GET['jeneus']=="Profile"){
$sql    =   "select profile_indo from content";

?>
<legend>Form Edit Profile Indonesia</legend>
<?php
}else{
$sql    =   "select profile_ing from content";

    ?>
<legend>Form Edit Profile English</legend>
    <?php
}
$query  =   mysql_query($sql);
$array  =   mysql_fetch_array($query);

?>

<textarea name="isi" id="editor1"><?php echo $array[0]?></textarea></td>
<br /><br />
<?php 
if($_GET['jeneus']=="Profile"){
?>
<input type="submit" value="Edit" class="button small secondary" name="indo"/>
<?php
}else{
    ?>
    <input type="submit" value="Edit" class="button small secondary" />
    <?php
}
?>

</fieldset>
</form>

<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>

