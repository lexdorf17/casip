<?php Include "Include/slide.php"; ?>

<?php
$sql    =   "select home_ing from content";
$query  =   mysql_query($sql);
$array  =   mysql_fetch_array($query);
echo $array[0];
?>