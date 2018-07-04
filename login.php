<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
session_start();
include "koneksi.php";
if($_SESSION['username']!="") { ?>
<script>alert("Anda Akan Dilogout");</script>
<script>window.location="logout.php";</script>
<?php } ?>

<html>
<head>
<title> LOGIN </title>
<body>
<center><br><br><br><br>

<form method="post" action="proses_login.php">
<h2> Login A. Tambah Loro </h2>
<tr>
<table align="center">
<td rowspan="3"> <img src="gambar/login.jpg"  width="80" height="80"/></td>

<tr>
<td><font size="+1"> Masukkan Username </td></font>
<td> : <input type="text" name="username" required placeholder="Masukkan Username" size="20"/></td></tr>
<tr>
<td><font size="+1"> Masukkan Password </td></font>
<td> : <input type="password" name="password" required placeholder="Masukkan Password" size="20"/> </td></tr>
<tr>
<td><td><img src="captcha.php"/> </td>
<td> : <input type="text"  placeholder="Masukkan Captcha" name="kode" required/></td></td></tr>
<tr><tr><tr>
<td> <td> <input type="submit" value="Submit"> <input type="reset" value="Reset"> </td></td></tr></tr></tr>
</table>
</form>
</center>
</body>
</head>
</html>
