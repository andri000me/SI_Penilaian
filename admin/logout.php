<?php
  session_start();
  if($_SESSION['level']=="Admin"){
  session_destroy();
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  }else{
   session_destroy();
  echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
  }
?>
