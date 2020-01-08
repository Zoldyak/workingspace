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
                    <h4>List data Booking</h4>
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
                            <th>Waktu Pemakaian</th>
                            <th>Keperluan</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Petugas</th>
                            <!-- <th>Status</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=0;
                           foreach ($databooking as $rowbooking):
                             $no++ ?>
                            <tr>
                              <td>
                              <?php echo $no?>
                              </td>
                              <td><?php echo $rowbooking['email']?></td>
                              <td><?php echo $rowbooking['nama_lengkap']?></td>
                              <td><?php echo $rowbooking['no_hp']?></td>
                              <td><?php echo $rowbooking['tanggal_pakai']." ".$rowbooking['waktu_awal']."-".$rowbooking['waktu_akhir']?></td>
                              <td><?php echo $rowbooking['keperluan']?></td>
                              <td><?php echo $rowbooking['kategori']."(".$rowbooking['jumlah_peserta']." Orang )"?></td>
                              <?php if ($rowbooking['statusbooking']=='Setujui') {?>
                              <td>
                                <a class="badge badge-success" href="<?php echo base_url(); ?>Administrator/Booking/Edit/<?php echo $rowbooking['id_booking']?>"><?php echo $rowbooking['statusbooking']?></a>

                              </td>
                            <?php } elseif ($rowbooking['statusbooking']=='Belum di setujui (Proses)') { ?>
                              <td>
                                <a class="badge badge-warning" href="<?php echo base_url(); ?>Administrator/Booking/Edit/<?php echo $rowbooking['id_booking']?>"><?php echo $rowbooking['statusbooking']?></a>

                              </td>
                            <?php } elseif ($rowbooking['statusbooking']=='Tidak Disetujui') {?>
                              <td>
                                <a class="badge badge-danger" href="<?php echo base_url(); ?>Administrator/Booking/Edit/<?php echo $rowbooking['id_booking']?>"><?php echo $rowbooking['statusbooking']?></a>

                              </td>
                            <?php } ?>
                             <td><?php echo $rowbooking['petugas']?></td>

                              <!-- <td><div class="badge badge-success">Completed</div></td>
                              <td><a href="#" class="btn btn-secondary">Detail</a></td> -->
                            </tr>
                          <?php endforeach; ?>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div id="view_modal">

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- <script>
        $('#button_status').on('click',function() {
          let value_book=$(this).attr("data-booking");
          $.ajax({
            type: "POST",
            url: "<?php echo site_url('Administrator/Booking/ajax_modal');?>",
            data: {value_book},
            success: function(res) {
                $("#view_modal").html(res);
            }
          })
        })
      </script> -->
<?php $this->load->view('dist/_partials/footer'); ?>
