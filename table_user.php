<h4 class="mb-10">Data Users &nbsp;| <span class='status-btn active-btn'><a href="admin?p=f_us"><i class="lni lni-circle-plus"></i> USER</a></span> </h4>
  <div class="tables-wrapper">
              <div class="col-lg-12">
                <div class="card-style mb-10">
                 
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><h6>No</h6></th>
                          <th><h6>Email</h6></th>
                          <th><h6>Level</h6></th>
                          <th><h6>Aksi</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                          <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from users left join prodi on users.id_prodi = prodi.id_prodi order by level");
    while($d = mysqli_fetch_array($data)){
      ?>
                        <tr>
                          <td><?php echo $no++;?>
                          </td>
                          <td>
                            <p><?php echo $d['email'];?></p>
                          </td>
                          <td><?php if ($d['level']==1)
                                        {echo "<span class='status-btn active-btn'>Admin</span>";}
                                        else if ($d['level']==2)
                                        {echo "<span class='status-btn success-btn'>Prodi "; echo "| <small>".$d['nama_prodi']."</small></span>";}
                                        else if ($d['level']==3)
                                        {echo "<span class='status-btn info-btn'>Stakeholder</span>";}
                                        else 
                                        {echo "<span class='status-btn close-btn'>Kemahasiswaan</span>";}?></td>
                          <td><a href="hapus_user.php?id_user=<?php echo $d['id_user']; ?>"><i class="lni lni-trash-can"></i></a></td>
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