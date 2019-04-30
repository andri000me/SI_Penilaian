-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2015 at 02:32 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `201412rpl122`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE IF NOT EXISTS `akses` (
  `level` varchar(11) NOT NULL,
  `berita` int(11) NOT NULL,
  `slider` int(11) NOT NULL,
  `pengguna` int(11) NOT NULL,
  `bidang` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `sk` int(11) NOT NULL,
  `wali` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `penilaian_siswa` int(11) NOT NULL,
  `lap_bidang` int(11) NOT NULL,
  `lap_kompetensi` int(11) NOT NULL,
  `lap_kelas` int(11) NOT NULL,
  `lap_guru` int(11) NOT NULL,
  `lap_pelajaran` int(11) NOT NULL,
  `lap_wali` int(11) NOT NULL,
  `lap_siswa` int(11) NOT NULL,
  `lap_nilai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`level`, `berita`, `slider`, `pengguna`, `bidang`, `kelas`, `guru`, `sk`, `wali`, `siswa`, `penilaian_siswa`, `lap_bidang`, `lap_kompetensi`, `lap_kelas`, `lap_guru`, `lap_pelajaran`, `lap_wali`, `lap_siswa`, `lap_nilai`) VALUES
('Guru', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=166 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `username`, `judul`, `judul_seo`, `headline`, `isi_berita`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`) VALUES
(153, 23, '', 'Anang Asanti', 'anang-asanti', 'Y', '<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nSetelah ditunggu-tunggu beberapa jam akhirnya Anang dan Ashanti mampir juga di SMKN 6 JEMBER. Kepenatan menunggu dan keresahan beberapa pihak yang khawatir anang tidak jadi mampir ke sekolah terobati sudah. Setelah memberikan beberapa tips untuk sukses serta himbauan untuk tidak golput di&nbsp; pemilu 9 April 2014 Anang akhirnya bersama Ashanti menyempatkan menghibur dengan melantunkan 2 buah lagu. Salut buat mas Anang dan mbak Ashanti. Moga jadi sukses selalu\r\n</p>\r\n', 'Jumat', '2013-11-29', '07:15:48', '39gb53.jpg', 4, 'Artikel'),
(161, 22, '', 'Gazebo SMK 6 Jember', 'gazebo-smk-6-jember', 'Y', '<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nMembicarakan SMK N 6 Jember . Sekarang ada yang baru dari SMK N 6 Jember. Bagi yang belum tahu berita ter-update-nya, tolong dibaca dengan seksama ya. Yang baru dari SMK N 6 Jember yaitu berupa bangunan yang cukup besar dan tanpa diding, gazebo biasa orang menyebutnya. Sudah mengerti dan faham apa itu gazebo bukan. Tapi bedanya yang ini tidak terletak di sawah seperti pada umumnya. Melainkan di lingkungan SMK N 6 Jember. Terbayang seperti apa bukan, di dalam sekolah mendapati sebuah gazebo.\r\n</p>\r\n<br />\r\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nGazebo SMK N 6 Jember tegak berdiri di wilayah yang strategis. Gazebo SMK N 6 Jember terletak di area jalan keluar masuk SMK N 6 Jember, baik guru maupun siswa melewati area ini. Berada ditengah- tengah yang sekelilingnya merupakan kantor, aula, perpustakaan, dan deretan lab.RPL. Bagi yang sudah pernah masuk SMK N 6 Jember, lokasi berdirinya gazebo dulu merupan tempat hidup tumbuhan beringin. Sekarang tempat tersebut sudah disulap menjadi bangunan yang bekelas dan modern. Tidak kalah dengan bangunan â€“ bangunan yang dimiliki sekolah lain.\r\n</p>\r\n<br />\r\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nGazebo tempat yang nyaman jika digunakan untuk berkumpul para siswa siswi untuk berdiskusi perihal pelajaran, atau hanya sekedar ngoberol dan bertatapmu dengan teman-teman yang Â berbeda jurusan dan tingkat, yang sebelumnya belum saling mengenal. Gazebo jadi bertambah rame, sejak dipasangnya wifi yang menjadikan lokasi gazebo sebagai area hostport.Siswa siswi SMK N 6 Jember mampir dan singgah di gazebo setelah pulang sekolah atau saat jam kosong. Ya tentu untuk mencari wifi gratis. Hehehe salah satunya saya sebagai pengunjung setia gazebo. Pasalnya sekolah telah menyediakan fasilitas untuk dapat dinikmati untuk siswa siswi SMK N 6 jember tanpa dipungut biaya alias free. Jadi kami, sebagai siswa siswi SMK 6 Jember tentu sangat senang dan mengaspirasi positif hal tersebut.\r\n</p>\r\n<br />\r\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nJadi selain perpustakaan sekarang ada tempat baru untuk dapat mencari sumber pengetahuan. Yang lebih cepat, update, dan murah. Bagaikan dunia ada di telapak tangan, secepat mengedipkan mata dan sentuhan jari di keyboard. Sungguh luar biasa. Bukan ilmu saja yang didapat melainkan teman â€“ teman baru pun kita temui. Karena di gazebo seluruh siswa SMK N 6 Jember berkumpul. Di sini kita dapat berkomunikasi dan saling bertukar informasi, berbagi ilmu yang di dapatkan. Gazebo merupakan sarana tempat belajar yang baru, yang lebih modern, menyenangkan, nyaman, menarik, dan lebih up to date. Keberadaan gazebo sangat bermanfaat, dan menjadi gebrakan baru. Menjadi setimulan untuk para siswa siswi SMK N 6 Jember lebih berfikir terbuka akan perkembangan teknologi.\r\n</p>\r\n', 'Kamis', '2014-02-20', '20:12:22', '84996091_610774585638734_483355799_n.jpg', 2, 'Artikel'),
(162, 22, '', 'Pembagian Raport', 'pembagian-raport', 'Y', '<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nAkhirnya perjalanan selama hampir 6 bulan dapat dilihat. Tepat tanggal 21 Desember 2013 para wali murid datang ke sekolah untuk mengambil raport anak mereka. Wali murid mulai dari kelas 10 sampai dengan kelas 12 pada saat itu memadati wilayah SMK N 6 Jember. Pertama mereka dipersilahkan masuk ke aula untuk mendengar sambutan dan arahan dari kepala sekolah. Setelah selesai di aula para wali murid diharap memasuki kelas &ndash; kelas berdasarkan petunjuk sebelumnya. Tertbagi berdasarkan kelas anak mereka. Disana mereka memesuki kelas untuk mendengar sepatah duapatah kata dari wali kelas anak-anak mereka sebelum raport dibagikan .\r\n</p>\r\n<br />\r\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nTidak kecuali dengan saya. Orang tua saya datang untuk mengambil raport saya. Lebih tepatnya adalah bapak saya tercinta. Beliau menjalani agenda yang sama dengan para wali murid pada umumnya. Seperti biasa, saya akan selalu setia menunggu diluar, di dekat pintu untuk mendengar hasil ranking kelas. Tapi sayang untuk kali ini wali kelas saya Drs. Sutamam, wali kelas 12 Akuntansi 1 tidak membacakan urutan rinking kelas.\r\n</p>\r\n<br />\r\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nHal tersebut membuat saya tidak tenang, jantung saya berdebuk kencang, rasanya kepala saya seperti tertekan batu yang besar, bembuat saya tidak nyaman dengan diam . Berjalan kesana kemari memcoba menenangkan diri. Dengan mulut yang tidak hentinya mengucapkan kalimat sederhana untuk menenangkan perasaan gelisah yang saya rasakan. Setidaknya hal tersebut yang bisa saya lakukan. Tapi waktu seperti berjalan lambat. Terasa menunggu berjam- jam. Segalanya terasa lebih menegangkan. Apalagi ketika melihat raport teman- teman saya yang tidak sesuai prediksi. Berulang kali dalam hati saya bertanya, &ldquo; Kapan giliran nama saya dipanggil ?, Kenapa bapak tidak cepat keluar ?&rdquo;.\r\n</p>\r\n<br />\r\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\r\nSebagian besar teman- teman saya telah menerima raport mereka, ada diantara mereka yang puas dan senang dengan hasil yang mereka dapatkan. Tetapi, saya masih berdiri dan menatap ke ruang kelas, berharap bapak saya maju dan mengambil raport. Ya, Syukurlah setelah beberapa menit bapak saya keluar dan saya melihat ditangan beliau terdapat dokumen berwarna hijau daun. Benar, saya langsung berjalan menghampiri bapak yang menyodorkan dokumen itu ke arah saya. Perlahan Dokumen hijau itu saya buka. Dan Alhamdulillah saya bisa mempertahankan prestasi saya selama ini. Senangnya hati saya karena tidak mengecewakan kedua orang tua saya. &nbsp;Sekilas pengalaman yang saya rasakan. Saya berharap dapat bermanfaat bagi para pembaca.\r\n</p>\r\n', 'Kamis', '2014-02-20', '20:14:48', '68gb50.jpg', 3, 'Artikel'),
(164, 22, '', 'Visi dan Misi', 'visi-dan-misi', 'N', '<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n<strong>Visi :</strong><br />\nTerwujudnya SMK Negeri 1 Tanggul yang unggul dalam kecakapan hidup ( life Skills ).\n</p>\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n<strong>Misi :</strong>\n</p>\n<ol style="color: #090b0c; margin: 1em 0px 1em 2em; padding: 0px; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px; list-style-position: inside">\n	<li style="margin: 0.2em 0px; padding: 0px; line-height: 1.2em; background-image: none">Menyiapkan tenaga kerja tingkat menengah yang bermoral, produktif, kreatif, inovatif, adaptif dan demokratis.</li>\n	<li style="margin: 0.2em 0px; padding: 0px; line-height: 1.2em; background-image: none">Menghasilkan tamatan yang mampu Memenuhi tuntutan pasar kerja, berwirausaha dan mampu mengembangkan diri sesuai dengan potensinya</li>\n</ol>\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;\n</p>\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n<strong>Tujuan</strong>&nbsp;:\n</p>\n<ul style="color: #090b0c; margin: 1em 0px 1em 2em; padding: 0px; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px; list-style-type: none">\n	<li style="margin: 0.2em 0px; padding: 0px 0px 0px 13px; line-height: 1.2em; background-image: url(&#39;http://smkn6jember.sch.id/temp/art_smk_atas/images/PostBullets.png&#39;); background-repeat: no-repeat no-repeat">Tahun 2014 siswa memiliki kompetensi penguasaan konsep untuk seluruh mata pelajaran secara komprehensif dan benar sehingga mampu berkompetisi ditingkat nasional dan tahun 2012 mampu berkompetisi di tingkat internasional</li>\n	<li style="margin: 0.2em 0px; padding: 0px 0px 0px 13px; line-height: 1.2em; background-image: url(&#39;http://smkn6jember.sch.id/temp/art_smk_atas/images/PostBullets.png&#39;); background-repeat: no-repeat no-repeat">Tahun 2014 siswa mampu menggunakan Bahasa Inggris sebagai alat komunikasi untuk mendapatkan pengetahuan yang lebih luas</li>\n	<li style="margin: 0.2em 0px; padding: 0px 0px 0px 13px; line-height: 1.2em; background-image: url(&#39;http://smkn6jember.sch.id/temp/art_smk_atas/images/PostBullets.png&#39;); background-repeat: no-repeat no-repeat">Tahun 2014 siswa mampu membangun kebiasaan yang aktif untuk mencari informasi menggunakan teknologi informasi.</li>\n	<li style="margin: 0.2em 0px; padding: 0px 0px 0px 13px; line-height: 1.2em; background-image: url(&#39;http://smkn6jember.sch.id/temp/art_smk_atas/images/PostBullets.png&#39;); background-repeat: no-repeat no-repeat">Tahun 2014 sekolah memiliki sarana dan prasarana penunjang PBM yang lengkap.</li>\n	<li style="margin: 0.2em 0px; padding: 0px 0px 0px 13px; line-height: 1.2em; background-image: url(&#39;http://smkn6jember.sch.id/temp/art_smk_atas/images/PostBullets.png&#39;); background-repeat: no-repeat no-repeat">Tahun 2014 sekolah memiliki guru dan tenaga pendukung yang handal untuk mendukung seluruh manajemen sekolah.</li>\n	<li style="margin: 0.2em 0px; padding: 0px 0px 0px 13px; line-height: 1.2em; background-image: url(&#39;http://smkn6jember.sch.id/temp/art_smk_atas/images/PostBullets.png&#39;); background-repeat: no-repeat no-repeat">Sekolah memiliki hubungan kemitraan yang baik dengan seluruh warga sekolah,&nbsp;<em>stake holders</em>&nbsp;dan instansi serta institusi pendukung pendidikan lainnya.</li>\n	<li style="margin: 0.2em 0px; padding: 0px 0px 0px 13px; line-height: 1.2em; background-image: url(&#39;http://smkn6jember.sch.id/temp/art_smk_atas/images/PostBullets.png&#39;); background-repeat: no-repeat no-repeat">Siswa memiliki, mengaplikasikan dan meningkatkan nilai-nilai ketuhanan serta nilai-nilai kehidupan yang bersifat universal dalam kehidupannya.</li>\n</ul>\n', 'Kamis', '2014-02-20', '21:29:31', '55gb51.jpg', 8, ''),
(165, 22, '', 'Sejarah Singkat', 'sejarah-singkat', 'Y', '<div align="center" style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n<strong>SEJARAH SINGKAT</strong>\n</div>\n<div align="center" style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n<strong>SMEA NEGERI TANGGUL</strong>\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1965Yayasan Badan Pembangunan Nasional Tanggul (YBPN) mendirikan SMEA swasta yang diberi nama SMEA SWADAYA .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\nPengelolaannya diserahkan kepada kepala dan guru-guru SMEA NEGERI TANGGUL .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1967&nbsp;&nbsp;&nbsp;&nbsp; Nama SMEA SWADAYA diubah menjadi SMEA PERSIAPAN NEGERI .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1970&nbsp;&nbsp;&nbsp;&nbsp; Yayasan mampu membangun satu unit sekolah ,terdiri dari : Ir Kepsek , Ir TU , Ir Guru , 4r Kelas Teori .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\nAlamat : Jalan Semboro 83 , Tanggul\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1972&nbsp;&nbsp;&nbsp;&nbsp; SMEA PERSIAPAN NEGERI menjadi SME A NEGERI dengan SK Mendepdikbud no.0116/0/1972 tgl.2 Agustus 1972 .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\nKepsek : Bpk.Tiarum Siswohadi,B.A.\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1974&nbsp;&nbsp;&nbsp;&nbsp; Sekolah berkembang menjadi 7r kelas teori dan 4 orang Guru GTT diangkat menjadi Guru tetap (Guru Negeri).\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1976&nbsp;&nbsp;&nbsp;&nbsp; Melalui BP3 sekolah mampu membangun 1r praktik mengetik dan 3r kelasteori yang dapat diubah menjadi Aula (Ruang Serba Guna).\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1984&nbsp;&nbsp;&nbsp;&nbsp; Bpk.Tiarum Siswahadi ,B.A.&nbsp; pindah ke Banyuwangi , Kepsek diganti Bpk.Hasanudin,B.A. dari pamekasan.\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1989&nbsp;&nbsp;&nbsp;&nbsp; Sekolah berkembang terus.Organisasi sekolah dibenahi , sarana prasarana pendidikan ditingkatkan dan dilengkapi.\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1r Guru yang layak dibangun.\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kemampuan sekolah menjadi :&nbsp;\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1r Kepsek , 1r TU ,1r Guru , 1r Perpustakaan , 1r Praktik mengetik , 12r Kelas teori , Tempat parkir sepeda Guru dan siswa terpisah .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mesin manual&nbsp; = 80 unit , Buku perpustakaan&nbsp; = 533 judul\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Guru tetap = 19 orang , GTT = 8 orang , pegawai tetap = 4 orang , PTT = 6 orang\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\nPesuruh = 2 orang .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\nSiswa kelas 1&nbsp;&nbsp;&nbsp; = 288 orang (6 kls)\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\nSiswa kelas II&nbsp;&nbsp; =266 orang (6 kls)\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\nSiswa kelas III&nbsp; =194 orang (5 kls)\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1991&nbsp;&nbsp;&nbsp;&nbsp; Sekolah mendapat proyek peningkatan SLTA INO-SF dengan Sk pimpro Jatim nomor A.0195/1991/1992 Tgl.10 Juli 1991 . proyek tersebut berupa&nbsp; gedung , perabot , peralatan praktik lengkap .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1992&nbsp;&nbsp;&nbsp;&nbsp; Pembangunan gedung dimulai&nbsp; di alamat :\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jalan PB Sudirman 114,Tanggul.\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1993&nbsp;&nbsp;&nbsp;&nbsp; Bulan maret pembangunan fisik selesai . Tgl 17 Juli 1993 (Tahun pelajaran baru) ditempati untuk kantor pusat dan siswa kelas II Dan III . Siswa kelas I bertempat digedung lama Jl.Semboro 83 .\n</div>\n<div style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n1994&nbsp;&nbsp;&nbsp;&nbsp; Diresmikan mendepdikbud Prof.Dr.Ing.Wardiman Djojonegoro hari senin tanggal 29 Agustus 1994.\n</div>\n<p style="color: #293638; font-family: Arial, Arial, Helvetica, sans-serif; font-size: 12px">\n&nbsp;\n</p>\n', 'Kamis', '2014-02-20', '21:34:33', '86537982_563154743716020_1214207100_n.jpg', 21, 'Artikel');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(19, 'Teknologi', 'teknologi', 'Y'),
(2, 'Olahraga', 'olahraga', 'Y'),
(22, 'Sekolah', 'sekolah', 'Y'),
(23, 'Hiburan', 'hiburan', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `id_berita` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_komentar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama_komentar`, `isi_komentar`, `aktif`) VALUES
(95, 154, 'amien', 'bagus', 'Y'),
(96, 154, 'aku', 'sippppp\r\n', 'N'),
(98, 165, 'Amien', 'Uji Coba Komentar', 'N'),
(99, 164, 'km', '.mm', 'N'),
(100, 165, 's', 'ss', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `slider1` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`no`, `slider1`) VALUES
(18, '1398810_662114760487191_1499140515_o.jpg'),
(19, '66586_457181600999405_1332471013_n.jpg'),
(20, '394821_472649169451277_1371016758_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2013-11-23', 32, '1385218004'),
('::1', '2013-11-24', 86, '1385333950'),
('::1', '2013-11-25', 20, '1385379469'),
('::1', '2013-11-27', 2, '1385586114'),
('::1', '2013-11-29', 4, '1385761521'),
('::1', '2013-12-02', 1, '1385990615'),
('::1', '2013-12-03', 1, '1386046388'),
('::1', '2013-12-05', 1, '1386212027'),
('::1', '2013-12-07', 1, '1386394207'),
('::1', '2013-12-12', 1, '1386808501'),
('::1', '2013-12-19', 1, '1387414126'),
('::1', '2014-02-16', 202, '1392584550'),
('::1', '2014-02-17', 24, '1392676696'),
('::1', '2014-02-18', 97, '1392763949'),
('::1', '2014-02-19', 21, '1392850686'),
('::1', '2014-02-20', 139, '1392906952'),
('::1', '2014-02-21', 27, '1392963732'),
('::1', '2015-01-13', 4, '1421113150'),
('::1', '2015-01-14', 7, '1421202402'),
('::1', '2015-01-14', 7, '1421202402'),
('::1', '2015-01-16', 3, '1421394523'),
('::1', '2015-01-18', 4, '1421597515'),
('::1', '2015-01-20', 3, '1421734553'),
('::1', '2015-01-30', 3, '1422607542'),
('::1', '2015-02-06', 7, '1423191324'),
('::1', '2015-02-09', 1, '1423487666'),
('::1', '2015-02-12', 8, '1423702671'),
('::1', '2015-02-24', 2, '1424743269'),
('::1', '2015-02-24', 2, '1424743269'),
('::1', '2015-02-25', 4, '1424837571'),
('::1', '2015-03-06', 3, '1425603901'),
('::1', '2015-03-11', 30, '1426072677'),
('::1', '2015-03-12', 11, '1426175190'),
('::1', '2015-03-13', 4, '1426248196'),
('::1', '2015-03-14', 15, '1426332964'),
('::1', '2015-03-15', 1, '1426430686'),
('::1', '2015-04-01', 2, '1427887681'),
('::1', '2015-04-06', 2, '1428314835');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(5) NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`, `tag_seo`, `count`) VALUES
(13, 'Tips ', 'tips', 15),
(14, 'Perawatan', 'perawatan', 4),
(16, 'Tutorial', 'tutorial', 25),
(17, 'Artikel', 'Artikel', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidangstudi`
--

CREATE TABLE IF NOT EXISTS `tb_bidangstudi` (
  `bidang_kode` char(10) NOT NULL,
  `bidang_nama` varchar(50) NOT NULL,
  PRIMARY KEY (`bidang_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bidangstudi`
--

INSERT INTO `tb_bidangstudi` (`bidang_kode`, `bidang_nama`) VALUES
('BS00000001', 'Teknologi informasi dan Komunikasi'),
('BS00000002', 'Bisnis Manajemen'),
('BS00000003', 'aaaaaa'),
('BS00000004', 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE IF NOT EXISTS `tb_guru` (
  `guru_kode` char(10) NOT NULL,
  `kompetensi_kode` char(10) NOT NULL,
  `guru_nip` char(16) NOT NULL,
  `guru_nama` varchar(25) NOT NULL,
  `guru_alamat` varchar(50) NOT NULL,
  `guru_telpon` varchar(12) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`guru_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`guru_kode`, `kompetensi_kode`, `guru_nip`, `guru_nama`, `guru_alamat`, `guru_telpon`, `password`) VALUES
('GR00000010', 'KK00000004', '7551744646300003', 'Hj. Luluk Hanum, S.Pd', 'Jember', '087123456', 'luluk1'),
('GR00000009', 'KK00000004', '8333736639200003', 'Drs. Khodiq', 'Jember', '0876591233', '8333736639200003'),
('GR00000008', 'KK00000004', '4942743644300022', 'Dra.Titik Sudarwati', 'Bojonegoro', '083765487', '4942743644300022'),
('GR00000007', 'KK00000003', '7035742644200013', 'Drs. Dwi Cahyono', 'Pacitan', '0856784321', '7035742644200013'),
('GR00000006', 'KK00000003', '3449742644300013', 'Hj. Isnayah, S.Pd., MMPd', 'Banyuwangi', '0876543217', '3449742644300013'),
('GR00000005', 'KK00000003', '9549740642200003', 'Drs. Sutamam', 'Blitar', '0834567812', '9549740642200003'),
('GR00000004', 'KK00000001', '2655734639300002', 'Dra. Siti Wahyuni', 'Probolinggo', '0851234567', '2655734639300002'),
('GR00000003', 'KK00000001', '1436741642200012', 'Drs. Supandi', 'Situbondo', '0897612345', '1436741642200013'),
('GR00000002', 'KK00000001', '8952740641200002', 'Drs. Yuni Irianto', 'Kaliboto Lumajang', '08912345678', '8952740641200002'),
('GR00000001', 'KK00000001', '2692737639200002', 'Drs. Mulyono, M.Pd.', 'Nganjuk', '0897654321', '2692737639200002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `kompetensi_kode` char(10) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kode_kelas`, `kompetensi_kode`, `kelas`, `nama_kelas`) VALUES
('K000000005', 'KK00000004', '10', '10 Pemasaran 1'),
('K000000004', 'KK00000003', '10', '10 Akuntansi 2'),
('K000000003', 'KK00000003', '10', '10 Akuntansi 1'),
('K000000002', 'KK00000001', '10', '10 Rekayasa Perangkat Lunak 2'),
('K000000001', 'KK00000001', '10', '10 Rekayasa Perangkat Lunak 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kompetensikeahlian`
--

CREATE TABLE IF NOT EXISTS `tb_kompetensikeahlian` (
  `kompetensi_kode` char(10) NOT NULL,
  `bidang_kode` char(10) NOT NULL,
  `kompetensi_nama` varchar(25) NOT NULL,
  PRIMARY KEY (`kompetensi_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kompetensikeahlian`
--

INSERT INTO `tb_kompetensikeahlian` (`kompetensi_kode`, `bidang_kode`, `kompetensi_nama`) VALUES
('KK00000004', 'BS00000002', 'Pemasaran'),
('KK00000003', 'BS00000002', 'Akuntansi'),
('KK00000002', 'BS00000001', 'Multimedia'),
('KK00000001', 'BS00000001', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `siswa_nisn` char(15) NOT NULL,
  `sk_kode` char(10) NOT NULL,
  `nilai_angka` float NOT NULL,
  `nilai_huruf` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`siswa_nisn`, `sk_kode`, `nilai_angka`, `nilai_huruf`) VALUES
('10600.0367.070', 'SK00000010', 78, 'B'),
('10600.0367.070', 'SK00000007', 78, 'B'),
('10600.0367.070', 'SK00000008', 74, 'B'),
('10600.0367.070', 'SK00000009', 78, 'B'),
('10610.0377.070', 'SK00000012', 90, 'A'),
('10610.0377.070', 'SK00000011', 89, 'B'),
('10610.0377.070', 'SK00000010', 98, 'A'),
('10610.0377.070', 'SK00000007', 50, 'C'),
('10610.0377.070', 'SK00000008', 76, 'B'),
('10610.0377.070', 'SK00000009', 98, 'A'),
('10600.0367.070', 'SK00000011', 65, 'C'),
('10600.0367.070', 'SK00000012', 56, 'C'),
('10599.0366.070', 'SK00000009', 78, 'B'),
('10599.0366.070', 'SK00000008', 80, 'B'),
('10599.0366.070', 'SK00000007', 90, 'A'),
('10599.0366.070', 'SK00000010', 78, 'B'),
('10599.0366.070', 'SK00000011', 89, 'B'),
('10599.0366.070', 'SK00000012', 90, 'A'),
('10598.0365.070', 'SK00000009', 80, 'B'),
('10598.0365.070', 'SK00000008', 90, 'A'),
('10598.0365.070', 'SK00000007', 78, 'B'),
('10598.0365.070', 'SK00000010', 80, 'B'),
('10598.0365.070', 'SK00000011', 87, 'B'),
('10598.0365.070', 'SK00000012', 76, 'B'),
('10597.0364.070', 'SK00000013', 90, 'A'),
('10597.0364.070', 'SK00000014', 78, 'B'),
('10597.0364.070', 'SK00000015', 89, 'B'),
('10597.0364.070', 'SK00000016', 85, 'B'),
('10597.0364.070', 'SK00000017', 90, 'A'),
('10597.0364.070', 'SK00000018', 97, 'A'),
('10597.0364.070', 'SK00000019', 80, 'B'),
('10597.0364.070', 'SK00000020', 80, 'B'),
('10597.0364.070', 'SK00000021', 78, 'B'),
('10595.0362.070', 'SK00000013', 89, 'B'),
('10595.0362.070', 'SK00000014', 67, 'C'),
('10595.0362.070', 'SK00000015', 78, 'B'),
('10595.0362.070', 'SK00000016', 76, 'B'),
('10595.0362.070', 'SK00000017', 78, 'B'),
('10595.0362.070', 'SK00000018', 98, 'A'),
('10595.0362.070', 'SK00000019', 76, 'B'),
('10595.0362.070', 'SK00000020', 75, 'B'),
('10595.0362.070', 'SK00000021', 78, 'B'),
('10594.0361.070', 'SK00000013', 90, 'A'),
('10594.0361.070', 'SK00000014', 74, 'B'),
('10594.0361.070', 'SK00000015', 89, 'B'),
('10594.0361.070', 'SK00000016', 76, 'B'),
('10594.0361.070', 'SK00000017', 79, 'B'),
('10594.0361.070', 'SK00000018', 78, 'B'),
('10594.0361.070', 'SK00000019', 90, 'A'),
('10594.0361.070', 'SK00000020', 90, 'A'),
('10593.0360.070', 'SK00000013', 80, 'B'),
('10593.0360.070', 'SK00000014', 78, 'B'),
('10593.0360.070', 'SK00000015', 90, 'A'),
('10593.0360.070', 'SK00000016', 78, 'B'),
('10593.0360.070', 'SK00000017', 90, 'A'),
('10593.0360.070', 'SK00000018', 87, 'B'),
('10593.0360.070', 'SK00000019', 78, 'B'),
('10593.0360.070', 'SK00000020', 99, 'A'),
('10593.0360.070', 'SK00000021', 98, 'A'),
('10592.0359.070', 'SK00000013', 80, 'B'),
('10592.0359.070', 'SK00000014', 79, 'B'),
('10592.0359.070', 'SK00000015', 90, 'A'),
('10592.0359.070', 'SK00000016', 99, 'A'),
('10592.0359.070', 'SK00000017', 89, 'B'),
('10592.0359.070', 'SK00000018', 90, 'A'),
('10592.0359.070', 'SK00000019', 89, 'B'),
('10592.0359.070', 'SK00000020', 90, 'A'),
('10592.0359.070', 'SK00000021', 78, 'B'),
('10591.0358.070', 'SK00000013', 90, 'A'),
('10591.0358.070', 'SK00000014', 76, 'B'),
('10591.0358.070', 'SK00000015', 98, 'A'),
('10591.0358.070', 'SK00000016', 97, 'A'),
('10591.0358.070', 'SK00000017', 86, 'B'),
('10591.0358.070', 'SK00000018', 98, 'A'),
('10591.0358.070', 'SK00000019', 97, 'A'),
('10591.0358.070', 'SK00000020', 80, 'B'),
('10591.0358.070', 'SK00000021', 90, 'A'),
('10590.0357.070', 'SK00000013', 90, 'A'),
('10590.0357.070', 'SK00000014', 98, 'A'),
('10590.0357.070', 'SK00000015', 87, 'B'),
('10590.0357.070', 'SK00000016', 90, 'A'),
('10590.0357.070', 'SK00000017', 89, 'B'),
('10590.0357.070', 'SK00000018', 90, 'A'),
('10590.0357.070', 'SK00000019', 89, 'B'),
('10590.0357.070', 'SK00000020', 98, 'A'),
('10590.0357.070', 'SK00000021', 98, 'A'),
('10269.0348.070', 'SK00000013', 88, 'B'),
('10269.0348.070', 'SK00000014', 98, 'A'),
('10269.0348.070', 'SK00000015', 87, 'B'),
('10269.0348.070', 'SK00000016', 97, 'A'),
('10269.0348.070', 'SK00000017', 78, 'B'),
('10269.0348.070', 'SK00000018', 87, 'B'),
('10269.0348.070', 'SK00000019', 90, 'A'),
('10269.0348.070', 'SK00000020', 87, 'B'),
('10269.0348.070', 'SK00000021', 98, 'A'),
('10588.0355.070', 'SK00000013', 98, 'A'),
('10588.0355.070', 'SK00000014', 87, 'B'),
('10588.0355.070', 'SK00000015', 89, 'B'),
('10588.0355.070', 'SK00000016', 98, 'A'),
('10588.0355.070', 'SK00000017', 89, 'B'),
('10588.0355.070', 'SK00000018', 78, 'B'),
('10588.0355.070', 'SK00000019', 89, 'B'),
('10588.0355.070', 'SK00000020', 78, 'B'),
('10588.0355.070', 'SK00000021', 99, 'A'),
('10589.0356.070', 'SK00000013', 90, 'A'),
('10589.0356.070', 'SK00000014', 99, 'A'),
('10589.0356.070', 'SK00000015', 98, 'A'),
('10589.0356.070', 'SK00000016', 89, 'B'),
('10589.0356.070', 'SK00000017', 90, 'A'),
('10589.0356.070', 'SK00000018', 89, 'B'),
('10589.0356.070', 'SK00000019', 98, 'A'),
('10589.0356.070', 'SK00000020', 89, 'B'),
('10589.0356.070', 'SK00000021', 98, 'A'),
('212122', 'SK00000006', 70, 'B'),
('212122', 'SK00000005', 89, 'B'),
('212122', 'SK00000004', 93, 'A'),
('212122', 'SK00000003', 92, 'A'),
('212122', 'SK00000002', 80, 'B'),
('212122', 'SK00000001', 90, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `Kode_Pengguna` varchar(10) NOT NULL,
  `Nama_Pengguna` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Umur_Pengguna` int(4) NOT NULL,
  `Alamat_Pengguna` varchar(100) NOT NULL,
  `No_Hp` varchar(12) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`Kode_Pengguna`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`Kode_Pengguna`, `Nama_Pengguna`, `Password`, `Umur_Pengguna`, `Alamat_Pengguna`, `No_Hp`, `level`) VALUES
('U000000001', 'Admin', 'Admin', 18, 'Manggisan', '08976302899', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `siswa_nisn` char(15) NOT NULL,
  `wali_id` char(10) NOT NULL,
  `kompetensi_kode` char(10) NOT NULL,
  `siswa_nama` varchar(30) NOT NULL,
  `siswa_alamat` varchar(50) NOT NULL,
  `siswa_tgllahir` varchar(100) NOT NULL,
  `siswa_foto` varchar(100) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`siswa_nisn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`siswa_nisn`, `wali_id`, `kompetensi_kode`, `siswa_nama`, `siswa_alamat`, `siswa_tgllahir`, `siswa_foto`, `kode_kelas`, `password`) VALUES
('10610.0377.070', 'WM00000009', 'KK00000003', 'Moch Maruf Amien', 'Manggisan', '08-02-1995', 'IMG_4526.JPG', 'K000000003', 'amien'),
('10600.0367.070', 'WM00000009', 'KK00000003', 'Faisol', 'Tanggul', '01-02-1997', 'IMG_4509.JPG', 'K000000003', '10600.0367.070'),
('10599.0366.070', 'WM00000001', 'KK00000003', 'Dita Nur Indah Sari', 'Pondok Jeruk', '10-02-1993', 'IMG_4529.JPG', 'K000000003', '10599.0366.070'),
('10598.0365.070', 'WM00000002', 'KK00000003', 'Didin Priambodo Setiawan', 'Tanggul', '08-05-1996', 'IMG_4517.JPG', 'K000000003', '10598.0365.070'),
('10597.0364.070', 'WM00000003', 'KK00000001', 'Dicky Derena Setiyono', 'Tanggul', '04-02-2014', 'IMG_4507.JPG', 'K000000002', '10597.0364.070'),
('10595.0362.070', 'WM00000004', 'KK00000001', 'Ariyo Widodo', 'Klatakan', '15-08-1996', 'IMG_4524.JPG', 'K000000002', '10595.0362.070'),
('10594.0361.070', 'WM00000005', 'KK00000001', 'Arif Firman Aulia', 'Tanggul', '10-04-1996', 'IMG_4522.JPG', 'K000000002', '10594.0361.070'),
('10593.0360.070', 'WM00000005', 'KK00000001', 'Antok Susanto', 'Tanggul', '13-03-1996', 'IMG_4510.JPG', 'K000000002', '10593.0360.070'),
('10592.0359.070', 'WM00000006', 'KK00000001', 'Ahmad Fauzan', 'Pondok Jeruk', '08-11-1995', 'IMG_4508.JPG', 'K000000002', '10592.0359.070'),
('10591.0358.070', 'WM00000007', 'KK00000001', 'Ahmad Alfarisi Jaka Setia Putr', 'Paleran', '09-05-1996', 'IMG_4528.JPG', 'K000000001', '10591.0358.070'),
('10590.0357.070', 'WM00000008', 'KK00000001', 'Agus Triyanto', 'Klatakan', '05-06-1996', 'IMG_4511.JPG', 'K000000001', '10590.0357.070'),
('10269.0348.070', 'WM00000011', 'KK00000001', 'Rizqi Noviansyah', 'Tanggul', '10-02-1993', 'IMG_4525.JPG', 'K000000001', '10269.0348.070'),
('10588.0355.070', 'WM00000012', 'KK00000001', 'Abdus Syakur', 'Tanggul', '09-02-1995', 'IMG_4506.JPG', 'K000000001', '10588.0355.070'),
('10589.0356.070', 'WM00000009', 'KK00000001', 'Adi Priyanto Wibowo', 'Tanggul', '01-02-1996', 'IMG_4514.JPG', 'K000000001', '10589.0356.070'),
('212122', 'WM00000008', 'KK00000004', 'Andika', 'Jl. Mastrib', '18-01-1996', 'IMG_4506.JPG', 'K000000005', '212122'),
('212121', 'WM00000011', 'KK00000004', '3333', 'dddd', 'ddddd', '20072010(002).jpg', 'K000000005', '212121'),
('11111111111', 'WM00000012', 'KK00000003', 'Lukman', 'Situbondo', '03-02-2015', 'B.jpg', 'K000000004', '11111111111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_standarkompetensi`
--

CREATE TABLE IF NOT EXISTS `tb_standarkompetensi` (
  `sk_kode` char(10) NOT NULL,
  `guru_kode` char(10) NOT NULL,
  `kompetensi_kode` char(10) NOT NULL,
  `sk_nama` varchar(60) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kkm` varchar(3) NOT NULL,
  PRIMARY KEY (`sk_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_standarkompetensi`
--

INSERT INTO `tb_standarkompetensi` (`sk_kode`, `guru_kode`, `kompetensi_kode`, `sk_nama`, `kelas`, `kkm`) VALUES
('SK00000009', 'GR00000006', 'KK00000003', 'Bahasa Inggris 1', '10', '76'),
('SK00000008', 'GR00000007', 'KK00000003', 'Dasar Akutansi', '10', '70'),
('SK00000007', 'GR00000007', 'KK00000003', 'Perpajakan', '10', '70'),
('SK00000006', 'GR00000008', 'KK00000004', 'Ilmu Pengetahuan Alam ', '10', '70'),
('SK00000005', 'GR00000008', 'KK00000004', 'Dasar Penjualan', '10', '70'),
('SK00000004', 'GR00000009', 'KK00000004', 'Kewirausahaan', '10', '70'),
('SK00000003', 'GR00000009', 'KK00000004', 'Matematika', '10', '78'),
('SK00000010', 'GR00000005', 'KK00000003', 'Matematika', '10', '75'),
('SK00000002', 'GR00000010', 'KK00000004', 'Bahasa Inggris', '10', '76'),
('SK00000001', 'GR00000010', 'KK00000004', 'Bahasa Indonesia', '10', '75'),
('SK00000011', 'GR00000005', 'KK00000003', 'Bahasa Indonesia', '10', '77'),
('SK00000012', 'GR00000006', 'KK00000003', 'Ilmu Pengetahuan Alam', '10', '75'),
('SK00000013', 'GR00000004', 'KK00000001', 'Membuat Basis Data', '10', '70'),
('SK00000014', 'GR00000004', 'KK00000001', 'Menerapkan Algoritma', '10', '75'),
('SK00000015', 'GR00000003', 'KK00000001', 'Elektronika Dasar', '10', '70'),
('SK00000016', 'GR00000003', 'KK00000001', 'Merakit Personal Komputer', '10', '70'),
('SK00000017', 'GR00000002', 'KK00000001', 'Kimia', '10', '70'),
('SK00000018', 'GR00000002', 'KK00000001', 'Fisika', '10', '70'),
('SK00000019', 'GR00000001', 'KK00000001', 'Bahasa Indonesia', '10', '70'),
('SK00000020', 'GR00000001', 'KK00000001', 'Bahasa Inggris', '10', '70'),
('SK00000021', 'GR00000001', 'KK00000001', 'Matematika', '10', '70');

-- --------------------------------------------------------

--
-- Table structure for table `tb_walimurid`
--

CREATE TABLE IF NOT EXISTS `tb_walimurid` (
  `wali_id` char(10) NOT NULL,
  `wali_namaayah` char(25) NOT NULL,
  `wali_pekerjaanayah` char(15) NOT NULL,
  `wali_namaibu` char(25) NOT NULL,
  `wali_pekerjaanibu` char(15) NOT NULL,
  `wali_alamat` char(50) NOT NULL,
  `wali_telpon` varchar(12) NOT NULL,
  PRIMARY KEY (`wali_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_walimurid`
--

INSERT INTO `tb_walimurid` (`wali_id`, `wali_namaayah`, `wali_pekerjaanayah`, `wali_namaibu`, `wali_pekerjaanibu`, `wali_alamat`, `wali_telpon`) VALUES
('WM00000011', 'Syamsul Arifin', 'Guru', 'Kharisma Aulia', 'Wirausaha', 'Paleran', '08564321'),
('WM00000012', 'Miftahul', 'Guru', 'Berlin', 'Wirausaha', 'Klatakan', '08956432'),
('WM00000009', 'Fathur Rohman', 'Tentara', 'Fira adeliana', 'Wirausaha', 'Tanggul Kulon', '085784523'),
('WM00000008', 'Sony Hankam', 'Tentara', 'Ratri Prihastiwi', 'Wirausaha', 'Klatakan', '081236578'),
('WM00000007', 'Budi Arjuna', 'Polisi', 'Desi Vera', 'Wirausaha', 'Klatakan', '085786543'),
('WM00000006', 'Iwan', 'Pegawai Bank', 'Lilis', 'Wirausaha', 'Tanggul Kulon', '087965432'),
('WM00000005', 'Dhofir', 'Tentara', 'Luluk', 'Wirausaha', 'Patemon', '083467232'),
('WM00000004', 'Soekarno', 'Wirausaha', 'Lilik', 'Wirausaha', 'Manggisan', '08765892'),
('WM00000003', 'Edi Setyono', 'Dokter', 'Sumi wulandari', 'Wirausaha', 'Manggisan', '087956432'),
('WM00000002', 'Muhammad', 'Guru', 'Safitri', 'Guru', 'Paleran', '087658943'),
('WM00000001', 'Irfan Ali', 'Tentara', 'Maisaroh', 'wirausaha', 'Jember', '087589445'),
('WM00000013', 'aaa', 'aaa', 'aaa', 'aaaa', 'bbbbbb', 'agustin.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
