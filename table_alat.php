<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Karya Ilmiah - Alat</h6>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>No</h6></th>
                          <th><h6>Judul Berkas</h6></th>
                          <th><h6>Preview</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php
                        include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM karya_alat ORDER BY id_alat ASC");
$no = 1;
while($data = mysqli_fetch_array($query)){
?>
                        <tr>
                          <td><?php echo $no++;?>
                          </td>
                          <td class="min-width">
                            <p><?php echo $data['nama'];?></p>
                          </td>
                          <td>
                            <video src="<?php echo $data['lokasi'];?>" controls width="420px" height="300px" >
                          </td>
                        </tr>
                        <?php
}
?>
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
          </div>