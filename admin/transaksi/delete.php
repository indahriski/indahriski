<?php
include "../../koneksi.php";
mysql_query("delete from transaksi where id_transaksi ='$_GET[id]'");

header("location:tampil.php");
?>