<nav class="greengloss menu-top top-bar">
<ul class="title-area">
    <li class="name header"><h1><a href="<?php echo $base_url;?>/#"></a></h1></li>
    <li class="toggle-topbar menu-icon"><a href="<?php echo $base_url;?>/#"><span></span></a></li>
</ul>

<section class="top-bar-section menu-top-section">

    <ul class="left">
<li class="has-dropdown"><a href="#">Berita</a>
 <ul class="mnd dropdown">
    <li><a href="<?php echo $base_url;?>/Berita">Data</a></li>
      <li><a href="<?php echo $base_url;?>/Komentar">Komentar</a></li>
</ul>
</li>
<li class="divider garis"></li>

<li><a href="<?php echo $base_url;?>/Galeri">Galeri</a></li>
<li class="divider garis"></li>

<li><a href="<?php echo $base_url;?>/Image">Image</a></li>
<li class="divider garis"></li>

<li><a href="<?php echo $base_url;?>/Modul">Informasi Publik</a></li>
<li class="divider garis"></li>

<li><a href="<?php echo $base_url;?>/Link">Link</a></li>
<li class="divider garis"></li>

<li><a href="<?php echo $base_url;?>/GuestBook">GuestBook</a></li>
<li class="divider garis"></li>

<li><a href="<?php echo $base_url;?>/Lelang">Lelang</a></li>
<li class="divider garis"></li>
<?php
	if($_SESSION['level']==1){
?>

    <li class="has-dropdown">
    <a href="<?php echo $base_url;?>/#">Management</a>
        <ul class="mnd dropdown">
      <li><a href="<?php echo $base_url;?>/Management">User</a></li>
      <li><a href="<?php echo $base_url;?>/ManageContent">Content</a></li>
      <li><a href="<?php echo $base_url;?>/Files">Upload File</a></li>
      <li><a href="<?php echo $base_url;?>/Slidet">Slide Tengah</a></li>
      <li><a href="<?php echo $base_url;?>/Slidek">Slide Kiri</a></li>  
        </ul>
    </li>
        <li class="divider garis"></li>
<?php
	}
?>


<li><a href="<?php echo $base_url;?>/look">Agenda</a></li>
<li class="divider garis"></li>

<li><a href="<?php echo $base_url;?>/Proses/Logout.php">Logout</a></li> 
<li class="divider garis"></li> 

  
    </ul>
    
</section>


</nav> 



