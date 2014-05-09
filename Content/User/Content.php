<?php


switch($page){
        
        case "L":
        include("Content/User/Login.php");
        break;
		
		case "visi-misi":
		include "Content/User/visi-misi.php";
		break;

		case "tentang-kami":
		include "Content/User/TentangKami.php";
		break;		

		case "profile":
		include "Content/User/profile.php";
		break;
		
		case "tugas-fungsi":
		include "Content/User/tugas-pokok.php";
		break;
		
		case "struktur-organisasi":
		include "Content/User/struktur-organisasi.php";
		break;
		
		case "landasan-hukum":
		include "Content/User/landasan-hukum.php";
		break;
		
		case "akta-perceraian":
		include "Content/User/akta-perceraian.php";
		break;
		
		case "akta-kematian":
		include "Content/User/akta-kematian.php";
		break;
		
		case "kartu-keluarga":
		include "Content/User/kartu-keluarga.php";
		break;
		
		case "ktp":
		include "Content/User/ktp.php";
		break;
		
		case "akta-kelahiran":
		include "Content/User/akta-kelahiran.php";
		break;
		
		case "akta-perkawinan":
		include "Content/User/akta-perkawinan.php";
		break;
		
		case "akta-rusak":
		include "Content/User/akta-rusak.php";
		break;
		
		case "image-lapas";
		include "Content/User/image-lapas.php";
		break;
		
		case "organisasi":
		include "Content/User/organisasi.php";
		break;
		
		case "penyelengaraan":
		include "Content/User/penyelengaraan.php";
		break;
		
		case "pertanyaan":
		include "Content/User/pertanyaan.php";
		break;
		
        case "Narasi":
		include "Content/User/Narasi.php";
		break;
		
        case "Tender":
        include("Content/User/Tender.php");
        break;

        case "Goverment":
        include("Content/User/Goverment.php");
        break;

        case "arsip-berita":
        include("Content/User/arsip-berita.php");
        break;
        	      
        case "Berita":
        include("Content/User/Berita.php");
        break;
        
        case "DetailBerita":
        include("Content/User/DetailBerita.php");
        break;
        
        case "look":
        include("Content/User/Agenda.php");
        break;
        
        case "download":
        include("Content/User/Download.php");
        break;
          
            case "info":
        include("Include/InformasiPublik.php");
        break;
          
        default:
        include("Content/User/home.php");
        
}
?>
