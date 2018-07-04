<?php
session_start();
include "../../koneksi.php";
mysql_query("update pembeli set no_pembeli='$_POST[no_pembeli]',
								nama_pembeli='$_POST[nama_pembeli]',
								alamat_pembeli='$_POST[alamat_pembeli]',
								umur_pembeli='$_POST[umur_pembeli]',
								tlp_pembeli='$_POST[tlp_pembeli]' where no_pembeli='$_POST[no_pembeli]'") or die (mysql_error()); ?>
<script>window:location="tampil.php";</script>