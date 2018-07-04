<?php
session_start();
include"../../koneksi.php";
ob_start();
?>
<html>
<link rel="stylesheet" type="text/css" href="../../css.css">
<body>
<center>
<h2><b> Apotek Tambah Loro </b></h2>
</center>

<div class="wrapper">
		<nav>
		<ul>
	<li><a href="../../user.php"> Halaman Utama </a></li>
    <li><a href="../obat/tampil.php"> Obat </a></li>
    <li><a href="../karyawan/tampil.php"> Karyawan</a></li>
    <li><a href="../transaksi/tampil.php"> Transaksi</a></li>
    <li><a href="../../logout.php"> Logout</a></li></aside>
   		</ul>
		</nav>
        
<section class="courses">
<article>
<br>
<center>
<br><br><br>
<font size="+2"><b>HASIL PENCARIAN ADALAH : </b></font></b> <br> <br>

<table border="1">
<th> No </th>
<th> No Pembeli </th>
<th> Nama Pembeli </th>
<th> Alamat Pembeli </th>
<th> Umur Pembeli </th>
<th> Nomor Telepon </th>
</center>

<?php
include "../../koneksi.php";
$batas=5;
$halaman=$_GET['halaman'];
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi=($halaman-1)*$batas;
}
if ( ! $_GET['input'] )
	  { $search = $_POST['pilihan']; }
      else
	  { $search = $_GET['input']; }
	  if ( ! $_GET['kombo'] )
	  { $skripsi = $_POST['pilih']; }
      else
	  { $skripsi = $_GET['kombo'];}
	  
$tampil="select * from pembeli where $skripsi like '%$search%' order by no_pembeli limit $posisi,$batas";
$hasil=mysql_query($tampil);
$no=1+$posisi;
while($row=mysql_fetch_array($hasil)){
echo"<tr><td>$no</td>";
echo"<td>$row[no_pembeli]</td>";
echo"<td>$row[nama_pembeli]</td>";
echo"<td>$row[alamat_pembeli]</td>";
echo"<td>$row[umur_pembeli]</td>";
echo"<td>$row[tlp_pembeli]</td>";

$no++;
}
echo "</table>";
?>
<br>
<?php
echo "halaman ";
if ( ! $_GET['input'] )
	  { $search = $_POST['pilihan']; }
      else
	  { $search = $_GET['input']; }
	  if ( ! $_GET['kombo'] )
	  { $skripsi = $_POST['pilih']; }
      else
	  { $skripsi = $_GET['kombo'];}
$tampil2="select * from pembeli where $skripsi like '%$search%' order by no_pembeli limit $posisi,$batas";
$hasil2=mysql_query($tampil);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if($i!=$halaman)
{
	echo "<a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a>";
}else{
	echo "<b>$i</b>|";
}
echo "<p>TOTAL DATA : <b> $jmldata</b> DATA </p>";

?>
<?php
if ($_SESSION['hak_akses'] == "user") {
	echo "<a href='tampil.php' style='text-decoration:none; '><b><u>Kembali</u></b></a>"; }
	?>

</table>
</center>
</article>    
				  
	</section>
    <aside>
    <section class="contact-details">
<h3><font size="+2"><center>Selamat Datang di "Apotek Tambah Loro"</center></font></h3>
	</section>
	<section class="popular-recipes">
<center><img src="../../gambar/login.jpg" width="200" height="200"></center>
	</section>
	</aside>
			
<footer><center>
&copy; 2017 UAS Bahasa Pemrograman 3
</center></footer>
</div><!-- .wrapper -->

