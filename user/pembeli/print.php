<html>
<body>
<center>
<h2> Data Pembeli </h2>
<table border="1">
<th> No </th>
<th> ID Pembeli </th>
<th> Nama Pembeli </th>
<th> Alamat Pembeli </th>
<th> Umur Pembeli </th>
<th> Nomor Telepon </th>

<?php
include "../../koneksi.php";
$tampil="select * from pembeli";
$hasil=mysql_query($tampil);
$no=1+$posisi;
while($row=mysql_fetch_array($hasil)) {
echo"<tr><td>$no</td>";
echo"<td>$row[no_pembeli]</td>";
echo"<td>$row[nama_pembeli]</td>";
echo"<td>$row[alamat_pembeli]</td>";
echo"<td>$row[umur_pembeli]</td>";
echo"<td>$row[tlp_pembeli]</td>";
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