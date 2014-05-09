<?php
include_once("ArsenLibrary.php");

$arsen  =   new arsenlexdorf;

if($_POST['mode'] == ""){
    
$id     =   $_POST['id'];
$judul  =   strip_tags($_POST['judul']);
$catatan =   trim(str_replace('<p>','',str_replace('</p>','',$_POST['catatan'])));
$title  =   strip_tags($_POST['title']);
$note =   trim(str_replace('<p>','',str_replace('</p>','',$_POST['note'])));
$tanggal=   $_POST['tanggal']." ".$_POST['waktu'];
$uploader = $_POST['uploader'];

$view = $arsen->count_data("agenda","IdAgenda");
$data = $arsen->doArray();
$IdAgenda = $data['jumlah']+1;

$table  = "agenda";
$where  = "IdAgenda";

if($_POST['simpan'] || $_POST['edit']){
    
    if(empty($judul) || empty($title) || empty($catatan) || empty($note) || empty($tanggal)){
        if($_POST['simpan']){
            $url = "TambahAgenda?me=ed";
        }else{
            $url = "ConfirmEditAgenda/$id?me=ed";
        }
        $arsen->redirect($url);   
    }else{    
        if($_POST['simpan']){
            $field  = array("IdAgenda","JudulAgenda","Tanggal","Title","Note","Catatan","Uploader");
            $record = array($IdAgenda,$judul,$tanggal,$title,$note,$catatan,$uploader);
            $arsen->insert($table,$field,$record);    
        }else{
            $field  = array("JudulAgenda","Tanggal","Title","Note","Catatan","Uploader");
            $record = array($judul,$tanggal,$title,$note,$catatan,$uploader);
            $arsen->edit($table,$field,$record,$where,$id);
            $arsen->redirect("look?me=es");        
        }
                
        $arsen->redirect("look?me=is");
    }

}elseif($_POST['act'] = "hapus"){
    $arsen->hapus($table,$where,$id);
    $arsen->redirect("look?me=ds");   
    
}else{
    $arsen->redirect("look");   
}

}else{
    $arsen->select("agenda","Tanggal",$_POST['tgl']);
    while($array  =$arsen->doArray()){
        $date = explode(" ",$array['Tanggal']);
        $get = explode("-",$date[0]);
        $month = mktime (0,0,0,$get[1],$get[2],$get[0]);
        
        if($_POST['bhs'] == "ind"){
            $tgl = date("d M Y").", Pukul ".$date[1];
            $note = $array['Catatan'];
        }else{
            $tgl = date("F dS, Y").". At ".$date[1];
            $note = $array['Note'];
        }
        
        echo "<table style='width: 95%;margin-left: 18px;'>";
        echo "<tr>";
        echo "<td>Note:<span style='float: right;font-size: 12px;font-weight: bold;font-style: italic;'>".$tgl."</span></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$note."</td>";
        echo "</tr>";
        echo "</table>";
    }//echo "select * from agenda where Tanggal='".$_POST['tgl']."'";
}
?>
