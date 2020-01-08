<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->model('MA_User');
  }

  function index()
  {
    $cekuser=$this->MA_User->List_user()->result_array();
    $data = array(
			'title' => "Blank Page",
      'datauser'=>$cekuser
		);
		$this->load->view('dist/user', $data);
  }

}
