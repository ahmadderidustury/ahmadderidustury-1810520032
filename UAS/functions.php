<?php 
$conn = mysqli_connect("localhost", "root", "", "uas");

function query($pndftar){

	global $conn;

	$masukdbms= mysqli_query($conn, $pndftar);
	$wadah=[];
	while ( $data = mysqli_fetch_assoc($masukdbms)) {

		$wadah[] = $data;	
	}


	return $wadah;



}

function tambah($databaru){

	global $conn;

	$nik = ($databaru["NIK"]);
	$nama = ($databaru["Nama"]);
	$tgllahir = ($databaru["tgl_lahir"]);
	$alamat = ($databaru["alamat"]);
	$jeniskelamin = ($databaru["jenis_kelamin"]);

	$query = "INSERT INTO pendaftaran VALUES
	('', '$nik', '$nama','$tgllahir', '$alamat', '$jeniskelamin')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function edit($data){
	global $conn;
	$id = ($data["id"]);
	$nik = ($data["NIK"]);
	$nama = ($data["Nama"]);
	$tgllahir = ($data["tgl_lahir"]);
	$alamat = ($data["alamat"]);
	$jeniskelamin = ($data["jenis_kelamin"]);

	$query = "UPDATE pendaftaran SET
	NIK = '$nik',
	Nama = '$nama',
	tgl_lahir = '$tgllahir',
	alamat = '$alamat',
	jenis_kelamin = '$jeniskelamin'
	WHERE id = $id";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function tambahvaksin($databaru){

	global $conn;

	$kode = ($databaru["kode"]);
	$jenisvaksin = ($databaru["Jenis_Vaksin"]);
	$nama = ($databaru["nama"]);

	$query = "INSERT INTO jenis_vaksin VALUES
	('', '$kode', '$jenisvaksin','$nama')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM pendaftaran WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function registrasi($data){

	global $conn;
	$user = $data ["user"];
	$paswd = mysqli_real_escape_string($conn, $data ["password"]);
	$paswd2 = mysqli_real_escape_string($conn, $data ["password2"]);

	$cek = mysqli_query($conn, "SELECT user FROM admin WHERE user = '$user'");

	if (mysqli_fetch_assoc($cek)) {
		echo "<script>
		alert('Admin Sudah Didaftarkan');
		</script>";

		return false;
	}

	if ($paswd !== $paswd2) {
		echo "

		<script>
		alert('Konfirmasi password salah');
		</script>";

		return false;
	}

	$password = password_hash($paswd, PASSWORD_DEFAULT);

	$masukan = "INSERT INTO admin VALUES
	('', '$user', '$password')";

	mysqli_query($conn, $masukan);

	return mysqli_affected_rows($conn);


}

?>