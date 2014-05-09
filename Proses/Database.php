<?php
//----------------------------------------------------------------------
// clsDB.php - Class module for Database

$web    =   "casip";

class DB{

//----------------------------------------------------------------------
// Set  database
//----------------------------------------------------------------------
        var $DBHost          = "localhost";
        var $DBUsername      = "t40196_casip";
        var $DBPassword      = "dbcasipku123";
        var $DBName          = "t40196_casip";
        //t40196_casip
        var $page            = "";
        var $Conn;
        var $Result;
        var $Rec;


//----------------------------------------------------------------------
// Connect to database and select database
//----------------------------------------------------------------------
        function doConnect(){
                 if (!$this->Conn= mysql_connect($this->DBHost,$this->DBUsername,$this->DBPassword)){
                       print "Connection Error";
                       Exit;
                 }
				
                 if (!mysql_select_db($this->DBName,$this->Conn)){
                      print "No Database";
                      Exit;
                 }
        }


//----------------------------------------------------------------------
// Execute sql query
//----------------------------------------------------------------------
        function doExec($sqlstr){
                 if (!$this->Result = mysql_query($sqlstr)){
                       print "Query Error :" .mysql_error();
                       Exit;
                 }
        }


//----------------------------------------------------------------------
// Fetch sql query
//----------------------------------------------------------------------
        function doFetch(){
                 return $this->Rec = mysql_fetch_row($this->Result);
        }

//----------------------------------------------------------------------
// Fetch sql Array query
//----------------------------------------------------------------------
        function doArray(){
                 return $this->Rec = mysql_fetch_array($this->Result);
        }

//----------------------------------------------------------------------
// Total Records
//----------------------------------------------------------------------
        function totalRecords(){
                 return $this->Rec = mysql_num_rows($this->Result);
        }


//----------------------------------------------------------------------
// Total Records
//----------------------------------------------------------------------

		function getID(){
                 return  mysql_insert_id();
        }	
		
		function getIDs(){
                 return  mysql_insert_id();
        }	
//----------------------------------------------------------------------
// Return value
//----------------------------------------------------------------------
        function doReturn(){
                 return $this->Rec[0];
        }


//----------------------------------------------------------------------
// Close Connection
//----------------------------------------------------------------------
        function doClose(){
                 mysql_close($this->Conn);
        }
}
?>
