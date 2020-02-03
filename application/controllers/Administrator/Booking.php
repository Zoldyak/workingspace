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
    $cekbookingid=$this->MA_Booking->List_edit_booking($postid)->row_array();
    $to=$cekbookingid['email'];
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
      $this->db->where('id_booking', $postid);
      $query=$this->db->update('working_booking', $data);
      if ($query == TRUE) {
        $subject = 'Coworkingspace';
        $message = '
            <p>
            Permohoan Pemijaman Anda telah '.$poststatus.' '.$postcatatan.' <br>
            Info lebih lanjut Hubungi +62 813-3020-3802
            </p>
        ';

    // Get full html:
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
        <title>' . html_escape($subject) . '</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
    ' . $message . '
    </body>
    </html>';
    // Also, for getting full html you may use the following internal method:
    //$body = $this->email->full_html($subject, $message);

    // Attaching the logo first.
    $file_logo = FCPATH.'default-image.png';  // Change the path accordingly.
    // The last additional parameter is set to true in order
    // the image (logo) to appear inline, within the message text:
    $this->email->attach($file_logo, 'inline', null, '', true);
    $cid_logo = $this->email->get_attachment_cid($file_logo);
    $body = str_replace('cid:logo_src', 'cid:'.$cid_logo, $body);
    // End attaching the logo.

    $result = $this->email
        ->from('cws.banyuwangi@gmail.com')
        // ->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
        ->to($to)
        ->subject($subject)
        ->message($body)
        ->send();
        echo $this->session->set_flashdata('msg','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Permohonan Peminjaman Coworkingspace Akan segera kami proses,
        Informasi selanjutnya kami beritau kepada anda melalui E-mail Terimah kasih</strong></div>');
              redirect('/Administrator/Booking','refresh');
      }
    }
  }
}
