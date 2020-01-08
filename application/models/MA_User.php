<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_User extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function List_user()
  {
    $this->db->select('*');
    $this->db->from('working_user');
    $hasil = $this->db->get();
    return $hasil;
  }
}
