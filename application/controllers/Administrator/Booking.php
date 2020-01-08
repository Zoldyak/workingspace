<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->model('MA_Booking');
  }

  function index()
  {
    $data = array(
    'terbaca_admin' => "sudah terbaca",
    );
    // $this->db->where('id_booking', $postid);
    $this->db->update('working_booking', $data);
      $cekbooking=$this->MA_Booking->List_Booking()->result_array();
    $data = array(
			'title' => "Blank Page",
      'databooking'=>$cekbooking
		);
		$this->load->view('dist/booking', $data);
  }
  public function Edit()
  {
    $i = $this->input;
    $load=$this->load;
    $valid = $this->form_validation;
    // echo $this->uri->segment(4);
    $postid=$this->uri->segment(4);
    $cekbookingid=$this->MA_Booking->List_edit_booking($postid)->result_array();
    $data = array(
      'title' => "Blank Page",
      'databooking'=>$cekbookingid
    );
    	$this->load->view('dist/bookingedit', $data);

  }
  public function postedit()
  {
    $i = $this->input;
    $load=$this->load;
    $valid = $this->form_validation;
    $postid=$this->uri->segment(4);
    $this->form_validation->set_rules('status', 'status', 'required');
      if ($valid->run()) {
      $poststatus= $this->input->post('status');
      $postcatatan= $this->input->post('catatan');
      $data = array(
      'status' => $poststatus,
      'catatan' => $postcatatan,
      'petugas' => $this->session->userdata('user_nama'),
      'terbaca_user'=>'baru'
      );
      $this->MA_Booking->update($postid,$data);}
  }
}
