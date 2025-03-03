 </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <?php
$data_tugas = mysqli_query($koneksi,"SELECT * FROM tugas_akhir");
$jumlah_tugas = mysqli_num_rows($data_tugas);
?>
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-6">
              <div class="icon-card mb-60">
                <div class="icon purple">
                  <i class="lni lni-files"></i>
                </div>
                <div class="content">
                  <h4 class="mb-30">Dokumen </h4>
                  <h3 class="text-bold mb-10">Tugas Akhir</h3>
                  <p><b><?php echo $jumlah_tugas; ?></b>
                    <span class="text-gray"> File</span>
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
          <?php
$data_tulisan = mysqli_query($koneksi,"SELECT * FROM karya_tulisan");
$jumlah_tulisan = mysqli_num_rows($data_tulisan);
?>
            <div class="col-xl-4 col-lg-6 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon success">
                  <i class="lni lni-empty-file"></i>
                </div>
                <div class="content">
                  <h4 class="mb-30">Dokumen - Tulisan</h4>
                  <h3 class="text-bold mb-10">Karya Ilmiah</h3>
                  <p><b><?php echo $jumlah_tulisan; ?></b>
                    <span class="text-gray"> File</span>
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
              <?php
$data_alat = mysqli_query($koneksi,"SELECT * FROM karya_alat");
$jumlah_alat = mysqli_num_rows($data_alat);
?>
            <div class="col-xl-4 col-lg-6 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon primary">
                  <i class="mdi mdi-movie-play"></i>
                </div>
                <div class="content">
                  <h4 class="mb-30">Video - Alat</h4>
                  <h3 class="text-bold mb-10">Karya Ilmiah</h3>
                  <p><b><?php echo $jumlah_alat; ?></b>
                    <span class="text-gray"> File</span>
                  </p>
                </div>
              </div>
  </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-6">
              <div class="icon-card mb-60">
               <table class="table">
                      <thead>
                        <tr>
                          <th><h6>No</h6></th>
                          <th><h6><center>Nama File</center></h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php
                        include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM tugas_akhir join prodi on tugas_akhir.id_prodi=prodi.id_prodi");
$no = 1;
while($data = mysqli_fetch_array($query)){
?>
                        <tr>
                          <td><?php echo $no++;?>
                          </td>
                          <td class="min-width">
                            <p><a href="view_tugas?id_tugas=<?php echo $data['id_tugas'];?>"><?php echo $data['nama'];?></a></p>
                          </td>
                        </tr>
                        <?php
}
?>
                      </tbody>
                    </table>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-4 col-lg-6 col-sm-6">
              <div class="icon-card mb-30">
                 <table class="table">
                      <thead>
                        <tr>
                          <th><h6>No</h6></th>
                          <th><h6><center>Nama File</center></h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php
                        include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM karya_tulisan");
$no = 1;
while($data = mysqli_fetch_array($query)){
?>
                        <tr>
                          <td><?php echo $no++;?>
                          </td>
                          <td class="min-width">
                            <p><a href="view_tulisan?id_tulisan=<?php echo $data['id_tulisan'];?>"><?php echo $data['nama'];?></a></p>
                          </td>
                        </tr>
                        <?php
}
?>
                      </tbody>
                    </table>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
          <div class="col-xl-4 col-lg-6 col-sm-6">
              <div class="icon-card mb-30">
                 <table class="table">
                      <thead>
                        <tr>
                          <th><h6><center>Video</center></h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php
                        include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM karya_alat");
while($data = mysqli_fetch_array($query)){
?>
                        <tr>
                          <td class="min-width"> <center> <video src="<?php echo $data['lokasi'];?>" controls width="200px" height="150px" ></center>
                          </td>
                        </tr>
                        <?php
}
?>
                      </tbody>
                    </table>
              </div>
                           