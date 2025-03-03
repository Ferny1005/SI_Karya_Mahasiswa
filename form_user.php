 <?php
 include("koneksi.php"); 
 if(isset($_POST['but_tamb'])){
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];
$id_prodi = $_POST['id_prodi'];
mysqli_query($koneksi,"insert into users values('','$email','$password','$level','$id_prodi')");
echo "<script>window.alert('Successfully Added.');window.location.href = 'admin?p=t_us';</script>";
 } 
 ?>
 <form method="post" action="" enctype='multipart/form-data'>
                <div class="card-style mb-10">
                  <h6 class="mb-25">Tambah User</h6>
                  <div class="input-style-1">
                    <label>Email / Username</label>
                    <input type="text" name="email" placeholder="Email" />
                  </div>
                  <div class="input-style-1">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" />
                  </div>
                   <div class="col-xxl-4">
                      <div class="select-style-1">
                        <label>Level</label>
                        <div class="select-position">
                          <select class="light-bg" name="level">
                            <option value="1">Admin</option>
                            <option value="2">Program Studi</option>
                            <option value="3">Stakeholder</option>
                            <option value="4">Kemahasiswaan</option>
                          </select>
                        </div>
                      </div>
                    </div>
                     <div class="col-xxl-4">
                      <div class="select-style-1">
                        <label>Program Studi</label>
                        <div class="select-position">
                          <select class="light-bg" name="id_prodi">
                            <option value="">---</option>
                            <?php
                    include "koneksi.php";
                    $sql="select * from prodi";
                    $hasil=mysqli_query($koneksi,$sql);
                    $no=0;
                    while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                   ?>
                    <option value="<?php echo $data['id_prodi'];?>"><?php echo $data['nama_prodi'];?></option>
                  <?php 
                  }
                  ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  <!-- end input -->
                  <div class="col-12">
                       <input type="submit" value="Simpan" name="but_tamb" class="main-btn primary-btn btn-hover">
                    </div>
                </div>
              </form>