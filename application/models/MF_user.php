<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_user extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function auth_login($username,$real_pass)
  {
    $this->db->select('*');
    $this->db->from('working_user');
    $this->db->where('email', $username);
    $this->db->where('password', $real_pass);
    $hasil = $this->db->get();
    return $hasil;

  }
  public function cek_list($username)
  {
    $this->db->select('*');
    $this->db->from('working_user');
    $this->db->where('email', $username);
    $hasil = $this->db->get();
    return $hasil;
  }
}
