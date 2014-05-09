<?php
if(!isset($_SESSION['bahasa']) || $_SESSION['bahasa']=="indonesia"){
?>
<nav class="greengloss menu-top top-bar">
<ul class="title-area">
    <li class="name header"><a href="<?php echo $base_url; ?>/home"><img src="<?php echo $base_url; ?>/images/home.png" /></a></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
</ul>

<section class="top-bar-section menu-top-section">
<ul class="left">
  <li></li>
  <li class="divider garis"></li>

  <li><a href="<?php echo $base_url; ?>/profile">Profile</a>
  <li class="divider garis"></li>
  
  <li class="has-dropdown">
    <a href="#">Layanan</a>
    <ul class="mnd dropdown">
      <li><a href="<?php echo $base_url; ?>/kartu-keluarga">Kartu Keluarga </a></li>
      <li><a href="<?php echo $base_url; ?>/ktp">Kartu Tanda Kepunduduk</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-kelahiran">Akta Kelahiran</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-perkawinan">Akta Perkawinan</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-perceraian">Akta Perceraian</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-kematian">Akta Kematian</a></li>
    </ul>
  </li>
  <li class="divider garis"></li>
    
  <li class="has-dropdown">
    <a href="#">Kegiatan</a>
    <ul class="mnd dropdown">
        <li><a href="<?php echo $base_url; ?>/image-lapas">Galeri</a></li>
        <li><a href="<?php echo $base_url; ?>/arsip-berita">Arsip Berita </a></li>
    </ul>
  </li>
  <li class="divider garis"></li>
    
  <li><a href="<?php echo $base_url; ?>/landasan-hukum">Landasan Hukum</a> </li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/pertanyaan">Suara Warga</a></li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/look">Agenda</a></li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/tentang-kami">Tentang Kami</a> </li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/download">Download</a> </li>
  <li class="divider garis"></li>
  
</ul>  
</section>


</nav> 
<?php
}else{
           ?>
           
<nav class="greengloss menu-top top-bar">
<ul class="title-area">
    <li class="name header"><a href="<?php echo $base_url; ?>/home"><img src="<?php echo $base_url; ?>/images/home.png" /></a></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
</ul>

<section class="top-bar-section menu-top-section">
<ul class="left">
  <li></li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/profile">Profile</a>
  <li class="divider garis"></li>
  
  <li class="has-dropdown">
    <a href="#">Services</a>
    <ul class="mnd dropdown">
      <li><a href="<?php echo $base_url; ?>/kartu-keluarga">Kartu Keluarga </a></li>
      <li><a href="<?php echo $base_url; ?>/ktp">Kartu Tanda Kepunduduk</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-kelahiran">Akta Kelahiran</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-perkawinan">Akta Perkawinan</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-perceraian">Akta Perceraian</a></li>
      <li><a href="<?php echo $base_url; ?>/akta-kematian">Akta Kematian</a></li>
    </ul>
  </li>
  <li class="divider garis"></li>
    
  <li class="has-dropdown">
    <a href="#">Activity</a>
    <ul class="mnd dropdown">
      <li><a href="<?php echo $base_url; ?>/image-lapas">Galeri</a></li>
      <li><a href="<?php echo $base_url; ?>/arsip-berita">Arsip Berita </a></li>
    </ul>
  </li>
  <li class="divider garis"></li>
    
  <li><a href="<?php echo $base_url; ?>/landasan-hukum">Basic Lawyer</a> </li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/pertanyaan">Voice of People</a></li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/look">Schedule</a></li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/tentang-kami">About Us</a> </li>
  <li class="divider garis"></li>
  
  <li><a href="<?php echo $base_url; ?>/download">Download</a> </li>
  <li class="divider garis"></li>
  
    </ul>
    
</section>


</nav>  
           <?php        
    }

?>


