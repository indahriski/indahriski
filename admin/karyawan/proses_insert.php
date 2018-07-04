<?php
session_start();
include "../../koneksi.php";
mysql_query("insert into karyawan values ('$_POST[id_karyawan]',
								'$_POST[nama_karyawan]',
								'$_POST[alamat_karyawan]',
								'$_POST[jkel_karyawan]',
								'$_POST[tlp_karyawan]')") or die ('insert gagal'); ?>
<script>window:location="tampil.php";</script>