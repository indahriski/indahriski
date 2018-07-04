<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
session_start();
include "koneksi.php";
if($_SESSION['hak_akses'] == "user") { ?>
<script>alert("Anda Akan Dilogout");</script>
<script>window.location="logout.php";</script>
<?php }else{ ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<title> Admin </title>
<body>
<center>
<h2> Halaman Admin </h2> </div>
</center>


<div class="wrapper">
		<nav>
		<ul>
	<li><a href="admin/obat/tampil.php"> Obat </a></li>
    <li><a href="admin/pembeli/tampil.php"> Pembeli </a></li>
    <li><a href="admin/karyawan/tampil.php"> Karyawan</a></li>
    <li><a href="admin/transaksi/tampil.php"> Transaksi</a></li>
    <li><a href="logout.php"> Logout</a></li></aside>
   		</ul>
		</nav>
        		
<section class="courses">
<br>
<font size="+3"><center>Selamat Datang <?php echo $_SESSION['hak_akses'] ?> </center></font>
</section>
<aside>
            
<h3><font size="+2"><center>Selamat Datang di "Apotek Tambah Loro"</center></font></h3>
					
				
				
				<center><img src="gambar/login.jpg" width="200" height="200"></center>
                </aside>
			
			<footer><center>
				&copy; 2017 UAS Bahasa Pemrograman 3
			</footer></center>
		</div><!-- .wrapper -->


    <?php
		}
	?>
</body>
</html>
