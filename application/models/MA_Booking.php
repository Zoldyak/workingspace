<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Booking extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function List_Booking()
  {
    $this->db->select('*,working_booking.status as statusbooking');
    $this->db->from('working_booking');
    $this->db->join('working_user', 'working_booking.email = working_user.email');
    $this->db->order_by('working_booking.create_on', 'DESC');
    $hasil = $this->db->get();
    return $hasil;
  }
  public function List_edit_booking($postid)
  {
    $this->db->select('*');
    $this->db->from('working_booking');
    // $this->db->join('working_user', 'working_booking.email = working_user.email');
    $this->db->where('id_booking', $postid);
    $hasil = $this->db->get();
    return $hasil;
  }
  public function update($postid,$data)
  {
    $this->db->where('id_booking', $postid);
    $exe=$this->db->update('working_booking', $data);
    
  }

}
