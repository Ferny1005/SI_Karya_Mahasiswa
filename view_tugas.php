<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>View Data Karya Mahasiswa</title>
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 12px;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 }
</style>
</head>
<body>
<?php
$id_tugas    = mysqli_real_escape_string($koneksi,$_GET['id_tugas']);
$query = mysqli_query($koneksi,"SELECT * FROM tugas_akhir WHERE id_tugas='$id_tugas'");
$data  = mysqli_fetch_array($query);
?>
<h1>Data Karya Mahasiswa - Tugas Akhir</h1>
<hr>
<b>nama:</b> <?php echo $data['nama'];?> |
<hr>
<embed src="<?php echo $data['lokasi'];?>#toolbar=0" type="application/pdf" width="100%" height="800" ></embed>
</body>
</html>
