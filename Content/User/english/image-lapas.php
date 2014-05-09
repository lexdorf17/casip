<script src="<?php echo $base_url; ?>/Lib/lightbox/jquery.lightbox.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/Lib/lightbox/jquery.lightbox.css" />

<h5>Photo Gallery</h5><hr />

<div id="galeri">
<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $page   =   1;
}else{
    $page   =   $_GET['page'];
}
$batas  =15;

$table  ="galeri g,image i";
$where  =array("g.IdGaleri");
$id     =array("i.IdGaleri");
$sort   ="i.IdGaleri";
$dari   =(($page*$batas)-$batas);
$query  =$arsen->relasi($table,$where,$id,$dari,$batas,$sort);
$i=1;

while($array  =$arsen->doArray()){
if($$array['NarasiEnglish'] != "") $narasi = $array['NarasiEnglish'];
else $narasi = $array['Narasi'];
?>

<a href="<?php echo $base_url;?>/Data/Galeri/<?php echo $array['Image'];?>" title="<?php echo $narasi; ?>"><img src="<?php echo $base_url;?>/Data/Galeri/<?php echo $array['Image'];?>" height="200" width="200" id="img<?php echo $i; ?>" class="img-galeri"/></a>
<img src="<?php echo $base_url; ?>/Design/images/loading_img.gif" style="padding: 65px 91px 65px 91px;border: 1px solid whitesmoke;" class="img-galeri" id="load<?php echo $i; ?>" />

<script type="text/javascript">
$("#img<?php echo $i; ?>").hide();

$("#img<?php echo $i; ?>").load(function(){
    $("#load<?php echo $i; ?>").hide();
    $(this).show();
});
</script>
<?php
$i++;
}
?>
</div>

<script>
$("#galeri a").lightBox({ 
    fixedNavigation: true,
    imageLoading: '<?php echo $base_url; ?>/Lib/lightbox/images/loading.gif',
	imageBtnClose:'<?php echo $base_url; ?>/Lib/lightbox/images/close.gif',
	imageBtnPrev: '<?php echo $base_url; ?>/Lib/lightbox/images/prev.gif',
	imageBtnNext: '<?php echo $base_url; ?>/Lib/lightbox/images/next.gif'
});
</script>

<div align="center">
<?php
$table2="news";
$url="image-lapas";
$arsen->pagging($table2,$page,$batas,$url);
$arsen->doClose();
?>
</div>
