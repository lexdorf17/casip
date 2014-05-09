
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;
$arsen->doConnect();

$table  =   "news";
$where  =   array("IdNews");
$id     =   array($id);

$arsen->pilih($table,$where,$id);

$array  =   $arsen->doArray();

$exp = explode(" ",$array['Tanggal']);
$tgl = date("F dS, Y", strtotime($exp[0]));
$jam = $exp[1];

if($array['NewsEnglish'] != ""){
    $judul = $array['Title'];    
    $kata = $array['NewsEnglish'];
}else{
    $judul = $array['Judul'];
    $kata = $array['News'];
} 

if($array['Gambar']==""){
    $gambar =  "Design/images/news_default.jpg"; 
}else{
    $gambar =   "Data/Berita/".$array['Gambar'];
}
echo "<b style='font-size: 17px;'>".$judul."</b><p class='abu tsmall'>Posted on ".$tgl.". At $jam</p>";
?>
<img src="<?php echo $base_url; ?>/<?php echo $gambar;?>" class="five" align="left" style="margin: 5px 10px 15px 0px;" />
<?php
echo "<p style=text-align:justify;>".$kata."</p>";





?>

<br/>
<?php
$sql_komen  =   "select * from komentar where id_news='$url[2]' order by tanggal desc";
$query_komen=   mysql_query($sql_komen);
$row    =   mysql_num_rows($query_komen);
echo "<h4>".$row." Response for This News</h4>";

while($a=mysql_fetch_array($query_komen)){

$exp2 = explode(" ",$a['tanggal']);
$get2 = explode("-",$exp2[0]);
$date2 = mktime(0,0,0,$get2[1],$get2[2],$get2[0]);
$jam2 = $exp2[1];
    ?>
<!-- Comment -->
<img src="<?php echo $base_url; ?>/Design/images/user.png" width="40" height="50" style="float: left;" />

<div style="font-size: 20px;font-weight: bold;padding-top: 2px;"><?php echo $a['nama'];?></div>
<span style="font-size: 12px;padding-left: 5px;" class="abu"><?php echo "On ".date("F dS, Y",$date2).". At $jam2";?></span>

<br /><br />
<div style="float: clear;">
    <p><?php echo $a['komentar'];?></p>
</div>
<hr />
<!-- End Comment -->
    <?php
}
?>
<h4>Leave a comment</h4>
<form method="post" action="<?php echo $base_url;?>/Proses/komentar.php">
<input type="hidden" name="idnews" value="<?php echo $url[2];?>">


<div class="row">
<div class="five columns"><input type="text" name="nama" /></div>
<div class="four columns"><span class="tsmall">Name (required)</span></div>
<div class="three columns"></div>
</div>

<div class="row">
<div class="five columns"><input type="text" name="email" /></div>
<div class="four columns"><span class="tsmall">Email (will not be published)(required)</span></div>
<div class="three columns"></div>
</div>

<div class="row">
<div class="five columns"><input type="text" name="website" /></div>
<div class="four columns"><span class="tsmall">Website</span></div>
<div class="three columns"></div>
</div>


<textarea name="komentar" style="min-height: 200px;"></textarea><br />

Enter Verification Code<br /><br />
<div class="row">
<div class="five columns"><input type="text" name="kode" placeholder="Enter Code..." /></div>
<div class="four columns"><img src="<?php echo $base_url; ?>/Lib/spam/spam.php"/></div>
<div class="three columns"></div>
</div>


<p align="right"><input type="submit" name="submit" class="button small secondary" value="Submit Comment"/></p>


</form>
