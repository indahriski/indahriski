<html>
<body>
<center>
<h2> Data Karyawan </h2>
<table border="1">
<th> No </th>
<th> ID Karyawan </th>
<th> Nama Karyawan </th>
<th> Alamat Karyawan </th>
<th> Jenis Kelamin </th>
<th> Nomor Telepon </th>

<?php
include "../../koneksi.php";
$tampil="select * from karyawan";
$hasil=mysql_query($tampil);
$no=1+$posisi;
while($row=mysql_fetch_array($hasil)) {
echo"<tr><td>$no</td>";
echo"<td>$row[id_karyawan]</td>";
echo"<td>$row[nama_karyawan]</td>";
echo"<td>$row[alamat_karyawan]</td>";
echo"<td>$row[jkel_karyawan]</td>";
echo"<td>$row[tlp_karyawan]</td>";
$no++;
}
?>
</table>


<?php
	echo "<a href='tampil.php'><b><u>Kembali</u></b></a>";  // kembali
	?>
	
</center>
</body>
</html>