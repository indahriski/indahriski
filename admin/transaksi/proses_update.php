<?php
session_start();
include "../../koneksi.php";
mysql_query("update transaksi set id_transaksi='$_POST[id_transaksi]',
								tgl_transaksi='$_POST[tgl_transaksi]',
								nama_obat='$_POST[nama_obat]',
								jumlah_beli='$_POST[jumlah_beli]',
								harga_satuan='$_POST[harga_satuan]',
								total_harga='$_POST[total_harga]',
								id_karyawan='$_POST[id_karyawan]' where id_transaksi='$_POST[id_transaksi]'") or die (mysql_error()); ?>
<script>window:location="tampil.php";</script>