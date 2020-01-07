<section class="loan-section">
  <div class="loan-warp">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="font-size-26 text-monospace">List Booking</h2>
          <br>
          <div class="col-lg-4">
            <?php if ($this->session->userdata('user_role') == '2') {?>
            <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-lg btn-outline-danger btnku " style=""><i class="fa fa-address-card-o" ></i> Booking </button>
          <?php } else{?>
            <a href="#" class="btn btn-danger btn-lg btn-outline-danger btnku " data-toggle="modal" data-target="#login" class="login">Booking</a>
        <?php  } ?>
          </div>
           <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button> -->
          <div id="myModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">

                 <div class="modal-header" style="  background: #ff000a !important; ">
                       <!-- <button type="button" class="close" data-dismiss="modal" >X</button> -->
                       <h4 class="modal-title" id="myModalLabel" style="color: #fff !important;">Form Booking</h4>
                   </div>

                   <div class="modal-body">
                     <?php echo form_open_multipart('Booking/Create') ?>
                     <!-- <form action="p_save.php" name="modal_popup" enctype="multipart/form-data" method="POST"> -->

                           <div class="form-group" style="padding-bottom: 20px;">
                             <label for="Name">Nama Lengkap Pemesan</label>
                             <input type="text" name="nama"  class="form-control" placeholder="Nama lengkap" required value="<?php echo $this->session->userdata('user_nama') ?>" disabled/>
                           </div>
                           <div class="form-group form-check-inline" style="padding-bottom: 20px;">
                             <label for="Name">TanggaL Pakai</label>
                             <input type="date" name="tanggal"  class="form-control" placeholder="Nama lengkap" required onchange="getdate(this.value)"/>&nbsp        <label class="" id="pesandate">

                             </label>

                           </div>
                           <div class="form-group form-check-inline" style="padding-bottom: 20px;">
                             <label for="Name">Waktu Pakai</label>
                             <div class="input-group time" >
                               <input name="dari" id="timepicker2" class="form-control" placeholder="Dari"/><span class="input-group-append input-group-addon">&nbsp&nbsp&nbsp
                                 <input name="sampai" id="timepicker3" class="form-control" placeholder="sampai"/><span class="input-group-append input-group-addon">
                             </div>

                           </div>
                           <div class="form-group" style="padding-bottom: 20px;">
                             <label for="alamat">Keperluan Pemakaian</label>
                              <textarea name="keperluan"  class="form-control" placeholder="Masukkan" required/></textarea>
                           </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                             <label for="hobi">Jumlah Peserta</label>
                             <input type="Number" name="jumlah"  class="form-control" placeholder="Jumlah" required/>
                             <span>Max 20 Orang</span>
                           </div>
<!--
                           <div class="form-group" style="padding-bottom: 20px;">
                             <label for="tgl">Tanggal Lahir</label>
                              <input class="form-control" id="tgl" name="tgl" placeholder="MM/DD/YYY" type="text" required/>
                             </div> -->

                    <div class="form-group">
                                 <label for="exampleInputEmail1">Kategori</label> <br>
                                 <label class="radio-inline">
                                 <input type="radio" name="jenis" id="jenis" value="komunitas" required data-fv-notempty-message="Tidak boleh kosong"> komunitas
                                 </label>
                                 <label class="radio-inline">
                                 <input type="radio" name="jenis" id="jenis" value="Perseorangan" required data-fv-notempty-message="Tidak boleh kosong"> Perseorangan
                                 </label>
                               </div>
                     <!-- footer modal -->
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
          <br>
          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Pakai</th>
                    <th>Waktu Pakai</th>
                    <th>Keperluan Pemakaian</th>
                    <th>Jumlah Peserta</th>
                    <th>Kategori</th>

                </tr>
            </thead>
            <tbody>
              <?php foreach ($databookingall as$rowbookingall): ?>
                <tr>
                    <td><?php echo $rowbookingall['email'] ?></td>
                    <td><?php echo $rowbookingall['tanggal_pakai'] ?></td>
                    <td><?php echo $rowbookingall['waktu_awal'] ?> - <?php echo $rowbookingall['waktu_akhir'] ?></td>
                    <td><?php echo $rowbookingall['keperluan'] ?></td>
                    <td><?php echo $rowbookingall['jumlah_peserta'] ?></td>
                    <td><?php echo $rowbookingall['kategori'] ?></td>

                </tr>
              <?php endforeach; ?>
                <!-- <tr>
                    <td>Tiger</td>
                    <td>2019-01-09</td>
                    <td>10.00 WIB - 12.00 WIB</td>
                    <td>Rapat Tahunan</td>
                    <td>20</td>
                    <td>komunitas</td>
                </tr>
                <tr>
                    <td>Ronnie</td>
                    <td>2019-01-19</td>
                    <td>14.00 WIB - 17.00 WIB</td>
                    <td>Sosialisai Kesehatan</td>
                    <td>15</td>
                    <td>komunitas</td>
                </tr> -->
            </tbody>
        </table>
        <br>
        </div>
      </div>



    </div>
  </div>
</section>
<script>
  function getdate(value) {
    let value_date=value;
    var tahunSekarang= "<?php echo date('Y-m-d'); ?>";
    if (value_date < tahunSekarang) {
      var exp=`<span style="color:#ff0000">Tanggal Kadaluwarsa</span>`
      $("#pesandate").html(exp);
      $("#submitform").attr("disabled", true);
    }
    else{
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('Booking/ajax_date');?>",
        data: {value_date},
        success: function(res) {
          // alert(res)
          if (res =="Tanggal Sudah ada") {
            var exp=`<span style="color:#ff0000">Carilah Tanggal lain</span>`
            $("#pesandate").html(exp);
              $("#submitform").attr("disabled", true);
          }
          else if (res =="Tidak ada") {
            var exp=`<span style="color:#ff0000"></span>`
            $("#pesandate").html(exp);
            $('#submitform').removeAttr("disabled");
          }
        }
      })
      // var exp=`<span style="color:#ff0000"></span>`
      // $("#pesandate").html(exp);
      // $('#submitform').removeAttr("disabled");
    }
  }
</script>
