<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/vTip_v2/jquery.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/vTip_v2/vtip.js"></script>
<link href="<?php echo $base_url; ?>/Lib/vTip_v2/css/vtip.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $base_url; ?>/agenda/php_calendar/style.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.default{
    color: black; 
}
.link{
    color: green;
    font-weight: bold;
}
.sunday{
    color: red;
}
</style>
<input type="hidden" id="base" value="<?php echo $base_url; ?>" />


<?php 

include_once("Proses/ArsenLibrary.php");
$arsen  =   new arsenlexdorf;

include 'agenda/php_calendar/configure.php';
$month = isset($_GET['month'])? $_GET['month'] : date('n');
$pd = mktime (0,0,0,$month,1,date('Y'));// timestamp of the first day
$zd = -(date('w', $pd)? (date('w', $pd)-1) : 6)+1;// monday before
$kd = date('t', $pd);// last day of moth
?>

<div class="month_title">
    <a href="calendar.php?month=<?php echo ($month-1); ?>'" class="month_move">&laquo;</a>
    <div class="month_name"><?php echo $month_names[date('n', mktime(0,0,0,$month,1,date('Y')))].' '.date('Y', mktime(0,0,0,$month,1,date('Y'))); ?></div>
    <a href="calendar.php?month=<?php echo ($month+1); ?>" class="month_move">&raquo;</a>
    <div class="r"></div>
</div>

<?php
for ($d=0;$d<7;$d++) {
    if($day_names[$d] == "SU"){
        echo '<div class="week_day" style="background: red;">'.$day_names[$d].'</div>';
    }else{
        echo '<div class="week_day">'.$day_names[$d].'</div>';
    }
}

echo '<div class="r"></div>';
$no=1;
for ($d=$zd;$d<=$kd;$d++) {
    $i = mktime (0,0,0,$month,$d,date('Y'));
    $sun = date("l",$i);
    
    if ($i >= $pd) {
        
        $today = (date('Ymd') == date('Ymd', $i))? '_today' : '';
        $minulost = (date('Ymd') >= date('Ymd', $i+86400)) && !$allow_past;
        $tgl = date($date_format, $i);

        $table  ="agenda";
        $query  =$arsen->viewall($table,"Tanggal");
        while($array  =$arsen->doArray()){
            $date = explode(" ",$array['Tanggal']);
            $get = explode("-",$date[0]);
            $get_date = mktime (0,0,0,$get[1],$get[2],$get[0]);
            
            if($date[0] == $tgl){
?>
<script type="text/javascript">
$(document).ready(function(){
    $("#<?php echo date($date_format, $i); ?>").removeClass("default").addClass("link").removeClass("sunday");
    $("#<?php echo date($date_format, $i); ?>").attr("title","Note:<span style='margin-left: 16px;'><b><i><?php echo date("d F Y",$get_date); ?>, Pukul <?php echo $date[1]; ?></i></b></span><br> <?php echo $array['Catatan']; ?>");   
});
</script>
<?php
            }
        }
        if($sun == "Sunday"){
            echo '<div class="day'.$today.'">'.($minulost? date('j', $i) : '<a title="'.date('d F Y', $i).', Tidak ada agenda" href="javascript:void(\'\');" id="'.date($date_format, $i).'" class="default vtip sunday">'.date('j', $i).'</a>').'</div>';
        }else{
            echo '<div class="day'.$today.'">'.($minulost? date('j', $i) : '<a title="'.date('d F Y', $i).', Tidak ada agenda" href="javascript:void(\'\');" id="'.date($date_format, $i).'" class="default vtip">'.date('j', $i).'</a>').'</div>';    
        }
    } else {
        echo '<div class="day">&nbsp;</div>';
    }
  
    if (date('w', $i) == 0 && $i >= $pd) {
        echo '<div class="r"></div>';
    }
    $no++;
}
?>