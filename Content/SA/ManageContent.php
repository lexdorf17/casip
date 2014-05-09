<h5>Manage Content</h5>

<table id="tb" class="responsive table" cellpadding="0" cellspacing="0">
<?php
$arr = array("Home","Profile","Kartu Keluarga","Kartu Tanda Penduduk","Akta Kelahiran","Akta Perkawinan","Akta Perceraian","Akta Kematian","Landasan Hukum","Teks Berjalan");
foreach($arr as $content){
?>
<tr>
    <td><?php echo $content; ?></td>
    <td>
    <span class="ind"><a href="<?php echo $base_url."/Manage?jeneus=".$content; ?>" class="icon foundicon-edit vtip" title="Edit Data Indonesia"></a></span>
    <span class="eng"><a href="<?php echo $base_url."/Manage?jeneus=".$content."_ing"; ?>" class="icon foundicon-edit vtip" title="Edit Data Inggris"></a></span>
    </td>
</tr>
<?php } ?>
</table>