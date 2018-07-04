<?php
session_start();
include "../../koneksi.php";
mysql_query("update karyawan set id_karyawan='$_POST[id_karyawan]',
								nama_karyawan='$_POST[nama_karyawan]',
								alamat_karyawan='$_POST[alamat_karyawan]',
								jkel_karyawan='$_POST[jkel_karyawan]',
								tlp_karyawan='$_POST[tlp_karyawan]' where id_karyawan='$_POST[id_karyawan]'") or die (mysql_error()); ?>
<script>window:location="tampil.php";</script>