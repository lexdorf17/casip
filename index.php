<?php
session_start();
$base_url   =   "http://".$_SERVER['HTTP_HOST'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Dinas Kependudukan Dan Pencatatan Sipil </title>


  <link rel="stylesheet" href="<?php echo $base_url;?>/stylesheets/foundation.min.css"/>
  <link rel="stylesheet" href="<?php echo $base_url;?>/stylesheets/app.css"/>
  <link rel="stylesheet" href="<?php echo $base_url;?>/stylesheets/style.css"/>
  <link rel="stylesheet" href="<?php echo $base_url;?>/stylesheets/color.css"/>
  <link rel="stylesheet" href="<?php echo $base_url;?>/stylesheets/responsive-tables.css"/>
  <link rel="stylesheet" href="<?php echo $base_url;?>/icon/stylesheets/general_enclosed_foundicons.css"/>
  <link rel="stylesheet" href="<?php echo $base_url;?>/stylesheets/icon.css"/>

<script type="text/javascript" src="<?php echo $base_url;?>/Lib/jquery/jquery-plugin.js"></script>
<script src="<?php echo $base_url; ?>/Lib/jquery/jquery-1.9.1.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/Lib/jquery/jquery.js"></script>
<script src="<?php echo $base_url;?>/javascripts/modernizr.foundation.js"></script>
<script src="<?php echo $base_url;?>/javascripts/responsive-tables.js"></script>


<link href="<?php echo $base_url;?>/Design/images/logo.png" rel="shortcut icon"/>

</head>
<body>

<div class="top row"><?php Include "Include/banner.php"; ?></div>
<br /><br />
<div class="row menu">
<?php Include ("Include/Menu.php");?>
<?php 
    if(!isset($_SESSION['bahasa']) or $_SESSION['bahasa']=="indonesia"){
        
        Include ("Content/User/search.php"); 

    }else{
        Include ("Content/User/english/search.php"); 
    }
?>
</div>

<div class="row">
<?php if($_SESSION['level'] != 1){ ?>
<div class="left three columns">

<?php include "Include/Left.php"; ?>
</div>
<div style="min-height: 920px;" class="shadow cright nine columns">
<?php }else{ ?>
<div style="min-height: 920px;" class="shadow cright twelve columns">
<?php } ?>

<!-- INI CLASS nya -->
<?php include "Include/img_home.php"; ?>
<div id="deden">  
<?php Include("Include/Content.php");?>
</div>
</div>
</div>
<br />

<?php if($_SESSION['level'] != 1){ ?>
<div class="row shadow cp" >
<?php include "Include/Right.php"; ?>
</div>
<?php } ?>

<div class="row" class="footer"><?php Include "Include/footer.php"; ?></div>

<script src="<?php echo $base_url;?>/javascripts/foundation.min.js"></script>
<script src="<?php echo $base_url;?>/javascripts/app.js"></script>

  
    <script>
    $(window).load(function(){
      $("#featured").orbit();
    });
    </script> 

</body>
</html>
