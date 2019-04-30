              <div class="searchCourse searchCourseHome column c-33 clearfix " style=" margin-top:-90px">
					
                        <p> Please Login </p> 
					
						
						<?php if(isset($_SESSION['nisn'])){  ?>
						<label></label>
                            
                        <table width="200" border="0">
  <tr>
    <td colspan="3"><label></label>
      Selamat Datang </td>
    </tr>
  <tr>
    <td>NISN</td>
    <td>:</td>
    <td><?php echo  $_SESSION['nisn'] ?></td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td><?php echo  $_SESSION['nama'] ?></td>
  </tr>
  <tr>
  <tr>
    <td colspan="3"><a target="_blank" href="?page=Nilai&nisn=<?php echo $_SESSION['nisn'] ?>" class="submit" style="padding:5px;">Nilai</a>
	<a target="_blank" href="?page=gantipas&nisn=<?php echo $_SESSION['nisn'] ?>" class="submit" style="padding:5px;">Ubah Password</a>
  
   <a href="logout.php" class="submit" style="padding:5px;">Logout</a></td>
  </tr>
</table>

						
						
						<?php
						}else{ ?>
                        <form action="login-admin.php" method="post">
                            <p>
                              <input type="text" name="user" placeholder="NIP/NISN..." >
                            </p>
                            <p>
                              <input type="password" name="pass" placeholder="Password..." />
                              <input class="submit" type="submit" value="Login"/>
                            </p>
                        </form> 
                        <?php } ?>