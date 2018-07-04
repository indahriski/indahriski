<?php
session_start();
include "../../koneksi.php";
$edit=$_GET['id'];
$query=mysql_query("select * from transaksi where id_transaksi='$edit'");
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
    <li><a href="../karyawan/tampil.php"> Karyawan</a></li>
    <li><a href="../../logout.php"> Logout</a></li></aside>
   		</ul>
		</nav>
        
<section class="courses">
<article>
<br>

<center>
<br><b><font size="+2">INSERT DATA TRANSAKSI</font></b> 
<br /><br />

<form method="post" action="proses_update.php">
<table>
<tr>
<td> ID Transaksi </td>
<td> <input type="text" name="id_transaksi" value="<?php echo $fr[id_transaksi] ?>" style="background-color:#FFFF99" readonly="readonly"/></td></tr>
<tr>
<td> Tanggal Transaksi </td>
<td> <input type="text" name="tgl_transaksi" value="<?php echo $fr[tgl_transaksi]?>" /></td></tr>
<tr>
<td> Nama Obat </td>
<td> <input type="text" name="nama_obat" value="<?php echo $fr[nama_obat]?>" /></td></tr>
<tr>
<td> Jumlah Beli </td>
<td> <input type="text" name="jumlah_beli" value="<?php echo $fr[jumlah_beli]?>" /></td></tr>
<tr>
<td> Harga Satuan </td>
<td> <input type="text" name="harga_satuan" value="<?php echo $fr[harga_satuan]?>" /></td></tr>
<tr>
<td> Total Harga </td>
<td> <input type="text" name="total_harga" value="<?php echo $fr[total_harga]?>" /></td></tr>
<tr>
<td> ID Karyawan </td>
<td> <input type="text" name="id_karyawan" value="<?php echo $fr[id_karyawan]?>" /></td></tr>

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