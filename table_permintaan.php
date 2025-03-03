<div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Daftar Permintaan Stakeholder</h6>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>No</h6></th>
                          <th><h6>Isi</h6></th>
                          <th><h6>Proses</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <?php
                        include "koneksi.php";
                        if ($id_prodi != 0)
                                        {
$query = mysqli_query($koneksi,"SELECT * FROM permintaan where tujuan = '$id_prodi'");}
else {
  $query = mysqli_query($koneksi,"SELECT * FROM permintaan where tujuan = 'mahasiswa'");
}
$no = 1;
while($data = mysqli_fetch_array($query)){
?>
                        <tr>
                          <td><?php echo $no++;?>
                          </td>
                          <td class="min-width">
                            <p><a href="#0"><?php echo $data['isi'];?></a></p>
                          </td>
                          <td>
                            <div class="action">
                               <a href="mailer/proses?id_permintaan=<?php echo $data['id_permintaan'];?>"><i class="lni lni-telegram-original"></i>&nbsp; Kirim</a>
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