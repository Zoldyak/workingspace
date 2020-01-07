<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->model('MF_user');
      $this->load->model('MF_booking');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $username=$this->session->userdata('user_id');
    $ceklist=$this->MF_user->cek_list($username)->row_array();
    $cekbook=$this->MF_booking->cek_booking($username)->result_array();
    // print_r($ceklist);
  $data = array('halaman' => 'V_User.php',
                'data'=>$ceklist,
                'databooking'=>$cekbook);
  $load->view('frontend/layout',$data);
  }
  public function Auth()
  {
    $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
    $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
    $real_pass=md5("#@".$password."@#");
    $cek_auth=$this->MF_user->auth_login($username,$real_pass);
    if ($cek_auth->num_rows() > 0) {
      $data=$cek_auth->row_array();
      $data_login = array(
                'is_logged_in'=> true,
                'user_id'=>$data['email'],
                'user_nama'=>$data['nama_lengkap'],
                'user_role'=>$data['level'],
                // 'user_menu'=>$data['menu_akses'],
            );
            if ($data['level']==2) {
                $this->session->set_userdata($data_login);
                redirect('/Home/','refresh');
            }
            else{
              echo "gagal";
            }
      // code...
    }
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
                      'create_on' =>$datestring,
                      'level'=> 2
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
  public function Logout()
      {
          $this->session->sess_destroy();
          redirect('/Home/','refresh');
      }
}
