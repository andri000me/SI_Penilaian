<!-- PENAMBAHAN -->

<?php if(isset($_SESSION['level'])){ 
if($_SESSION['level']=="Admin"){?>

<!-- PENAMBAHAN -->

<ul class="nav menu">
			<li class="active"><a href="menu.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            
            
			<li class="dropdown">
			  	<a href="" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-th"></span> 
          Data Sekolah  <b class="caret"></b></a>
                <ul class="dropdown-menu" >        	
			                <li><a href="?page=bidangview" ><i class="icon-credit-card"></i>
							<span class="menu-text">Data Bidang</span></a></li>
							<li><a href="?page=kelasview" ><i class="icon-credit-card"></i>
							<span class="menu-text">Data Kelas</span></a></li>
							<li><a href="?page=guruview" ><i class="icon-credit-card"></i>
							<span class="menu-text">Data Guru</span></a></li>
							<li><a href="?page=skompetensikelas" ><i class="icon-credit-card"></i>
							<span class="menu-text">Data Standar Kompetensi</span></a></li>
            </ul>
           
           <li class="dropdown">
			  	<a href="" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> 
          Data Siswa  <b class="caret"></b></a>
                <ul class="dropdown-menu" >        	
			                <li><a href="?page=waliview" ><i class="icon-credit-card"></i>
							<span class="menu-text">Data Wali</span></a></li>
							<li><a href="?page=kelassiswa" ><i class="icon-credit-card"></i>
							<span class="menu-text">Data Siswa</span></a></li>
            </ul>
            
			<li><a href="?page=nilaikelas"><span class="glyphicon glyphicon-pencil"></span> Penilaian</a></li>
            
            
            <li class="dropdown">
			  	<a href="" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-list-alt"></span> 
          Laporan  <b class="caret"></b></a>
                <ul class="dropdown-menu" >        	
			                <li><a href="?page=laporan_bidang" ><i class="icon-credit-card"></i>
							<span class="menu-text">Laporan Bidang</span></a></li>
							<li><a href="?page=laporan_kom" ><i class="icon-credit-card"></i>
							<span class="menu-text">Laporan Kompetensi</span></a></li>
							<li><a href="?page=lapor_kelas" ><i class="icon-credit-card"></i>
							<span class="menu-text">Laporan Kelas</span></a></li>
							<li><a href="?page=laporguru" ><i class="icon-credit-card"></i>
							<span class="menu-text">Laporan Guru</span></a></li>
                            <li><a href="?page=lapor_pelajaran" ><i class="icon-credit-card"></i>
							<span class="menu-text">Laporan Pelajaran</span></a></li>
                            <li><a href="?page=laporanwali" ><i class="icon-credit-card"></i>
							<span class="menu-text">Daftar Wali</span></a></li>
                            <li><a href="?page=laporkelas" ><i class="icon-credit-card"></i>
							<span class="menu-text">Laporan Siswa</span></a></li>
                            <li><a href="?page=laporkelasnilai" ><i class="icon-credit-card"></i>
							<span class="menu-text">Daftar Nilai+Raport</span></a></li>
            </ul>
            </ul>
        	
		
						
							
						


<!------------------------------------------------------------Laporan---------------------------------------------------------------------------------->

<!---------------------------------------------------------------Laporan AKK------------------------------------------------------------------------------->
           
                </ul>
              </li>
			 
			
           
            
<!-- PENAMBAHAN -->
            
<?php }elseif($_SESSION['level']=="Guru" ){?>

<!-- PENAMBAHAN -->
<ul class="nav menu">
			<li class="active"><a href="menu.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            

<li><a href="?page=nilaikelas"><span class="glyphicon glyphicon-pencil"></span> Penilaian</a></li>


 <li class="dropdown">
			  	<a href="" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-list-alt"></span> 
          Laporan  <b class="caret"></b></a>
                <ul class="dropdown-menu" >        	

                            <li><a href="?page=lapor_pelajaran" ><i class="icon-credit-card"></i>

							<span class="menu-text">Daftar Wali</span></a></li>
                            <li><a href="?page=laporkelas" ><i class="icon-credit-card"></i>
							<span class="menu-text">Laporan Siswa</span></a></li>
                            <li><a href="?page=laporkelasnilai" ><i class="icon-credit-card"></i>
							<span class="menu-text">Daftar Nilai+Raport</span></a></li>
            </ul>
            </ul>
        	
		
						
							
						


<!------------------------------------------------------------Laporan---------------------------------------------------------------------------------->

<!---------------------------------------------------------------Laporan AKK------------------------------------------------------------------------------->
           
                </ul>
              </li>

<!------------------------------------------------------------Laporan---------------------------------------------------------------------------------->

<!---------------------------------------------------------------Laporan AKK------------------------------------------------------------------------------->

                <li >
			  	
                
              </li>
			  <li >
			  	
                
              </li>
                </ul>
              </li>
			 
			</ul>
<?php }elseif($_SESSION['level']=="Siswa" ){?>

<!-- PENAMBAHAN -->

<li class="dropdown">
			  	
			 
			<li><a href="?page=laporguru" ><i class="icon-book"></i>
							<span class="menu-text">Laporan Guru</span></a></li>
            </ul></li>
<?php }else{?>

<?php
} }?>


