<h5>Download</h5><hr />

<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$arsen->free("select * from file order by Tanggal desc");

while($array  =   $arsen->doArray()){
    $size = $arsen->float_format($array['Size']/1024, 2);
?>
<img src="<?php echo $base_url; ?>/images/download.png" width="15" height="15" style="vertical-align: bottom;" />
<?php echo ucfirst($array['Ket']); ?> : <a href="<?php echo $base_url; ?>/download.php?id=<?php echo $array['IdFile']; ?>">Download</a> - <span style="font-size: 11px;" class="abu">Type: <?php echo $array['Type']; ?>, Size: <?php echo $size." Kb."; ?></span>
Uploader <b><?php echo $array['Uploader']?></b>
<br /><br />

<?php
}
?>