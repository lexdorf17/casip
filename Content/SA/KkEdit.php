<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/ckeditor/content.css" />
<form method="post" action="Proses/EditKk.php">
<fieldset>
<?php 
if($_GET['jeneus']=="Kartu Keluarga"){
$sql    =   "select kk_indo from content";

?>
<legend>Form Edit Kartu Keluarga Indonesia</legend>
<?php
}else{
$sql    =   "select kk_ing from content";

    ?>
<legend>Form Edit Kartu Keluarga English</legend>
    <?php
}
$query  =   mysql_query($sql);
$array  =   mysql_fetch_array($query);

?>

<textarea name="isi" id="editor1"><?php echo $array[0]?></textarea></td>
<br /><br />
<?php 
if($_GET['jeneus']=="Kartu Keluarga"){
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

