<?php
include_once("Database.php");

class arsenlexdorf extends DB{
function insert($table,$field,$record) {

$this->doConnect();

$row=count($record);

$sql="INSERT INTO ".$table." (";
    for($i=0;$i<=$row;$i++){
     $sql .= "".$field[$i]."";
        if($i<$row-1){
            $sql .= " , ";
        }
     }
$sql.=")";
$sql.= "VALUES ( ";
    for($i=0;$i<=$row;$i++){
     $sql .= "'".$record[$i]."";
        if($i<$row-1){
            $sql .= "' , ";
        }
     }
     $sql .= ") ";
$this->doExec($sql);
}

function viewall($table,$orderby){
    $this->doConnect();

    $sql="select * from ".$table." order by ".$orderby." desc";
    $query=$this->doExec($sql);
}

function view($table,$dari,$batas,$orderby,$where="",$id=""){
    
    $this->doConnect();
    
    if($where == "" && $id == ""){
        $sql="select * from ".$table." order by ".$orderby." desc limit ".$dari.",".$batas;    
    }else{
        $sql="select * from ".$table." where ".$where."='".$id."' order by ".$orderby." desc limit ".$dari.",".$batas;
    }
    
    $query=$this->doExec($sql);
}

function count_data($table,$kolom){
    
    $this->doConnect();

    $sql="select count(".$kolom.") as jumlah from ".$table;
    $query=$this->doExec($sql);
}

function unlink_file($path,$kolom,$table,$where,$id){
    $this->doConnect();

    $sql="select ".$kolom." from ".$table." where ".$where."='".$id."'";
    $exc = mysql_query($sql);
    $data = mysql_fetch_array($exc);
    unlink($path.$data[$kolom]);
}

function relasi($table,$where,$id,$dari,$batas,$sort){
   $this->doConnect();

   $row=count($id);
   $sql = "Select * from ".$table." where ";
   
   for($i=0;$i<=$row;$i++){
            
     $sql .= $where[$i];
        
        if($i<$row-1){
             $sql .= "= ".$id[$i]." and ";
        }else if ($i == $row){
            $sql.= "= ".$id[$i-1]." ";
            }
          

     }
    $sql.="order by ".$sort." desc
 limit ".$dari.",".$batas;
	//echo $sql;
    $this->doExec($sql);    
}

function pagging($table,$page,$batas,$url,$where="",$id=""){
    $this->doConnect();
    
    if($where == "" && $id == ""){
        $sql        =   "select * from ".$table;    
    }else{
        $sql        =   "select * from ".$table." where ".$where."='".$id."'";
    }
    
    $query      =   $this->doExec($sql);
    $row        =   $this->totalRecords($query);
    $jumlah     =   ceil($row/$batas);
    $previous   =   $page-1;
    $next       =   $page+1; 
    echo "<center><ul class=pagination>";
    if($page>1){
        echo "<li class=arrow unavailable><a href=".$url."?page=".$previous.">&laquo;</a></li>";
    }
    
        
        if($jumlah>1){
            for ($i=1;$i<=$jumlah;$i++){
                if($page==$i){
                echo "<li class=current><a href=".$url."?page=".$i."> ".$i." </a></li>"; 
                }else{
                echo "<li><a href=".$url."?page=".$i."> ".$i." </a></li>";
                }               
            }      
        }
       
    if($jumlah > $page){ 
                 
        echo "<li class=arrow><a href=".$url."?page=".$next.">&raquo;</a></li>";
    }
    echo "</ul>";

}

function edit($table,$field,$record,$where,$id) {

$this->doConnect();

$row=count($field);
   $sql = "UPDATE ".$table." set ";
   
   for($i=0;$i<=$row;$i++){
            
     $sql .= $field[$i];
        
        if($i<$row-1){
            
            $sql .= " = '".$record[$i]."' , ";
        
                    }
           else if ($i == $row)
           {
            $sql.= " = '".$record[$i-1]."' ";
            }

     }
     $sql.="WHERE ".$where." = '".$id."'";
     $this->doExec($sql); 
}

function hapus($table,$field,$id){
   $this->doConnect();

    $sql="DELETE FROM ".$table." WHERE ".$field." = '".$id."'";
    $this->doExec($sql);
}

function pilih($table,$where,$id){
   $this->doConnect();

   $row=count($where);
   $sql = "Select * from ".$table." where ";
   
   for($i=0;$i<=$row;$i++){
            
     $sql .= $where[$i];
        
        if($i<$row-1){
             $sql .= " = ".$id[$i]." and ";
        }else if ($i == $row){
            $sql.= " = ".$id[$i-1]." ";
            }
          

     }
    $this->doExec($sql);    
}

function select($table,$where,$id){
    $this->doConnect();

    $sql = "select * from ".$table." where ".$where."='".$id."'";
    $this->doExec($sql);
}

function free($query){
    $this->doConnect();
    $this->doExec($query);
}

function login($table,$field,$record){
    
   $this->doConnect();

    $sql="SELECT * FROM ".$table." WHERE ";
    for($i=0;$i<=$row;$i++){
            
     $sql .= $field[$i];
        
        if($i<$row-1){
            
            $sql .= " = '".$record[$i]."'  ";
        
                    }
           else if ($i == $row)
           {
            $sql.= " = '".$record[$i]."' AND ".$field[$i+1]." = '".$record[$i+1]."'";
            }
     }
    $this->doExec($sql);
}

function redirect($url){
    header("location:$base_url/$url");
    exit();
}

function hari(){
    $hari   =   array(
               "Minggu",
               "Senin",
               "Selasa",
               "Rabu",
               "Kamis",
               "Jum'at",
               "Sabtu"
            );
    
    $day=date("w");
    $hari =$hari[$day];
    echo $hari;
}

function bulan($get = ""){
    if($get == ""){
        $month=date("m");    
    }else{
        $month = $get;
    }
    
    switch($month){
        case "01":
        echo "Januari";
        break;
        
        case "02":
        echo "Februari";
        break;
        
        case "03":
        echo "Maret";
        break;
        
        case "04":
        echo "April";
        break;
        
        case "05":
        echo "Mei";
        break;
        
        case "06":
        echo "Juni";
        break;
        
        case "07":
        echo "Juli";
        break;
        
        case "08":
        echo "Agustus";
        break;
        
        case "09":
        echo "September";
        break;
        
        case "10":
        echo "Oktober";
        break;
        
        case "11":
        echo "Nopember";
        break;
        
        case "12":
        echo "Desember";
        break;
        
        default:
        echo "Nama-nama Bulan";
    }
}

function upload($path,$nama,$tmp){    
    $path;
    $nama;
    $tmp;
    $upload =   $path.$nama;
    $move   =   move_uploaded_file($tmp,$upload);
    return $move;    
}

function float_format($value, $places=0) {
    if ($places < 0) { $places = 0; }
    $mult = pow(10, $places);
    return ceil($value * $mult) / $mult;
}


}
?>
