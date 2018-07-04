<?php
include "../../koneksi.php";
mysql_query("delete from pembeli where no_pembeli ='$_GET[id]'");

header("location:tampil.php");
?>