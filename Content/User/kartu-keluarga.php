
<?php
$sql    =   "select kk_indo from content";
$query  =   mysql_query($sql);
$array  =   mysql_fetch_array($query);
echo $array[0];
?>