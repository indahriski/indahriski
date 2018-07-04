<?php
//fungsi header dengan mengirimkan row data excel
header ("Content-type: application/vnd-ms-excel");
//mendefinisikan nama file ekspor 
header ("Content-Disposition: attachment; filename=FileData.xls");
include 'print.php';
?>