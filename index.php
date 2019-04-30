<?php
error_reporting(0);
include"admin/db/koneksi.php";

?>


<?php include "config/fungsi_indotgl.php"; session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SMK NEGERI 6 JEMBER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link id="switch_style" href="css/silver/bootstrap.min.css" rel="stylesheet">
	
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet"> 

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/application.js"></script>
</head>	
<body>
<div class="container">



<div class="row-fluid">
    <div class="span9"><br/><h1>SMK NEGERI 6 JEMBER</h1>
	</div>
	<div class="span3"><br/>
	<div class="pull-right">
	<a href="#"  original-title="facebook"><img src="icon/soc1.png"  alt="facebook"></a>
	<a href="#"  original-title="Delicious"><img src="icon/soc2.png"  alt="Delicious"></a>
	<a href="#"  original-title="myspace"><img src="icon/soc3.png" alt="myspace"></a><br/><br/>
	</div>
	</div>
</div>

<div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a href="#" class="brand"></a>
        <div class="nav-collapse">
          
          
          <ul class="nav pull-right">
            <li><a href="#">Profil</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Berita<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Visi&Misi</a></li>
                <li><a href="#">Pembagian Raport</a></li>
                <li><a href="#">Carnaval 2014</a></li>
                <li class="divider"></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div>
	
<div class="row-fluid">
<div class="span7">
	
	<div id="myCarousel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
    <div class="active item"><img src="img/01.jpg" style="width:100%"/>
	<div class="carousel-caption">
                  <h4>Halaman Depan</h4>
                  <p>Ini adalah halaman depan sekolah SMK NEGERI 6 JEMBER yang baru saja selesai pembangunan beberapa bulan yang lalu.</p>
                </div>
	</div>
    <div class="item"><img src="img/03.jpg" style="width:100%"/>
	<div class="carousel-caption">
                  <h4>Taman Sekolah</h4>
                  <p>Inilah yang menjadikan daya tarik masyarat yaitu taman sekolah yang bersih dan indah.Taman yang menyejukkan mata dengan hijau segar ada disegala penjuru sekolah.</p>
                </div>
	</div>
    <div class="item"><img src="img/gazebo.jpg" style="width:100%"/>
	<div class="carousel-caption">
                  <h4>Gazebo Sekolah</h4>
                  <p>Area ini merupakan kawasan free Wi-fi untuk warga SMK NEGERI 6 JEMBER dan juga tempat bersantai dikala sedang istirahat.</p>
                </div>
	</div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> <?php include "buka_file.php"; ?>
    </div>
	<div class="span5">
	
		
	</div>
   <div class="row"><center><br/><br/>&copy; SMK NEGERI 6 JEMBER Jalan PB Sudirman 114 Tanggul <br/> <br/></center></div>

</div>
    
<div id="theme_switcher">
<style>
.container{width:970px}
#theme_switcher {left: 10px;position: fixed;top: 10px;}
</style>
	<div class="btn-group">
		<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Choose Colors<span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="#" rel="silver">Silver</a></li>
            <li><a href="#" rel="black">Black</a></li>
			<li><a href="#" rel="blue">Blue</a></li>
			<li><a href="#" rel="bluewhite">Blue White</a></li>
            <li><a href="#" rel="greenyellow">Green Yellow</a></li>
			<li><a href="#" rel="orange">Orange</a></li>
            <li><a href="#" rel="siningblack">Sining Black</a></li>
            <li><a href="#" rel="white">White</a></li>
			<li><a href="#" rel="">Bootstrap</a></li>
		</ul>
	</div>
</div>
<script>
$(function() {
	$('#theme_switcher ul li a').bind('click',
		function(e) {
			$("#switch_style").attr("href", "css/"+$(this).attr('rel')+"/bootstrap.min.css");    		
			return false;
		}
	);
});
</script>
</body>
</html>