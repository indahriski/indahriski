<?php
session_start();
include "../../koneksi.php";
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

<a href='export.php'>| Export Data  | </a> 
<a href='proses_print.php'>| Print Data | </a>
<br><br> 

<form method="post" action="cari.php"> 
<select name="pilih"> <option value=""> Cari Berdasarkan </option> 
					<option value="id_obat"> ID Obat </option>
                    <option value="nama_obat"> Nama Obat </option>
                    </select>
<input type="text" name="pilihan">
<input type="submit" name="submit" value="Cari">
</form>

<center>
<br><b><font size="+2">DATA OBAT</font></b> 
<br><br>
<a href='insert.php'>| Tambah Data |</a><br><br>	


<table border="1">
<th> No </th>
<th> ID Obat </th>
<th> Nama Obat </th>
<th> Jenis Obat </th>
<th> Tanggal Kadaluarsa </th>
<th> Stok Obat </th>
<th> Harga Obat </th>
<th> Aksi </th>


<?php  // membuat batas data
include "../../koneksi.php";
$batas=5;
$halaman=$_GET['halaman'];
if(empty($halaman)) {
	$posisi=0;
	$halaman=1;
}
else {
$posisi=($halaman-1)*$batas;
}
$tampil="select * from obat order by id_obat limit $posisi,$batas";
$hasil=mysql_query($tampil);
$no=1+$posisi;
while($row=mysql_fetch_array($hasil)) {
echo"<tr><td>$no</td>";
echo"<td>$row[id_obat]</td>";
echo"<td>$row[nama_obat]</td>";
echo"<td>$row[jenis_obat]</td>";
echo"<td>$row[tgl_kadaluarsa]</td>";
echo"<td>$row[stok_obat]</td>";
echo"<td>$row[harga_obat]</td>";

echo"<td> <a href='update.php?id=$row[id_obat]'> Edit |
		<a href='delete.php?id=$row[id_obat]' onclick='return confirm(\"Anda Yakin?\")'> Hapus </a></td>";
$no++;
}
echo "</table>";
?>

<?php // membuat halaman
	$tampil2 = "SELECT * FROM obat";
	$query = mysql_query($tampil2);
	$jum = mysql_num_rows($query);
	$jmlhal = ceil($jum/$batas);

for ($i=1;$i<=$jmlhal;$i++)
	if ($i != $hal)
	{
		echo"<a href='$_SERVER[PHP_SELF]?halaman=$i'> $i </a> | ";	
	}
	else
	{
		echo"<b> $i </b> | ";	
	}
echo "<br><br> <font color='#000'>TOTAL DATA : <b> $jum </b> DATA </font><br><br>"; // membuat total data
?>
<?php
	echo "<a href='../../admin.php'><b><u>Kembali</u></b></a>";  // kembali
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
<center><img src="../../gambar/obat.jpg" width="200" height="200"></center>
	</section>
	</aside>
			
<footer><center>
&copy; 2017 UAS Bahasa Pemrograman 3
</center></footer>
</div><!-- .wrapper -->
