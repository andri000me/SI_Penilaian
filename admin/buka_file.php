<?php
# KONTROL MENU PROGRAM
if($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']){				
		case '' :				
			if(!file_exists ("menuutama.php")) die ("Empty Main Page!"); 
			include "menuutama.php";	break;
				case 'menu' :				
			if(!file_exists ("menuutama.php")) die ("Empty Main Page!"); 
			include "menuutama.php";	break;

	case 'gantipas' :				
			if(!file_exists ("Data/gantipas/edit.php")) die ("Empty Main Page!"); 
			include "Data/gantipas/edit.php";	break;
	case 'akses' :				
			if(!file_exists ("Data/akses/akses.php")) die ("Empty Main Page!"); 
			include "Data/akses/akses.php";	break;
			
			
		# About
		case 'About' :				
			if(!file_exists ("Data/About/about_view.php")) die ("Sorry Empty Page!"); 
			include "Data/About/about_view.php";	break;	
			



# Pesan
		case 'pesanview' :				
			if(!file_exists ("Data/Pesan/pesan_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Pesan/pesan_view.php";	break;			

		case 'pesanadd' :				
			if(!file_exists ("Data/Pesan/pesan_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Pesan/pesan_add.php"; break;
			
		case 'pesanedit' :				
			if(!file_exists ("Data/Pesan/pesan_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Pesan/pesan_edit.php"; break;
			
		case 'pesandelete' :				
			if(!file_exists ("Data/Pesan/pesan_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Pesan/pesan_delete.php"; break;		

		case 'pesancari' :				
			if(!file_exists ("Data/Pesan/pesan_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Pesan/pesan_cari.php"; break;





	
		# Pengguna
		case 'penggunaview' :				
			if(!file_exists ("Data/Pengguna/pengguna_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Pengguna/pengguna_view.php";	break;			

		case 'penggunaadd' :				
			if(!file_exists ("Data/Pengguna/pengguna_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Pengguna/pengguna_add.php"; break;
			
		case 'penggunaedit' :				
			if(!file_exists ("Data/Pengguna/pengguna_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Pengguna/pengguna_edit.php"; break;
			
		case 'penggunadelete' :				
			if(!file_exists ("Data/Pengguna/pengguna_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Pengguna/pengguna_delete.php"; break;		

		case 'penggunacari' :				
			if(!file_exists ("Data/Pengguna/pengguna_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Pengguna/pengguna_cari.php"; break;
			
			
			
# Wali
		case 'waliview' :				
			if(!file_exists ("Data/Wali/wali_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Wali/wali_view.php";	break;			

		case 'waliadd' :				
			if(!file_exists ("Data/Wali/wali_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Wali/wali_add.php"; break;
			
		case 'waliedit' :				
			if(!file_exists ("Data/Wali/wali_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Wali/wali_edit.php"; break;
			
		case 'walidelete' :				
			if(!file_exists ("Data/Wali/wali_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Wali/wali_delete.php"; break;		

		case 'walicari' :				
			if(!file_exists ("Data/Wali/wali_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Wali/wali_cari.php"; break;


# Siswa
		case 'siswaview' :				
			if(!file_exists ("Data/Siswa/siswa_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Siswa/siswa_view.php";	break;			

		case 'siswaadd' :				
			if(!file_exists ("Data/Siswa/siswa_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Siswa/siswa_add.php"; break;
			
	case 'sql_tambah' :				
			if(!file_exists ("Data/Siswa/sql_tambah.php")) die ("Sorry Empty Page!"); 
			include "Data/Siswa/sql_tambah.php"; break;		
			
		case 'siswaedit' :				
			if(!file_exists ("Data/Siswa/siswa_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Siswa/siswa_edit.php"; break;
			
		case 'siswadelete' :				
			if(!file_exists ("Data/Siswa/siswa_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Siswa/siswa_delete.php"; break;		

		case 'siswacari' :				
			if(!file_exists ("Data/Siswa/siswa_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Siswa/siswa_cari.php"; break;
		case 'kelassiswa' :				
			if(!file_exists ("Data/Siswa/siswa_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/Siswa/siswa_kelas.php"; break;

			




# Bidang
		case 'bidangview' :				
			if(!file_exists ("Data/Bidang/bidang_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Bidang/bidang_view.php";	break;			

		case 'bidangadd' :				
			if(!file_exists ("Data/Bidang/bidang_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Bidang/bidang_add.php"; break;
			
		case 'bidangedit' :				
			if(!file_exists ("Data/Bidang/bidang_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Bidang/bidang_edit.php"; break;
			
		case 'bidangdelete' :				
			if(!file_exists ("Data/Bidang/bidang_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Bidang/bidang_delete.php"; break;		

		case 'bidangcari' :				
			if(!file_exists ("Data/Bidang/bidang_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Bidang/bidang_cari.php"; break;



# Kompetensi Keahlian
		case 'kompetensiview' :				
			if(!file_exists ("Data/Kompetensi/kompetensi_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Kompetensi/kompetensi_view.php";	break;			

		case 'kompetensiadd' :				
			if(!file_exists ("Data/Kompetensi/kompetensi_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Kompetensi/kompetensi_add.php"; break;
			
		case 'kompetensiedit' :				
			if(!file_exists ("Data/Kompetensi/kompetensi_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Kompetensi/kompetensi_edit.php"; break;
			
		case 'kompetensidelete' :				
			if(!file_exists ("Data/Kompetensi/kompetensi_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Kompetensi/kompetensi_delete.php"; break;		

		case 'kompetensicari' :				
			if(!file_exists ("Data/Kompetensi/kompetensi_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Kompetensi/kompetensi_cari.php"; break;

			


# Guru
		case 'guruview' :				
			if(!file_exists ("Data/Guru/guru_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Guru/guru_view.php";	break;			

		case 'guruadd' :				
			if(!file_exists ("Data/Guru/guru_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Guru/guru_add.php"; break;
			
		case 'guruedit' :				
			if(!file_exists ("Data/Guru/guru_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Guru/guru_edit.php"; break;
			
		case 'gurudelete' :				
			if(!file_exists ("Data/Guru/guru_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Guru/guru_delete.php"; break;		

		case 'gurucari' :				
			if(!file_exists ("Data/Guru/guru_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Guru/guru_cari.php"; break;



# Skompetensi
		case 'skompetensiview' :				
			if(!file_exists ("Data/Skompetensi/skompetensi_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Skompetensi/skompetensi_view.php";	break;			

		case 'skompetensiadd' :				
			if(!file_exists ("Data/Skompetensi/skompetensi_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Skompetensi/skompetensi_add.php"; break;
			
		case 'skompetensiedit' :				
			if(!file_exists ("Data/Skompetensi/skompetensi_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Skompetensi/skompetensi_edit.php"; break;
			
		case 'skompetensidelete' :				
			if(!file_exists ("Data/Skompetensi/skompetensi_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Skompetensi/skompetensi_delete.php"; break;		

		case 'skompetensicari' :				
			if(!file_exists ("Data/Skompetensi/skompetensi_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Skompetensi/skompetensi_cari.php"; break;
		case 'skompetensikelas' :				
			if(!file_exists ("Data/Skompetensi/skompetensi_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/Skompetensi/skompetensi_kelas.php"; break;



# Nilai
		case 'nilaiview' :				
			if(!file_exists ("Data/Nilai/nilai_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Nilai/nilai_view.php";	break;			

		case 'nilaiadd' :				
			if(!file_exists ("Data/Nilai/nilai_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Nilai/nilai_add.php"; break;
			
		case 'nilaiedit' :				
			if(!file_exists ("Data/Nilai/nilai_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Nilai/nilai_edit.php"; break;
			
		case 'nilaidelete' :				
			if(!file_exists ("Data/Nilai/nilai_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Nilai/nilai_delete.php"; break;		

		case 'nilaicari' :				
			if(!file_exists ("Data/Nilai/nilai_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Nilai/nilai_cari.php"; break;
		case 'nilaikelas' :				
			if(!file_exists ("Data/Nilai/nilai_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/Nilai/nilai_kelas.php"; break;
		case 'nilaidetail' :				
			if(!file_exists ("Data/Nilai/nilai_detail.php")) die ("Sorry Empty Page!"); 
			include "Data/Nilai/nilai_detail.php"; break;



# Nilai
		case 'kelasview' :				
			if(!file_exists ("Data/Kelas/kelas_view.php")) die ("Sorry Empty Page!"); 
			include "Data/Kelas/kelas_view.php";	break;			

		case 'kelasadd' :				
			if(!file_exists ("Data/Kelas/kelas_add.php")) die ("Sorry Empty Page!"); 
			include "Data/Kelas/kelas_add.php"; break;
			
		case 'kelasedit' :				
			if(!file_exists ("Data/Kelas/kelas_edit.php")) die ("Sorry Empty Page!"); 
			include "Data/Kelas/kelas_edit.php"; break;
			
		case 'kelasdelete' :				
			if(!file_exists ("Data/Kelas/kelas_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/Kelas/kelas_delete.php"; break;		

		case 'kelascari' :				
			if(!file_exists ("Data/Kelas/kelas_cari.php")) die ("Sorry Empty Page!"); 
			include "Data/Kelas/kelas_cari.php"; break;





case 'laporkelas' :				
			if(!file_exists ("Data/laporan/siswa_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan/siswa_kelas.php"; break;
case 'laporsiswa' :				
			if(!file_exists ("Data/laporan/laporan_siswa.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan/laporan_siswa.php"; break;
case 'laporwali' :				
			if(!file_exists ("Data/laporan/laporan_wali.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan/laporan_wali.php"; break;

case 'laporguru' :				
			if(!file_exists ("Data/laporanguru/laporan_guru.php")) die ("Sorry Empty Page!"); 
			include "Data/laporanguru/laporan_guru.php"; break;

case 'laporkelasnilai' :				
			if(!file_exists ("Data/laporan_nilai/siswa_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_nilai/siswa_kelas.php"; break;

case 'lapordaftarnilai' :				
			if(!file_exists ("Data/laporan_nilai/laporan_daftar.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_nilai/laporan_daftar.php"; break;

case 'lapornilaidetail' :				
			if(!file_exists ("Data/laporan_nilai/siswa_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_nilai/siswa_kelas.php"; break;
case 'laporpelajaran' :				
			if(!file_exists ("Data/laporan_nilai/laporan_pelajaran.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_nilai/laporan_pelajaran.php"; break;
case 'siswadet' :				
			if(!file_exists ("Data/laporan_nilai/siswa_detail.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_nilai/siswa_detail.php"; break;

case 'siswadet1' :				
			if(!file_exists ("Data/laporan_nilai/laporan_nilai.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_nilai/laporan_nilai.php"; break;

//llllllllllllllllllllllllllllllllllllllllllllllllllllllaaaaaaaaaaaaaapoooooooooooooooooorrrrrrrrrraaaaaaaaaaaaaaaannnnnnnnnnnnnnnnn

case 'laporan_bidang' :				
			if(!file_exists ("Data/laporanall/laporan_bidang.php")) die ("Sorry Empty Page!"); 
			include "Data/laporanall/laporan_bidang.php"; break;
case 'laporan_kelas' :				
			if(!file_exists ("Data/laporanall/laporan_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/laporanall/laporan_kelas.php"; break;
case 'laporan_kom' :				
			if(!file_exists ("Data/laporan_kompetensi/laporan_kom.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_kompetensi/laporan_kom.php"; break;
case 'lapor_kelas' :				
			if(!file_exists ("Data/laporan_kelas/laporan_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_kelas/laporan_kelas.php"; break;
case 'lapor_pelajaran' :				
			if(!file_exists ("Data/laporan_pelajaran/skompetensi_kelas.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_pelajaran/skompetensi_kelas.php"; break;
case 'pelajaran' :				
			if(!file_exists ("Data/laporan_pelajaran/laporan_pelajaran.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_pelajaran/laporan_pelajaran.php"; break;

case 'laporanwali' :				
			if(!file_exists ("Data/laporan_wali/laporan_wali.php")) die ("Sorry Empty Page!"); 
			include "Data/laporan_wali/laporan_wali.php"; break;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			case 'sliderview' :				
			if(!file_exists ("Data/slider/slider_view.php")) die ("Sorry Empty Page!"); 
			include "Data/slider/slider_view.php";	break;	
			case 'slideradd' :				
			if(!file_exists ("Data/slider/slider_add.php")) die ("Sorry Empty Page!"); 
			include "Data/slider/slider_add.php";	break;	
			case 'sliderdelete' :				
			if(!file_exists ("Data/slider/slider_delete.php")) die ("Sorry Empty Page!"); 
			include "Data/slider/slider_delete.php";	break;	
			
			case 'berita' :				
			if(!file_exists ("Data/Berita/Berita.php")) die ("Sorry Empty Page!"); 
			include "Data/Berita/Berita.php"; break;
							
		default:
			if(!file_exists ("menuutama.php")) die ("Empty Main Page!"); 
			include "menuutama.php";						
		break;
	}
}
else {
	// Jika tidak mendapatkan variabel URL : ?page
	if(!file_exists ("menuutama.php")) die ("Empty Main Page!"); 
	include "menuutama.php";	
}
?>