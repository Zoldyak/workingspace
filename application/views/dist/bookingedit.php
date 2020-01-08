<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit</h1>
          </div>

          <div class="section-body">
            <?php echo form_open('Administrator/Booking/postedit/'.$this->uri->segment(4)) ?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Status</label>
              </div>
              <select name="status" class="custom-select" id="inputGroupSelect01">
                <option selected disabled>Choose...</option>
                <option value="Setujui">Setujui</option>
                <option value="Belum di setujui (Proses)">Belum di setujui (Proses)</option>
                <option value="Tidak Disetujui">Tidak Disetujui</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Catatan</label>
              </div>
              <textarea name="catatan" rows="8" cols="200" class="form-control" ></textarea>
            </div>
            <button type="submit" name="button" class="btn btn-info">Kirim</button>
            <!-- <input type="submit" name="sumbit" value="kirim" class="btn btn-info"> -->
            </form>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>
