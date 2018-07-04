<?php
session_start();
include "../../koneksi.php";
ob_start();
$sql=mysql_query("select MAX(id_obat) from obat");
$data=mysql_fetch_array($sql);
$MaxID=$data[0];
$no_id=(int) substr($MaxID,2,3);
$no_id++;
$new_id="B".sprintf("%03s","$no_id");
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
	<li><a href="../../admin.php"> Halaman Utama </a></li>
    <li><a href="../pembeli/tampil.php"> Pembeli </a></li>
    <li><a href="../karyawan/tampil.php"> Karyawan</a></li>
    <li><a href="../transaksi/tampil.php"> Transaksi</a></li>
    <li><a href="../../logout.php"> Logout</a></li></aside>
   		</ul>
		</nav>
<section class="courses">
<article>
<br>

<center>
<br><b><font size="+2">INSERT DATA OBAT</font></b> 
<br /><br />

<form method="post" action="proses_insert.php">
<table>
<tr>
<td> ID Obat </td>
<td> <input type="text" name="id_obat"  value="<?php echo $new_id ?>"readonly style="background-color:#FFFF99"></td></tr>
<tr>
<td> Nama Obat </td>
<td> <input type="text" name="nama_obat" required /></td></tr>
<tr>
<td> Jenis Obat </td>
<td> <input type="text" name="jenis_obat" required /></td></tr>
<tr>
<td> Tanggal Kadaluarsa </td>
<td> <input type="date" name="tgl_kadaluarsa" required /></td></tr>
<tr>
<td> Stok Obat </td>
<td> <input type="text" name="stok_obat" required /></td></tr>
<tr>
<td> Harga Obat </td>
<td> <input type="text" name="harga_obat" required /></td></tr>

<tr>
<td><td> <input type="submit" value="Save" /> <input type="reset" value="Reset" /></td></td></tr>
</table>
</form>

<?php
if ($_SESSION['hak_akses'] == "admin") {
	echo "<a href='tampil.php' style='text-decoration:none; '><b><u>Kembali</u></b></a>"; }
	?>

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