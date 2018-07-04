<?php
include "../../koneksi.php";
mysql_query("delete from karyawan where id_karyawan ='$_GET[id]'");

header("location:tampil.php");
?>