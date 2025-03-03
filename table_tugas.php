<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Tugas Akhir</h6>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>No</h6></th>
                          <th><h6>Program Studi</h6></th>
                          <th><h6>Judul TA</h6></th>
                          <th><h6>Aksi</h6></th>
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
                            <p><a href="#0"><?php echo $data['nama_prodi'];?></a></p>
                          </td>
                          <td class="min-width">
                            <p><a href="#0"><?php echo $data['nama'];?></a></p>
                          </td>
                          <td align="right">
                            <div class="action">
                                <a href="view_tugas?id_tugas=<?php echo $data['id_tugas'];?>"><i class="lni lni-download"></i></a>
                            </div>
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