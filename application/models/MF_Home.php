<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_Home extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function ListKomen()
  {
    $this->db->select('*');
    $this->db->from('working_komentar');
    $this->db->join('working_user', 'working_user.email = working_komentar.email');
    $this->db->where('status', 1);
    $this->db->limit('4');
    $hasil=$this->db->get();
    return $hasil;
  }

}
