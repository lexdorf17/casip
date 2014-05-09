<h5>Guestbook</h5><hr />

<script type="text/javascript">
$(document).ready(function(){
    $("#loading").hide();
    $("#orderby").change(function(){
        $("#view").hide()
        $("#loading").show();
        $.ajax({
            type: "POST",
            url: "<?php echo $base_url; ?>/Proses/GuestBook.php",
            data: "mode="+$("#mode").val()+"&orderby="+$("#orderby").val()+"&base=<?php echo $base_url; ?>",
            success: function(data){
                $("#loading").hide();
                $("#view").html(data).show();    
            }
        });
    });
    
    $("#mode").change(function(){
        $("#view").hide()
        $("#loading").show();
        $.ajax({
            type: "POST",
            url: "<?php echo $base_url; ?>/Proses/GuestBook.php",
            data: "mode="+$("#mode").val()+"&orderby="+$("#orderby").val()+"&base=<?php echo $base_url; ?>",
            success: function(data){
                $("#loading").hide();
                $("#view").html(data).show();    
            }
        });
    });
});
</script>

Tampilkan:&nbsp;
<select id="mode" class="five">
    <option value="0">Semua</option>
    <option value="1">Yang belum terjawab</option>
    <option value="2">Yang sudah terjawab</option>
</select>&nbsp;dari yang&nbsp;
<select id="orderby" class="five">
    <option value="DESC">Terbaru</option>
    <option value="ASC">Terlama</option>
</select>
<br /><br />

<div id="loading" style="text-align: center;"><img src="<?php echo $base_url; ?>/Design/images/loading.gif" /></div>

<div id="view">
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =50;

$table  ="guestbook";
$id     ="Tanggal";
$dari=(($page*$batas)-$batas);
$query  =$arsen->view($table,$dari,$batas,$id);

while($array  =$arsen->doArray()){
    $exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
$jawaban    =    $array[5];

if($jawaban != ""){
    echo "<div id='narasi' style='background: #c57fc5; padding-left: 5px;'>";
    echo "<p><strong>$array[Email]</strong> - <span class='tsmall' style='color: white;'>".date("d F Y",$date).", Pukul $exp[1]</span></p>";
}else{
    echo "<div id='narasi'>";
    echo "<p><strong>$array[Email]</strong> - <span class='tsmall abu'>".date("d F Y",$date).", Pukul $exp[1]</span></p>";
}
?>
    <p><?php echo $array[3];?>  
    </div>
    <?php
    if($jawaban !=""){
    ?>
    
    </p>  
    
        <a href="<?php echo $base_url;?>/ConfirmDeleteGuestBook/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
	<a href="<?php echo $base_url;?>/DetailGuestBook/<?php echo $array[0];?>" class="icon foundicon-right-arrow"></a> 
     
    <?php
    }else{
        if($array['Baca'] == 1){
        ?>
        <a href="<?php echo $base_url;?>/Jawab/<?php echo $array[0];?>" class="icon foundicon-idea"></a>
        <?php
        }else{
        ?>
        <a href="<?php echo $base_url;?>/Jawab/<?php echo $array[0];?>" class="icon foundicon-idea" style="font-weight: bold;color: black;"></a>
        <?php
        }
    }
    ?>
    <hr />    
<?php
}
?>
<div align="center">
<?php
$table2="guestbook";
$url="GuestBook";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>
</div>


