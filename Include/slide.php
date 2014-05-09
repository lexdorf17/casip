  <div class="row" id="slidet">
    <div class="twelve columns">
      <div id="featured" class="slide">
        <?php
            include_once("Proses/ArsenLibrary.php");

            $arsen  =   new arsenlexdorf;
            $query  =$arsen->free("select Foto from slide where Posisi='tengah'");

            while($array  =$arsen->doArray()){
        ?>
                <img src="<?php echo $base_url;?>/Data/Slide/<?php echo $array['Foto']; ?>" alt="slide image"/>
        <?php
            }
        ?>
      </div>
    </div>
  </div>
  
  
  <div id="image" style="text-align: center;">
    <img src="<?php echo $base_url; ?>/Design/images/loading.gif" />  
  </div>
  
<script>
$("#slidet").hide();

$("#slidet").ready(function(){
    $("#image").hide();
    $("#slidet").show();
})
</script>
