 <?php
 include("koneksi.php"); 
 if(isset($_POST['but_upload'])){
 $maxsize = 5242880; // 5MB
 $id_prodi = $_POST['id_prodi'];
 $judul = $_POST['judul'];
 $name = $_FILES['file']['name'];
 $target_dir = "tugas/";
 $target_file = $target_dir . $_FILES["file"]["name"];
 // Select file type
 $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Valid file extensions
 $extensions_arr = array("pdf");
 // Check extension
 if( in_array($videoFileType,$extensions_arr) ){
 // Check file size
 if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
 echo "<script>window.alert('File too large. File must be less than 5MB');</script>";
 }else{
 // Upload
 if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
 // Insert record
 $query = "INSERT INTO tugas_akhir(nama,lokasi,id_prodi) VALUES('".$judul."','".$target_file."','".$id_prodi."')";
 mysqli_query($koneksi,$query);
 echo "<script>window.alert('Upload successfully.') ;window.location.href = 'prodi?p=f_ak';</script>";
 }
 }
 }else{
 echo "<script>window.alert('Invalid file extension.');</script>";
 }
 } 
 ?>
 <form method="post" action="" enctype='multipart/form-data'>
                <div class="card-style mb-30">
                  <h6 class="mb-25">Form Unggah Tugas Akhir</h6>
                  <div class="input-style-1">
                    <label>Judul Tugas Akhir</label>
                    <input type="text" name="id_prodi" value="<?php echo $_SESSION['id_prodi']; ?>" name="id_prodi" hidden />
                    <input type="text" name="judul" placeholder="Judul Tugas Akhir" />
                  </div>
                 <div class="input-style-1">
                    <label>File Berkas</label>
                    <input type="file" name="file" placeholder="Judul" />
                  </div>
                  <!-- end input -->
                  <div class="col-12">
                       <input type="submit" value="Unggah" name="but_upload" class="main-btn primary-btn btn-hover">
                    </div>
                </div>
              </form>