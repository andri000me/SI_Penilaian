<?php    

error_reporting(0);

function GetCheckboxes($table, $key, $Label, $Nilai='') {
  $s = "select * from $table order by nama_tag";
  $r = mysql_query($s);
  $_arrNilai = explode(',', $Nilai);
  $str = '';
  while ($w = mysql_fetch_array($r)) {
    $_ck = (array_search($w[$key], $_arrNilai) === false)? '' : 'checked';
    $str .= "<input type=checkbox name='".$key."[]' value='$w[$key]' $_ck><span class='lbl'>$w[$Label]</span>";
  }
  return $str;
}

$aksi="Data/berita/aksi_berita.php";
switch($_GET['act']){
  // Tampil Berita
  default:
  ?>
  
  
 
  
  
  
  
  <?php

	echo" <div class='well' >
	<div class='navbar navbar-inverse row-fluid'>
	  <div class='navbar-inner span12'>
 <div class='table-header'>
  <a class='brand' href='?page=berita'>Berita</a>
		  <div class='nav-collapse'>
			  <a href='?page=berita&act=tambahberita' class='small-box'><button class='btn btn-primary'>+ Tambah Berita</button></a>
		  <form class='navbar-form pull-right' method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=page value=berita>
          <input type=text name='kata'> <input class='btn btn-primary' type=submit value=Cari>
          </form></div>
		</div>
</div>
</div>
<section>";
    if (empty($_GET['kata'])){
    echo "<table class='table table-striped table-bordered table-hover'><thead>  
          <tr><td class='hidden-480' ><b>No</b></td>
          <td ><b>Judul</b></td>
          <td class='hidden-480'><b>Tgl. Posting</b></td>
          <td class='center' ><b>Aksi</b></td>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM berita 
                           WHERE username='$_SESSION[namauser]'       
                           ORDER BY id_berita DESC LIMIT $posisi,$batas");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr><td class='center hidden-480' width='25'>$no</td>
                <td class='left'>$r[judul]</td>
                <td class='left hidden-480'>$tgl_posting</td>
		            <td class='center' width='100'><div class='btn-group'><a href=?page=berita&act=editberita&id=$r[id_berita]><button class='btn btn-mini btn-primary'>Edit Data</button></a>
		                <a href=\"$aksi?page=berita&act=hapus&id=$r[id_berita]&namafile=$r[gambar]\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\"><button class='btn btn-mini btn-danger'>Delete Data</button></a></div></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM berita"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE username='$_SESSION[namauser]'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"> $linkHalaman</div>";
 
    break;    
    }
    else{
    echo "<table class='table table-hover table-condensed'><thead>  
          <tr><td class='left'>no</td>
          <td class='left'>judul</td>
          <td class='left'>tgl. posting</td>
          <td class='center'>aksi</td>
          </tr></thead>";

    $p      = new Paging9;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM berita WHERE judul LIKE '%$_GET[kata]%' ORDER BY id_berita DESC LIMIT $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM berita 
                           WHERE username='$_SESSION[namauser]'
                           AND judul LIKE '%$_GET[kata]%'       
                           ORDER BY id_berita DESC LIMIT $posisi,$batas");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr><td class='left'>$no</td>
                <td class='left'>$r[judul]</td>
                <td class='left'>$tgl_posting</td>
		            <td class='left'><a href=?page=berita&act=editberita&id=$r[id_berita]><img src='images/edit.png' border='0' title='edit' /></a>
		                <a href='$aksi?page=berita&act=hapus&id=$r[id_berita]&namafile=$r[gambar]'><img src='images/del.png' border='0' title='hapus' /></a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE judul LIKE '%$_GET[kata]%'"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE username='$_SESSION[namauser]' AND judul LIKE '%$_GET[kata]%'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"> $linkHalaman</div>";
 
    break;    
    }

  
  case "tambahberita":
    echo "<h2>Tambah Berita</h2>
          <form method=POST action='$aksi?page=berita&act=input' enctype='multipart/form-data'>
          <table class='table table-hover table-condensed'><tbody>
          <tr><td width=70>Judul</td>     <td colspan='2'> : <input type=text name='judul' size=60></td></tr>
          <tr><td>Kategori</td>  <td colspan='2'> : 
          <select name='kategori'>
            <option value=0 selected>- Pilih Kategori -</option>";
            $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
            }
    echo "</select></td></tr>
          
          <tr><td >Isi Berita</td>  <td colspan='2'> <textarea name='isi_berita' class='ca'  style='width: 900px; height: 350px;'></textarea></td></tr>
          <tr><td>Gambar</td>      <td> :  <input  name='fupload'  type='file' id='id-input-file-3' />
                                          Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td><td width='680px'></td></tr>";

    $tag = mysql_query("SELECT * FROM tag ORDER BY tag_seo");
    echo "<tr><td>Tag (Label)</td><td colspan='2'> ";
    while ($t=mysql_fetch_array($tag)){
      echo "
	 <input name='tag_seo[]' type='checkbox' value='$t[tag_seo]'/>
<span class='lbl'> $t[nama_tag]</span>

	  ";
    }
    
    echo "</td></tr>
          <tr><td colspan=2><input class='btn btn-primary'  type=submit value=Simpan>
                            <input class='btn btn-primary' type=button value=Batal onclick=self.history.back()></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "editberita":
    if ($_SESSION[leveluser]=='admin'){
      $edit = mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
    }
    else{
      $edit = mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id]' AND username='$_SESSION[namauser]'");
    }

    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Berita</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?page=berita&act=update>
          <input type=hidden name=id value=$r[id_berita]>
          <table class='table table-hover table-condensed'><tbody>
          <tr><td width=70>Judul</td>     <td colspan=2> : <input type=text name=\"judul\" size=60 value=\"$r[judul]\"></td></tr>
          <tr><td>Kategori</td>  <td colspan=2> : <select name='kategori'>";
 
          $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
          if ($r[id_kategori]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[id_kategori]==$w[id_kategori]){
              echo "<option value=$w[id_kategori] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[id_kategori]>$w[nama_kategori]</option>";
            }
          }

    echo "</select></td></tr>";

   
      echo "<tr><td>Isi Berita</td>   <td colspan=2> <textarea id='loko' name='isi_berita' style='width: 800px; height: 350px;'>$r[isi_berita]</textarea></td></tr>
          <tr><td>Gambar</td>       <td colspan=2> :  ";
          if ($r[gambar]!=''){
              echo "<img src='../foto_berita/small_$r[gambar]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Gbr</td>    <td> : <input type=file name='fupload' size=30 id='id-input-file-3'> *)Apabila gambar tidak diubah, dikosongkan saja.</td><td width='680px'></td></tr>";

    $d = GetCheckboxes('tag', 'tag_seo', 'nama_tag', $r['tag']);


    echo "<tr><td>Tag (Label)</td><td colspan=2> $d </td></tr>";
 
    echo  "<tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
         </tbody></table></form>";
    break;  
}


?>
