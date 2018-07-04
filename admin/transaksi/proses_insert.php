<?php
session_start();
include "../../koneksi.php";
ob_start();
date_default_timezone_set("asia/jakarta");
$tgl_sekarang = date("Y-m-d");

mysql_query("insert into transaksi values ('$_POST[id_transaksi]',
								'$_POST[tgl_transaksi]',
								'$_POST[nama_obat]',
								'$_POST[jumlah_beli]',
								'$_POST[harga_satuan]',
								'$_POST[total_harga]',
								'$_POST[id_karyawan]')") or die ('insert gagal'); ?>
<script>window:location="tampil.php";</script>