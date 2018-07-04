<html>
<body>
<center>
<h2> Data Transaksi </h2>

<table border="1">
<th> No </th>
<th> ID Transaksi </th>
<th> Tanggal Transaksi </th>
<th> Nama Obat </th>
<th> Jumlah Beli </th>
<th> Harga Satuan </th>
<th> Total_Harga </th>
<th> ID Karyawan </th>

<?php
include "../../koneksi.php";
$tampil="select * from transaksi";
$hasil=mysql_query($tampil);
$no=1+$posisi;
while($row=mysql_fetch_array($hasil)) {
echo"<tr><td>$no</td>";
echo"<td>$row[id_transaksi]</td>";
echo"<td>$row[tgl_transaksi]</td>";
echo"<td>$row[nama_obat]</td>";
echo"<td>$row[jumlah_beli]</td>";
echo"<td>$row[harga_satuan]</td>";
echo"<td>$row[total_harga]</td>";
echo"<td>$row[id_karyawan]</td>";
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