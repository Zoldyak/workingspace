<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_booking extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function cekdate($posttanggal)
  {
    $this->db->select('*');
    $this->db->from('working_booking');
    $this->db->where('tanggal_pakai', $posttanggal);
    $hasil = $this->db->get();
    return $hasil;
  }
  public function cek_booking($username)
  {
    $this->db->select('*');
    $this->db->from('working_booking');
    $this->db->where('email', $username);
    $hasil = $this->db->get();
    return $hasil;
  }
  public function cek_all_booking()
  {
    $this->db->select('*');
    $this->db->from('working_booking');
    $this->db->where('status', "Setujui");
    $hasil = $this->db->get();
    return $hasil;
  }
  public function cek_where_booking($posttanggal,$postjam)
  {
    $this->db->select('*');
    $this->db->from('working_booking');
    // $this->db->like('title', 'match');
    $this->db->like('tanggal_pakai', $posttanggal);
    $this->db->like('waktu_awal', $postjam);
    $this->db->where('status', "Setujui");
    $hasil = $this->db->get();
    return $hasil;
  }


}
