<?php
session_start();
include "../../koneksi.php";
mysql_query("update obat set id_obat='$_POST[id_obat]',
								nama_obat='$_POST[nama_obat]',
								jenis_obat='$_POST[jenis_obat]',
								tgl_kadaluarsa='$_POST[tgl_kadaluarsa]',
								stok_obat='$_POST[stok_obat]',
								harga_obat='$_POST[harga_obat]' where id_obat='$_POST[id_obat]'") or die (mysql_error()); ?>
<script>window:location="tampil.php";</script>