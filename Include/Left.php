<div class="box">
<div class="greengloss title">Cari Berita</div>
<div class="content">
<input type="hidden" id="base" value="<?php echo $base_url; ?>" />
<input type="text" placeholder="Pencarian..." class="src" />
</div>
</div>


<div class="box">

<div class="content" style="height: 190px;">
<?php Include("Include/img_umum.php");?>
</div>
</div>


<div class="box">
<div class="greengloss title">Link Goverment</div>
<div class="content">
<?php Include("Include/Goverment.php");?>
</div>
</div>


<div class="box">
<div class="greengloss title" style="color: black;">Link Tender</div>
<div class="content">
<?php Include("Include/Tender.php");?>
</div>
</div>


<div class="box">
<div class="greengloss title">Agenda</div>
<div class="content">
<?php Include("agenda/php_calendar/calendar.php");?>
<br />
<br />
</div>
</div>
