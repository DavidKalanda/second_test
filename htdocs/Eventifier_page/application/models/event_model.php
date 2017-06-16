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

  public function currentEvent($event_id)
  {
    $this->db->where('event_id',$event_id);
    $query = $this->db->get('events');
    return $query->result_array();
  }

  public function localEvent($address)
  {
    $this->db->where('address', $address);
    $query = $this->db->get('events');
    return $query->result_array();
  }
}
 ?>
