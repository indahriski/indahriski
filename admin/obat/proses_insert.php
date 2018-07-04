<?php
session_start();
include "../../koneksi.php";
mysql_query("insert into obat values ('$_POST[id_obat]',
								'$_POST[nama_obat]',
								'$_POST[jenis_obat]',
								'$_POST[tgl_kadaluarsa]',
								'$_POST[stok_obat]',
								'$_POST[harga_obat]')") or die ('insert gagal'); ?>
<script>window:location="tampil.php";</script>