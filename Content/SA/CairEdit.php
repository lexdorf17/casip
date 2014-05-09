<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />

<form method="post" action="Proses/EditCair.php">
<fieldset>
<?php 
if($_GET['jeneus']=="Akta Perceraian"){
$sql    =   "select cerai_indo from content";

?>
<legend>Form Edit Akta Perceraian Indonesia</legend>
<?php
}else{
$sql    =   "select cerai_ing from content";

    ?>
<legend>Form Edit Akta Perceraian English</legend>
    <?php
}
$query  =   mysql_query($sql);
$array  =   mysql_fetch_array($query);

?>

<textarea name="isi" id="editor1"><?php echo $array[0];?></textarea></td>
<br /><br />
<?php 
if($_GET['jeneus']=="Akta Perceraian"){
?>
<input type="submit" value="Edit" class="button small secondary" name="indo"/>
<?php
}else{
    ?>
    <input type="submit" value="Edit" class="button small secondary" />
    <?php
}
?>
<script src="<?php echo $base_url; ?>/Lib/ckeditor/editor.js" type="text/javascript"></script>

