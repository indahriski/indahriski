<?php
session_start();
include "../../koneksi.php";
$edit=$_GET['id'];
$query=mysql_query("select * from karyawan where id_karyawan='$edit'");
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
    <li><a href="../obat/tampil.php"> Obat </a></li>
    <li><a href="../pembeli/tampil.php"> Pembeli</a></li>
    <li><a href="../transaksi/tampil.php"> Transaksi</a></li>
    <li><a href="../../logout.php"> Logout</a></li></aside>
   		</ul>
		</nav>
        
<section class="courses">
<article>
<br>

<center>
<br><b><font size="+2">UPDATE DATA KARYAWAN</font></b> 
<br /><br />

<form method="post" action="proses_update.php">
<table>
<tr>
<td> ID Karyawan </td>
<td> <input type="text" name="id_karyawan" value="<?php echo $fr[id_karyawan] ?>" style="background-color:#FFFF99" readonly="readonly"/></td></tr>
<tr>
<td> Nama Karyawan </td>
<td> <input type="text" name="nama_karyawan" value="<?php echo $fr[nama_karyawan]?>" /></td></tr>
<tr>
<td> Alamat Karyawan </td>
<td> <input type="text" name="alamat_karyawan" value="<?php echo $fr[alamat_karyawan]?>" /></td></tr>
<tr>
<td> Jenis Kelamin </td>
<td> <input type="text" name="jkel_karyawan" value="<?php echo $fr[jkel_karyawan]?>" /></td></tr>
<tr>
<td> Nomor Telepon </td>
<td> <input type="text" name="tlp_karyawan" value="<?php echo $fr[tlp_karyawan]?>" /></td></tr>

<tr>
<td> <td> <input type="submit" name="update" value="Update" /> </td></td></tr>
</table>
</form>

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