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
                  'terbaca_admin'=>'baru'
              );

          // if ($this->email->send()==True) {
          //
          //     // redirect('/Home/','refresh');
          // }
          $query=$this->db->insert('working_booking', $data_form);
          if ($query == TRUE) {
            $subject = 'Coworkingspace';
        $message = '
            <p>Terdapat Permohonan peminjaman Co-workingspace oleh '.$this->session->userdata('user_id').'

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
            ->to($this->session->userdata('user_id'))
            ->subject($subject)
            ->message($body)
            ->send();
            echo $this->session->set_flashdata('msg','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Permohonan Peminjaman Coworkingspace Akan segera kami proses,
            Informasi selanjutnya kami beritau kepada anda melalui E-mail Terimah kasih</strong></div>');
                  redirect('/Home/','refresh');
          }

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
