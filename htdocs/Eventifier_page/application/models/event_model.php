<?php
class event_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function all_events()
  {
    $this->db->order_by('date_created','desc');
    $query = $this->db->get('events');
    return $query->result_array();
  }

  public function currentEvent($event_id)
  {
    $this->db->where('event_id',$event_id);
    $query = $this->db->get('events');
    return $query->result_array();
  }

  public function visitorCount($ip,$event_id)
  {
    $this->db->where('ip', $ip);
    $this->db->where('event_id', $event_id);
    $query = $this->db->get('visitors');
    return $query->num_rows();
  }

  public function storeIp($ip,$event_id)
  {
    $userData = array(
          'event_id' => $event_id,
          'ip' => $ip);
    $this->db->insert('visitors',$userData);
    $this->db->where('event_id', $event_id);
    $query = $this->db->get('visitors');
    return $query->num_rows();
  }

  public function localEvent($address)
  {
    $this->db->where('address', $address);
    $this->db->order_by('date_created','desc');
    $query = $this->db->get('events');
    //$query = $this->db->get('events',6,1);
    return $query->result_array();
  }

  public function usersEvents($category)
  {
    $this->db->where('category', $category);
    $this->db->order_by('date_created','desc');
    $query = $this->db->get('events');
    return $query->result_array();
  }
}
 ?>
