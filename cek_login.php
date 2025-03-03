<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi,"select * from users where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah email dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']== 1){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Admin";
		header("location:admin");

	// cek jika user login sebagai prodi
	}else if($data['level']=="2"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Prodi";
		$_SESSION['id_prodi'] = $data["id_prodi"];
		header("location:prodi");

	// cek jika user login sebagai stakeholder
	}else if($data['level']=="3"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Stakeholder";
		header("location:stakeholder");

	// cek jika user login sebagai kemahasiswaan
	}else if($data['level']=="4"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Kemahasiswaan";
		header("location:kemahasiswaan");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>