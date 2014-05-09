<h5>Hasil pencarian berita</h5><hr />

<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();
if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =16;

$sql    =   "select * from news where News like '%$_POST[isi]%'";
$query  =   mysql_query($sql);
$r      =   mysql_num_rows($query);
//echo $r;
if($r>0){
while($array  =mysql_fetch_array($query)){
$kata   =   $array['News'];
$berita =   substr($kata,0,150);

if($array['Gambar']==""){
    $foto   =   "news_default.jpg";
}else{
    $foto   =   $array['Gambar'];
}
?>

<div class="row">
<div class="two columns"><img src="Design/images/<?php echo $foto?>" /></div>
<div class="ten columns">
<p><strong><?php echo $array['Judul'];?></strong></p>

	<p><?php echo $berita;?>....
<a href="Berita/<?php echo $array[0];?>" class="button small secondary tiny">Selengkapnya</a></p>
</div>
</div>


<hr />

<?php
}
}else{
    echo "data tidak ditemukan";
}
?>


<div align="center">
<?php
/*$table2="news";
$url="arsip-berita";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();*/
?>
</div>


