<?php
class event_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function all_events()
  {
    $query = $this->db->get('events');
    return $query->result_array();
  }
}
 ?>
