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

<h5>Agenda</h5>

<?php 

include_once("Proses/ArsenLibrary.php");
$arsen  =   new arsenlexdorf;

$query = $arsen->free("select count(IdAgenda) as jumlah from agenda");
$hasil = $arsen->doArray();

include 'agenda/php_calendar/configure.php';
$month = isset($_GET['month'])? $_GET['month'] : date('n');
$pd = mktime (0,0,0,$month,1,date('Y'));// timestamp of the first day
$zd = -(date('w', $pd)? (date('w', $pd)-1) : 6)+1;// monday before
$kd = date('t', $pd);// last day of moth
?>

<div class="month_title">
    <a href="<?php echo $base_url; ?>/look?month=<?php echo ($month-1); ?>'" class="month_move">&laquo;</a>
    <div class="month_name"><?php echo $month_names[date('n', mktime(0,0,0,$month,1,date('Y')))].' '.date('Y', mktime(0,0,0,$month,1,date('Y'))); ?></div>
    <a href="<?php echo $base_url; ?>/look?month=<?php echo ($month+1); ?>" class="month_move">&raquo;</a>
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
            if($date[0] == $tgl){
?>
<script type="text/javascript">
$(document).ready(function(){                                                            
    $("#<?php echo date($date_format, $i); ?>2").removeClass("default").addClass("link").removeClass("sunday");
    $("#<?php echo date($date_format, $i); ?>2").click(function(){
        $("#note").hide();
        $("#loading").html('<img src="<?php echo $base_url; ?>/Design/images/loading.gif" />');
        $.ajax({
            type: "POST",
            url: "<?php echo $base_url; ?>/Proses/Agenda.php",
            data: "mode=look&tgl=<?php echo $array['Tanggal']; ?>&bhs=ind",
            success: function(data){
                $("#loading").html("");
                $("#note").html(data).show();
            }    
        });    
    });   
});
</script>
<?php
            }
        }
        if($sun == "Sunday"){                                                                                                                                                                                    
            echo '<div class="day'.$today.'">'.($minulost? date('j', $i) : '<a title="'.date('d F Y', $i).'" href="javascript:void(\'\');" id="'.date($date_format, $i).'2" class="default sunday">'.date('j', $i).'</a>').'</div>';
        }else{
            echo '<div class="day'.$today.'">'.($minulost? date('j', $i) : '<a title="'.date('d F Y', $i).'" href="javascript:void(\'\');" id="'.date($date_format, $i).'2" class="default">'.date('j', $i).'</a>').'</div>';    
        }    
    } else {
        echo '<div class="day">&nbsp;</div>';
    }
  
    if (date('w', $i) == 0 && $i >= $pd) {
        echo '<div class="r"></div>';
    }
}
?>

<br /><br />
<hr />
<?php
if($hasil['jumlah'] == 0){
    echo "Belum ada Agenda";
}else{
?>
<p><a href="<?php echo $base_url; ?>/look">Lihat Semua</a>

<div id="loading" style="text-align: center;"></div>

<div id="note" class="row">
<fieldset>
<legend>Catatan</legend>
<?php

$table  ="agenda";
$query  =$arsen->viewall($table,"Tanggal");
while($array  =$arsen->doArray()){
    $date = explode(" ",$array['Tanggal']);
    $get = explode("-",$date[0]);
    $month = mktime (0,0,0,$get[1],$get[2],$get[0]);
?>

<div class="cat four columns">
<div class="title"><?php echo date("d M Y",$month); ?>, Pukul <?php echo $date[1]; ?></div>
<div class=""><p><?php echo $array['Catatan']; ?></p></div>
</div>
<?php    
}

?>
</fieldset>
</div>
<?php } ?>