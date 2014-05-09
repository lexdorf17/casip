
<form method="post" action="<?php echo $base_url;?>/Proses/GuestBook.php">

<fieldset>
<legend>Voice of People Form</legend>
<div class="row">
<div class="six columns">
Name<br /><br />
<input type="text" name="nama"/>
</div>
<div class="six columns">
Email<br /><br />
<input type="email" name="email"/>
</div>
</div>

Question<br /><br />
<textarea name="pertanyaan"></textarea>

Enter The Verification Code<br /><br />
<div class="row">
<div class="nine columns"><input type="text" name="kode"/></div>
<div class="three columns"><img src="<?php echo $base_url; ?>/Lib/spam/spam.php"/></div>
</div>



<input type="submit" name="simpan" class="button small secondary" value="Submit Question"/>

</fieldset>

</form>
<h5>Pertanyaan </h5>

<?php
include_once("Proses/ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if(!isset($_GET['page'])){
    $hal   =   1;
}else{
    $hal   =   $_GET['page'];
}
$batas  =10;

$table  ="guestbook";
$where  =array("Jawaban !");
$id     =array("''");
$sort   ="Tanggal";
$dari=(($hal*$batas)-$batas);
$query  =$arsen->relasi($table,$where,$id,$dari,$batas,$sort);
while($array  =$arsen->doArray()){

$exp = explode(" ",$array['Tanggal']);
$get = explode("-",$exp[0]);
$date = mktime(0,0,0,$get[1],$get[2],$get[0]);
$jam = $exp[1];
//$tanggal	=;
?>

    <fieldset>
    <legend><div><?php echo $array[1];?> (<?php echo $array[2];?>)</div></legend>
<br>
<div><b>Question :</b></div><br />
    <div id="narasi"><?php echo $array[3];?></div>
<br>
<div><b>Answer :</b></div><br />
<div id="narasi"><?php echo $array[5];?></div>

<p align="right" class="abu" style="font-size: 12px;"><?php echo "Posted on ".date("F dS, Y",$date).". At ".$jam;?></p>

</fieldset>
<?php
}
?>

<?php
    $sql        =   "select * from ".$table." where Jawaban !=''";
    $query      =   mysql_query($sql);
    $row        =   mysql_num_rows($query);
    $jumlah     =   ceil($row/$batas);
    $previous   =   $hal-1;
    $next       =   $hal+1; 
    echo "<center><ul class=pagination>";
    if($hal>1){
        echo "<li class=arrow unavailable><a href=pertanyaan?page=".$previous.">&laquo</a></li>";
    }
        
        if($jumlah>1){
            for ($i=1;$i<=$jumlah;$i++){
                if($hal==$i){
                   echo "<li class=current><a href=pertanyaan?page=".$i."> ".$i." </a></li>"; 
                }else{
                  echo "<li><a href=pertanyaan?page=".$i."> ".$i." </a></li>";  
                }
                                
            }      
        }
       
    if($jumlah > $hal){ 
                 
        echo "<li class=arrow><a href=pertanyaan?page=".$next.">&raquo;</a></li>";
    }
    echo "</ul>";
?>


