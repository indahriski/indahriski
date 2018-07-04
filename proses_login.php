<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

if(empty($username) || empty($password)) {
echo"Please fill out this field";
}
else {
$query=mysql_query("select * from login where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$ambil=mysql_fetch_array($query);

if($cek==1) {
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['hak_akses']=$ambil['hak_akses'];

if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == ""){?>
			<script>alert("KODE CAPTHA SALAH!!");</script>
    		<script>window.location="login.php";</script><?php
}

if($_SESSION['hak_akses']=="admin") {
header('location:admin.php');
}
if($_SESSION['hak_akses']=="user") {
header('location:user.php');
}
else {
echo"anda harus login";
}
}
}
?>