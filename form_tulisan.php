 <?php
 include("koneksi.php"); 
 if(isset($_POST['but_upload'])){
 $maxsize = 5242880; // 5MB
 $judul = $_POST['judul'];
 $name = $_FILES['file']['name'];
 $target_dir = "tulisan/";
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
 $query = "INSERT INTO karya_tulisan(nama,lokasi) VALUES('".$judul."','".$target_file."')";
 mysqli_query($koneksi,$query);
 echo "<script>window.alert('Upload successfully.') ;window.location.href = 'kemahasiswaan?p=f_tul';</script>";
 }
 }
 }else{
 echo "<script>window.alert('Invalid file extension.');</script>";
 }
 } 
 ?>
 <form method="post" action="" enctype='multipart/form-data'>
                <div class="card-style mb-30">
                  <h6 class="mb-25">Form Unggah Karya Ilmiah - Tulisan</h6>
                  <div class="input-style-1">
                    <label>Judul Karya Ilmiah</label>
                    <input type="text" name="judul" placeholder="Judul Karya Ilmiah" />
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