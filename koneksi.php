<?php 
$koneksi = mysqli_connect("localhost","root","","karya_mahasiswa");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
 if($_SESSION['level']=="Admin"){
       $admin = "style='display:inline;'";
       $user = "style='display:inline;'";
    }
    elseif($_SESSION['level']=="User"){
        $admin = "style='display:none;'";
        $user = "style='display:inline;'";
    }
    elseif($_SESSION['level']=="Guest"){
    $admin = "style='display:none;'";
    $user = "style='display:none;'";
    }
    else{
       header("location:../?pesan=gagal");
    }
?>