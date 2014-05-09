<?php


switch($page){
        
        case "L":
        include("Content/User/english/Login.php");
        break;
		
		case "visi-misi":
		include "Content/User/english/visi-misi.php";
		break;

		case "tentang-kami":
		include "Content/User/english/TentangKami.php";
		break;		

		case "profile":
		include "Content/User/english/profile.php";
		break;
		
		case "tugas-fungsi":
		include "Content/User/english/tugas-pokok.php";
		break;
		
		case "struktur-organisasi":
		include "Content/User/english/struktur-organisasi.php";
		break;
		
		case "landasan-hukum":
		include "Content/User/english/landasan-hukum.php";
		break;
		
		case "akta-perceraian":
		include "Content/User/english/akta-perceraian.php";
		break;
		
		case "akta-kematian":
		include "Content/User/english/akta-kematian.php";
		break;
		
		case "kartu-keluarga":
		include "Content/User/english/kartu-keluarga.php";
		break;
		
		case "ktp":
		include "Content/User/english/ktp.php";
		break;
		
		case "akta-kelahiran":
		include "Content/User/english/akta-kelahiran.php";
		break;
		
		case "akta-perkawinan":
		include "Content/User/english/akta-perkawinan.php";
		break;
		
		case "akta-rusak":
		include "Content/User/english/akta-rusak.php";
		break;
		
		case "image-lapas";
		include "Content/User/english/image-lapas.php";
		break;
		
		case "organisasi":
		include "Content/User/english/organisasi.php";
		break;
		
		case "penyelengaraan":
		include "Content/User/english/penyelengaraan.php";
		break;
		
		case "pertanyaan":
		include "Content/User/english/pertanyaan.php";
		break;
		
        case "Narasi":
		include "Content/User/english/Narasi.php";
		break;
		
        case "Tender":
        include("Content/User/english/Tender.php");
        break;

        case "Goverment":
        include("Content/User/english/Goverment.php");
        break;

        case "arsip-berita":
        include("Content/User/english/arsip-berita.php");
        break;
        	      
        case "Berita":
        include("Content/User/english/Berita.php");
        break;
        
        case "DetailBerita":
        include("Content/User/english/DetailBerita.php");
        break;
        
        case "look":
        include("Content/User/english/Agenda.php");
        break;
        
        case "download":
        include("Content/User/Download.php");
        break;
          
        default:
        include("Content/User/english/home.php");
        
}
?>
