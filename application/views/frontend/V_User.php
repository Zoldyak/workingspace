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
          <button data-toggle="modal" data-target="#comment" type="button" class="btn btn-danger btn-lg btn-outline-danger btnku " style=""><i class="fa fa-comments" ></i> Comments </button>
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
      <div id="comment" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">

             <div class="modal-header" style="  background: #ff000a !important; ">
                   <!-- <button type="button" class="close" data-dismiss="modal" >X</button> -->
                   <h4 class="modal-title" id="myModalLabel" style="color: #fff !important;"><i class="fa fa-comments" ></i>&nbspForm Comments</h4>
               </div>

               <div class="modal-body">
                 <?php echo form_open_multipart('User/CreateComment') ?>
                 <!-- <form action="p_save.php" name="modal_popup" enctype="multipart/form-data" method="POST"> -->
                       <div class="form-group" style="padding-bottom: 20px;">
                         <label for="alamat">Tanggapan tentang Coworking Space</label>
                          <textarea name="komen"  rows="8" class="form-control" placeholder="Masukkan" required/></textarea>
                       </div>

                     <div class="modal-footer">
                         <button class="btn btn-danger btn-outline-danger btnku" type="submit" id="submitform">
                             Simpan
                         </button>

                         <button type="reset" class="btn btn-default"  data-dismiss="modal" aria-hidden="true">
                           Cancel
                         </button>
                     </div>

                     </form>



                   </div>


               </div>
           </div>
        </div>
    </div>
  </div>
</section>
