<?php 
session_start();

if (!isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}
require 'functions.php';

if (isset($_POST["bsimpan"])) {
	
	if (tambah($_POST)>0) {
		echo "
		<script>
		alert('Data Berhasil DiTambah')
		document.location.href='datapendaftar.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Data Gagal DiTambah')
		document.location.href='datapendaftar.php';
		</script>
		";
	}
}


?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>INDONESIA SEHAT</title>
	<link rel="icon" href="./assets/images/indonesia1.jpg">
</head>
<body style="background:url(./assets/images/virus1.jpg)no-repeat; background-size: cover; height: 100vh;">
	<nav class="navbar navbar-light bg-danger">
		<form class="container-fluid justify-content-start">
			<svg type="button" xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="white" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
				<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
				<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
			</svg>
			<a href="pendaftaran.php" class="btn btn-sm btn-danger me-2" type="button">Pendaftaran</a>
			<a href="datapendaftar.php" class="btn btn-sm btn-danger me-2" type="button">Tampilkan Data</a>
			<a href="vaksin.php" class="btn btn-sm btn-danger me-2" type="button">Data Vaksin</a>
			<a href="register.php" class="btn btn-sm btn-danger me-2" type="button">Tambahkan Admin</a>
			<a href="keluar.php" class="btn btn-sm btn-danger me-2" type="button">Keluar</a>
			
		</form>
	</nav>
	<div class="container">
		
		<h1 class="text-center text-white">INDONESIA SEHAT</h1>
		<h2 class="text-center text-white">Pendaftaran Penerima Vaksin COVID-19</h2>

		


		<div class="card mt-3">
			<div class="card-header bg-danger text-white">
				Form Input Data Penerima Vaksin COVID-19
			</div>
			<div class="card-body">
				<form method="post" action="">
					<div class="form-group">
						<label>NIK</label>
						<input type="text" name="NIK" class="form-control" placeholder="Masukkan NIK Anda!" required>
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="Nama" class="form-control" placeholder="Masukkan Nama Anda!" required>
					</div>
					<div class="form-group">
						<label>Tgl Lahir</label>
						<input type="text" name="tgl_lahir" class="form-control" placeholder="tgl bulan tahun!" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda!" required>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin">
							<option></option>
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
						</select>
					</div>

					<button type="submit" class="btn btn-primary mt-3" name="bsimpan">Simpan</button>
					<button type="reset" class="btn btn-danger mt-3" name="bbatal">Batal</button>
				</form>
			</div>
		</div>


	</div>

</div>	

<nav class="navbar fixed-bottom navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href=""><h6>Ahmad Deri Dustury - 1810520032</h6></a>
	</div>
</nav>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>