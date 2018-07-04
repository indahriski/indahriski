<?php
include "../../koneksi.php";
mysql_query("delete from obat where id_obat ='$_GET[id]'");

header("location:tampil.php");
?>