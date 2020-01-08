<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('MF_Home');
  }

  function index()
  {
    $load=$this->load;
    $listkomen= $this->MF_Home->ListKomen()->result_array();
    $data = array('halaman' => 'V_Home.php',
                  'datakomen'=> $listkomen
                  );
    $load->view('frontend/layout',$data);
  }

}
