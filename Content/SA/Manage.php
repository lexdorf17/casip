<?php

$jeneus =   $_GET['jeneus'];
switch($jeneus){
    case "Home":
    include("Content/SA/HomeEdit.php");
    break;

    case "Home_ing":
    include("Content/SA/HomeEdit.php");
    break;

    case "Profile":
    include("Content/SA/ProfileEdit.php");
    break;

    case "Profile_ing":
    include("Content/SA/ProfileEdit.php");
    break;

    case "Kartu Keluarga":
    include("Content/SA/KkEdit.php");
    break;
    
    case "Kartu Keluarga_ing":
    include("Content/SA/KkEdit.php");
    break;

    case "Kartu Tanda Penduduk":
    include("Content/SA/KtpEdit.php");
    break;

    case "Kartu Tanda Penduduk_ing":
    include("Content/SA/KtpEdit.php");
    break;

    case "Akta Kelahiran":
    include("Content/SA/LahirEdit.php");
    break;

    case "Akta Kelahiran_ing":
    include("Content/SA/LahirEdit.php");
    break;

    case "Akta Perkawinan":
    include("Content/SA/KawinEdit.php");
    break;
    
    case "Akta Perkawinan_ing":
    include("Content/SA/KawinEdit.php");
    break;

    case "Akta Perceraian":
    include("Content/SA/CairEdit.php");
    break;

    case "Akta Perceraian_ing":
    include("Content/SA/CairEdit.php");
    break;
    
    case "Akta Rusak/Hilang":
    include("Content/SA/RusakEdit.php");
    break;

    case "Akta Rusak/Hilang_ing":
    include("Content/SA/RusakEdit.php");
    break;

    case "Akta Kematian":
    include("Content/SA/MatiEdit.php");
    break;
    
    case "Akta Kematian_ing":
    include("Content/SA/MatiEdit.php");
    break;

    case "Landasan Hukum":
    include("Content/SA/HukumEdit.php");
    break;
    
    case "Landasan Hukum_ing":
    include("Content/SA/HukumEdit.php");
    break;

    case "Teks Berjalan":
    include("Content/SA/MarqueeEdit.php");
    break;

    case "Teks Berjalan_ing":
    include("Content/SA/MarqueeEdit.php");
    break;
     
    default:
    include("Content/SA/Berita.php");
        
}
?>