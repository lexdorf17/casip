<form method="post" action="<?php echo $base_url;?>/Proses/Slide.php">
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<input type="hidden" name="posisi" value="kiri"/>
<div class="pesan five">
<div class="greygloss title">Pesan</div>
<div class="content">
Apakah anda yakin akan menghapus data ini ?
</div>
<div class="greyd boot">
<input type="submit" value="Ya" name="hapus" class="button small tiny secondary"/>
<input type="submit" value="Tidak" name="tidak" class="button small tiny secondary"/>
</div>
</div>
</form>
