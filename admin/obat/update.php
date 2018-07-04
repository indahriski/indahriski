<?php
session_start();
include "../../koneksi.php";
$edit=$_GET['id'];
$query=mysql_query("select * from obat where id_obat='$edit'");
$fr=mysql_fetch_array($query);
$cek=$fr['status'];
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
<br><b><font size="+2">UPDATE DATA OBAT</font></b> 
<br /><br />

<form method="post" action="proses_update.php">
<table>
<tr>
<td> ID Obat </td>
<td> <input type="text" name="id_obat" value="<?php echo $fr[id_obat] ?>" style="background-color:#FFFF99" readonly="readonly"/></td></tr>
<tr>
<td> Nama Obat </td>
<td> <input type="text" name="nama_obat" value="<?php echo $fr[nama_obat]?>" /></td></tr>
<tr>
<td> Jenis Obat </td>
<td> <input type="text" name="jenis_obat" value="<?php echo $fr[jenis_obat]?>" /></td></tr>
<tr>
<td> Tanggal Kadaluarsa </td>
<td> <input type="date" name="tgl_kadaluarsa" value="<?php echo $fr[tgl_kadaluarsa]?>" /></td></tr>
<tr>
<td> Stok Obat </td>
<td> <input type="text" name="stok_obat" value="<?php echo $fr[stok_obat]?>" /></td></tr>
<tr>
<td> Harga Obat </td>
<td> <input type="text" name="harga_obat" value="<?php echo $fr[harga_obat]?>" /></td></tr>

<tr>
<td> <td> <input type="submit" name="update" value="Update" /> </td></td></tr>
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