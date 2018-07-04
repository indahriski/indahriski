<?php
session_start();
include "../../koneksi.php";
mysql_query("insert into pembeli values ('$_POST[no_pembeli]',
								'$_POST[nama_pembeli]',
								'$_POST[alamat_pembeli]',
								'$_POST[umur_pembeli]',
								'$_POST[tlp_pembeli]')") or die ('insert gagal'); ?>
<script>window:location="tampil.php";</script>