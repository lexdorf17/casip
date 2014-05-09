
<?php
$hari   =   date("D");

switch($hari){
    case "Sun":
    $namaHari="Minggu";
    break;
    
    case "Mon":
    $namaHari="Senin";
    break;
    
    case "Tue":
    $namaHari="Selasa";
    break;
    
    case "Wed":
    $namaHari="Rabu";
    break;
    
    case "Thu":
    $namaHari="Kamis";
    break;
    
    case "Fri":
    $namaHari="Jum'at";
    break;
    
    case "Sat":
    $namaHari="Sabtu";
    break;
    
}

$month=date("m");

    switch($month){
        case "01":
        $bulan  = "Januari";
        break;
        
        case "02":
        $bulan  = "Februari";
        break;
        
        case "03":
        $bulan  = "Maret";
        break;
        
        case "04":
        $bulan  ="April";
        break;
        
        case "05":
        $bulan  ="Mei";
        break;
        
        case "06":
        $bulan  ="Juni";
        break;
        
        case "07":
        $bulan  ="Juli";
        break;
        
        case "08":
        $bulan  ="Agustus";
        break;
        
        case "09":
        $bulan  ="September";
        break;
        
        case "10":
        $bulan  ="Oktober";
        break;
        
        case "11":
        $bulan  ="Nopember";
        break;
        
        case "12":
        $bulan  ="Desember";
        break;
}     

$tanggal    =   date("d");

$tahun  =   date("Y");


?>
<div>
<marquee direction="left" scrollamount="6" >
<?php
include_once("Proses/ArsenLibrary.php");
$arsen  =   new arsenlexdorf;
$arsen->doConnect();
$sqlx    =   "select marquee_ing from content";
$queryx  =   mysql_query($sqlx);
$arrayx  =   mysql_fetch_array($queryx);
echo $arrayx[0];
?>
</marquee>
</div>

<div>
<div class="nine columns">
<div class="nine columns" style=" padding: 10px 0px 5px 15px; color: white;"><?php echo "$namaHari , $tanggal $bulan $tahun"; ?></div>
</div>


<div class="three columns bahasa">
<a href="<?php echo $base_url; ?>/indonesia.php" class="button small tiny greengloss">Indonesia <img src="<?php echo $base_url; ?>/images/indonesia.png" /></a> 
<a href="<?php echo $base_url; ?>/english.php" class="button small tiny greengloss">English  <img src="<?php echo $base_url; ?>/images/english.png" /></a>
</div>

</div>





