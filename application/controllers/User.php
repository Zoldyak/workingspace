<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
  $data = array('halaman' => 'V_User.php',
                );
  $load->view('frontend/layout',$data);
  }
  public function Create()
  {
      $i = $this->input;
      $load=$this->load;
      $valid = $this->form_validation;
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[working_user.email]');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('hp', 'hp', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      if($valid->run()) {
        $config['upload_path'] = './assets/frontend/img/user/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '3048';
        $config['remove_space'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $load->library('upload',$config);
        if ($this->security->sanitize_filename($this->upload->do_upload('foto'))) {
          $fileFoto1 = array('upload_data' => $this->upload->data());
          $fileFoto = $this->upload->data();
          $postemail=$i->post('email',TRUE);
          $postpassword=md5("#@".$i->post('password',TRUE)."@#");
          $postnama=html_escape($i->post('nama',TRUE));
          $posthp=html_escape($i->post('hp',TRUE));
          $postalamat=html_escape($i->post('alamat',TRUE));
          $datestring = date('Y-m-d h:i:s');
          // echo mdate($datestring);
          $data_form = array(
                      'email'  => $postemail,
                      'password'  => $postpassword,
                      'nama_lengkap'=>$postnama,
                      'no_hp'=>$posthp,
                      'alamat'=>$postalamat,
                      'foto'  => $fileFoto1['upload_data']['file_name'],
                      'create_on' =>$datestring
                  );
            $this->db->insert('working_user', $data_form);
              redirect('/Home/','refresh');
        }
      }
      else{
        $data = array('halaman' => 'V_Home.php',
                      );
        $load->view('frontend/layout',$data);
      }
  }

}
