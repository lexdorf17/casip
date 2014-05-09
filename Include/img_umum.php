<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/vTip_v2/jquery.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>/Lib/vTip_v2/vtip.js"></script>
<link href="<?php echo $base_url; ?>/Lib/vTip_v2/css/vtip.css" type="text/css" rel="stylesheet" />

<script src="<?php echo $base_url; ?>/Lib/cycle-slideshow/jquery.cycle.all.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>/Lib/cycle-slideshow/jquery.easing.1.3.min" type="text/javascript"></script>

<div id="slide">
    <?php
        include_once("Proses/ArsenLibrary.php");

        $arsen  =   new arsenlexdorf;
        $query  =$arsen->free("select Foto,Ket from slide where Posisi='kiri'");

        while($array  =$arsen->doArray()){
    ?>
        <a href="#"><img src="<?php echo $base_url;?>/Data/Slide/<?php echo $array['Foto']; ?>" title="<?php echo $array['Ket']; ?>" style="margin-left: 9px;width: 170px;height: 170px;" title="" class="vtip" alt="slide image"/></a>
    <?php
        }
    ?>
</div>

<script>
$("#slide").cycle({
    fx:    'turnDown',
    timeout: 5000,
});
</script>