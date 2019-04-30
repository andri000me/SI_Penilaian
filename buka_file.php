<?php
# KONTROL MENU PROGRAM
if($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']){				
		case '' :				
			if(!file_exists ("menuutama3.php")) die ("Empty Main Page!"); 
			include "menuutama3.php";	break;
				case 'menu' :				
			if(!file_exists ("menuutama3.php")) die ("Empty Main Page!"); 
			include "menuutama3.php";	break;
		
		#Artikel
		case 'Artikel' :				
			if(!file_exists ("berita_detail.php")) die ("Sorry Empty Page!"); 
			include "berita_detail.php";	break;		
		
		case 'Nilai' :				
			if(!file_exists ("laporan_nilai.php")) die ("Sorry Empty Page!"); 
			include "laporan_nilai.php";	break;		
		case 'gantipas' :				
			if(!file_exists ("edit.php")) die ("Sorry Empty Page!"); 
			include "edit.php";	break;		
		
		
		case 'allberita' :				
			if(!file_exists ("all_berita.php")) die ("Sorry Empty Page!"); 
			include "all_berita.php";	break;		
		
		
		
		
							
		default:
			if(!file_exists ("user/artikel.php")) die ("Empty Main Page!"); 
			include "user/artikel.php";						
		break;
	}
}
else {
	// Jika tidak mendapatkan variabel URL : ?page
	if(!file_exists ("menuutama3.php")) die ("Empty Main Page!"); 
	include "menuutama3.php";	
}
?>