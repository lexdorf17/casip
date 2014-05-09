<?php
session_start();
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if($_POST['mode'] == ""){
$nama   =   strip_tags($_POST['nama']);
$email  =   strip_tags($_POST['email']);
$pertanyaan   =   strip_tags($_POST['pertanyaan']);

$jawaban   =   strip_tags($_POST['jawaban']);

$kode = $_POST['kode'];
$tanggal=   date("Y-m-d h:i:s");
 
$view = $arsen->count_data("guestbook","IdGuest");
$data = $arsen->doArray();
$IdGuest = $data['jumlah']+1;
  
$table  = "guestbook";
$where  =   "IdGuest";
$id     =   $_POST['id'];

if($_POST['simpan']){
    
    if(empty($nama) || empty($email) || empty($pertanyaan)){
        $arsen->redirect("pertanyaan?me=ed");   
    }else{
        if (strtoupper($kode) == $_SESSION['kodeRandom']){
            mysql_query("insert into guestbook (Nama,Email,Pertanyaan,Tanggal) values ('$nama','$email','$pertanyaan','$tanggal')");
             
            $arsen->redirect("pertanyaan?me=is");          
        }else{
            $arsen->redirect("pertanyaan?me=cf");          
        }
}

}elseif($_POST['edit']){
            $field  = array("Jawaban");
            $record = array($jawaban);
            
            $arsen->edit($table,$field,$record,$where,$id);    
            $arsen->redirect("GuestBook?me=es");          
}elseif($_POST['hapus']){
            $arsen->hapus($table,$where,$id);    
            $arsen->redirect("GuestBook?me=ds");              
}else{
            $arsen->redirect("GuestBook");                  
}

}else{
    if($_POST['mode'] == 0){
        $query = "SELECT * FROM guestbook ORDER BY Tanggal ".$_POST['orderby'];
    }else if($_POST['mode'] == 1){
        $query = "SELECT * FROM guestbook WHERE Jawaban='' ORDER BY Tanggal ".$_POST['orderby'];
    }else{
        $query = "SELECT * FROM guestbook WHERE Jawaban<>'' ORDER BY Tanggal ".$_POST['orderby']; 
    }

    $arsen->free($query);
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
    
        <a href="<?php echo $_POST['base'];?>/ConfirmDeleteGuestBook/<?php echo $array[0];?>" class="icon foundicon-trash"></a>
	<a href="<?php echo $_POST['base'];?>/DetailGuestBook/<?php echo $array[0];?>" class="icon foundicon-right-arrow"></a> 
     
    <?php
    }else{
        if($array['Baca'] == 1){
        ?>
        <a href="<?php echo $_POST['base'];?>/Jawab/<?php echo $array[0];?>" class="icon foundicon-idea"></a>
        <?php
        }else{
        ?>
        <a href="<?php echo $_POST['base'];?>/Jawab/<?php echo $array[0];?>" class="icon foundicon-idea" style="font-weight: bold;color: black;"></a>
        <?php
        }
    }
    ?>
    <hr /> 
</div>
<?php 
    }
}
?>