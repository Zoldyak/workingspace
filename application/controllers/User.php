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

}
