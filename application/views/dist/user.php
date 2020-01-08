<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data User</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List data User</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Email</th>
                            <th>Nama </th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Tanggal Daftar</th>
                            <!-- <th>Status</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=0;
                           foreach ($datauser as $rowuser):
                             $no++ ?>
                            <tr>
                              <td>
                              <?php echo $no?>
                              </td>
                              <td><?php echo $rowuser['email']?></td>
                              <td><?php echo $rowuser['nama_lengkap']?></td>
                              <td><?php echo $rowuser['no_hp']?></td>
                              <td><?php echo $rowuser['alamat']?></td>
                              <td>
                                <img alt="image" src="<?php echo base_url();?>assets/frontend/img/user/<?php echo $rowuser['foto'] ?>" class="rounded-circle" width="35" data-toggle="tooltip" title="<?php echo $rowuser['nama_lengkap']?>">
                              </td>
                              <td><?php echo $rowuser['create_on']?></td>
                              <!-- <td><div class="badge badge-success">Completed</div></td>
                              <td><a href="#" class="btn btn-secondary">Detail</a></td> -->
                            </tr>
                          <?php endforeach; ?>

                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>
