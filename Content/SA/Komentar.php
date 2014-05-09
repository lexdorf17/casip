
<h5>Komentar</h5><hr />

<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =16;

$table  ="komentar";
$id   ="id_komentar";
$dari   =(($page*$batas)-$batas);

$arsen->free("SELECT b.Judul,b.IdNews,k.* FROM news b, komentar k WHERE b.IdNews=k.id_news ORDER BY tanggal DESC LIMIT $dari,$batas");
while($array  =$arsen->doArray()){

$kata   =   $array['komentar'];
$exp = explode(" ",$array['tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);

?>

<!-- Comment -->
<img src="<?php echo $base_url; ?>/Design/images/user.png" width="40" height="50" style="float: left;" />

<div style="font-size: 20px;font-weight: bold;padding-top: 2px;"><?php echo $array['nama']." (".$array['email'].")";?></div>
<span style="font-size: 12px;padding-left: 5px;" class="abu"><?php echo "Pada tanggal ".date("d M Y",$date).", Pukul ".$exp[1];?></span>

<br /><br />
<div style="float: clear;">
    <p><?php echo $array['komentar'];?></p>
    <p style="font-size: 12px;" class="abu">Komentar dari berita <a href="<?php echo $base_url; ?>/looknews/<?php echo $array['IdNews']; ?>" target="_blank"><u><?php echo $array['Judul']; ?></u></a></p>
</div>
<!-- End Comment -->


<hr />

<?php
}
?>


<div align="center">
<?php
$table2="komentar";
$url="Komentar";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>
