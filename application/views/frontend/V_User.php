<?php if ($this->session->userdata('user_role') == null) {
  redirect('/Home/','refresh');
}?>
<section class="loan-section">
  <div class="loan-warp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="shadow-lg p-1 mb-1 bg-white rounded">
            <img class="rounded" alt="100x100" src="<?php echo base_url();?>assets/frontend/img/user/<?php echo $data['foto'] ?>"
            data-holder-rendered="true">
          </div>

        </div>
        <div class="col-lg-6">
          <h2>Dashboard </h2>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item font-size-22" style="border: unset !important;"><i class="fa fa-user"> </i>&nbsp <?php echo $data['nama_lengkap'] ?></li>
            <!-- <li class="list-group-item" style="border: unset !important;"><p class="text-right">:</p></li>
            <li class="list-group-item" style="border: unset !important;">Chaca</li> -->
          </ul>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item font-size-22" style="border: unset !important;"><i class="fa fa-envelope"> &nbsp <?php echo $data['email'] ?></i></li>

          </ul>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item font-size-22" style="border: unset !important;"><i class="fa fa-phone-square"></i>&nbsp <?php echo $data['no_hp'] ?></li>
          </ul>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item font-size-22" style="border: unset !important;"><i class="fa fa-map-marker"></i>&nbsp <?php echo $data['alamat'] ?></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <br>
          <h3>Dashboard Booking </h3>
          <hr>
          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Email Pemesan</th>
                    <th>Tanggal Pakai</th>
                    <th>Waktu Pakai</th>
                    <th>Keperluan Pemakaian</th>
                    <th>Jumlah Peserta</th>
                    <th>Kategori</th>
                    <th>Statu</th>

                </tr>
            </thead>
            <tbody><?php foreach ($databooking as $rowbooking): ?>
              <tr>
                  <td><?php echo $rowbooking['email'] ?></td>
                  <td><?php echo $rowbooking['tanggal_pakai'] ?></td>
                  <td><?php echo $rowbooking['waktu_awal'] ?> - <?php echo $rowbooking['waktu_akhir'] ?></td>
                  <td><?php echo $rowbooking['keperluan'] ?></td>
                  <td><?php echo $rowbooking['jumlah_peserta'] ?></td>
                  <td><?php echo $rowbooking['kategori'] ?></td>
                  <td>
                    <?php if ($rowbooking['status']== 'Setujui') {
                      echo '<div class="badge badge-success text-wrap">'.$rowbooking['status'].'</div>';
                  }
                  else{
                      echo '<div class="badge badge-warning text-wrap">'.$rowbooking['status'].'</div>';
                  }
                 ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</section>
