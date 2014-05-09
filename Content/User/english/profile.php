<?php
$sql    =   "select profile_ing from content";
$query  =   mysql_query($sql);
$array  =   mysql_fetch_array($query);
echo $array[0];
?>
<center>
<a href="Design/images/stuktur.png" target="_BLANK"><img src="<?php echo $base_url;?>/Design/images/stuktur.png" width="550" /></a>
</center>

