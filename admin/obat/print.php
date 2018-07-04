<html>
<body>
<center>
<h2> Data Obat </h2>
<table border="1">
<th> No </th>
<th> ID Obat </th>
<th> Nama Obat </th>
<th> Jenis Obat </th>
<th> Tanggal Kadaluarsa </th>
<th> Stok Obat </th>
<th> Harga Obat </th>

<?php
include "../../koneksi.php";
$tampil="select * from obat";
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