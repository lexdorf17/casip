
<h5>Berita</h5><hr />

<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =16;

$table  ="news";
$id   ="IdNews";
$dari   =(($page*$batas)-$batas);

$arsen->view($table,$dari,$batas,$id);
while($array  =$arsen->doArray()){
if($array['Gambar']==""){
    $gambar =  "Design/images/news_default.jpg"; 
}else{
    $gambar =   "Data/Berita/".$array['Gambar'];
}

$q = "SELECT COUNT(*) jumlah FROM komentar WHERE id_news='".$array['IdNews']."'";
$s = mysql_query($q);
$d = mysql_fetch_array($s);

$exp = explode(" ",$array['Tanggal']);
$tgl = date("d F Y", strtotime($exp[0]));
$jam = $exp[1];
$berita =   substr($array['News'],0,150);
?>

<div class="row">
<div class="two columns"><img src="<?php echo $base_url; ?>/<?php echo $gambar;?>" /></div>
<div class="ten columns">
<div style="font-size: 17px;"><strong><?php echo $array['Judul'];?></strong></div>
<span class="tsmall abu">Diposting pada tanggal <?php echo $tgl.", Pukul $jam"; ?> - <?php echo $d['jumlah']; ?> Komentar</span><br /><br />

	<p><?php echo $berita;?>....
<a href="<?php echo $base_url; ?>/Berita/<?php echo $array[0];?>" class="button small secondary tiny">Selengkapnya</a></p>
</div>
</div>


<hr />

<?php
}
?>


<div align="center">
<?php
$table2="news";
$url="arsip-berita";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>
