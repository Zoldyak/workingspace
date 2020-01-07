<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MF_booking');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $load=$this->load;
      $posttanggal= $this->input->post('tanggal');
      $postjam=$this->input->post('jam');
    if ( $posttanggal==null || $postjam==null) {
      $cekallbook=$this->MF_booking->cek_all_booking()->result_array();
    }
    else{
      $cekallbook=$this->MF_booking->cek_where_booking($posttanggal,$postjam)->result_array();
    }

    $data = array('halaman' => 'V_Booking.php',
                  'databookingall'=>$cekallbook
                  );
    $load->view('frontend/layout',$data);
  }
  public function Create()
  {
    $i = $this->input;
    $load=$this->load;
    $valid = $this->form_validation;

    $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
    $this->form_validation->set_rules('dari', 'dari', 'required');
    $this->form_validation->set_rules('sampai', 'sampai', 'required');
    $this->form_validation->set_rules('keperluan', 'keperluan', 'required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
    $this->form_validation->set_rules('jenis', 'jenis', 'required');
      $datestring = date('Y-m-d h:i:s');
    if ($valid->run()) {
      $data_form = array(
                  'email'  => $this->session->userdata('user_id'),
                  'tanggal_pakai'  => html_escape($i->post('tanggal',TRUE)),
                  'waktu_awal'=>html_escape($i->post('dari',TRUE)),
                  'waktu_akhir'=>html_escape($i->post('sampai',TRUE)),
                  'keperluan'=>html_escape($i->post('keperluan',TRUE)),
                  'jumlah_peserta'  => html_escape($i->post('jumlah',TRUE)),
                  'kategori'  => html_escape($i->post('jenis',TRUE)),
                  'status'  => "Belum di setujui (Proses)",
                  'create_on' =>$datestring,
              );
              $this->db->insert('working_booking', $data_form);
                redirect('/Home/','refresh');
      // code...
    }
    else {
      $data = array('halaman' => 'V_Booking.php',
                    );
      $load->view('frontend/layout',$data);
    }
  }
  public function ajax_date()
  {
    $i = $this->input;
    $posttanggal = $this->input->post('value_date');
    // echo "tanggalnya adalah: ".$posttanggal;
    $cek_auth=$this->MF_booking->cekdate($posttanggal);
    if ($cek_auth->num_rows() > 0) {
        echo "Tanggal Sudah ada";
    }
    else{
      echo "Tidak ada";
    }
  }
}
