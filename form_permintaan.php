 <?php
 include("koneksi.php"); 
 if(isset($_POST['but_upload'])){
 $isi = $_POST['isi'];
$tujuan = $_POST['tujuan'];
$asal = $_POST['asal'];
// menginput data ke database
mysqli_query($koneksi,"insert into permintaan values('','$isi','$tujuan','$asal')");
 echo "<script>window.alert('Successfully.');</script>";
 }
 ?>
 <form method="post" action="" enctype='multipart/form-data'>
                <div class="card-style mb-30">
                  <h6 class="mb-25">Ajukan Permintaan</h6>
                  <input type="email" name="asal" value="<?php echo $_SESSION['email']; ?>" hidden>
                  <div class="col-xxl-4">
                      <div class="select-style-1">
                        <label>Kepada</label>
                        <div class="select-position">
                          <select class="light-bg" name="tujuan">
                            <option value="mahasiswa">Kemahasiswaan</option>
                             <?php
                    include "koneksi.php";
                    $sql="select * from prodi";
                    $hasil=mysqli_query($koneksi,$sql);
                    $no=0;
                    while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                   ?>
                    <option value="<?php echo $data['id_prodi'];?>">Prodi | <?php echo $data['nama_prodi'];?></option>
                  <?php 
                  }
                  ?>
                          </select>
                        </div>
                      </div>
                    </div>
                 <div class="input-style-1">
                    <label>Isi Permintaan</label>
                   <textarea placeholder="Deskripsikan Permintaan yang akan diajukan terhadap pihak tertuju" name="isi" rows="4"></textarea>
                  </div>
                  <!-- end input -->
                  <div class="col-12">
                       <input type="submit" value="Kirim" name="but_upload" class="main-btn primary-btn btn-hover">
                    </div>
                </div>
              </form>