<?php
class login_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }
  // gets all the users
  public function all_users()
  {
    $query = $this->db->get('users');
    return $query->result_array();
  }


  // Checks the database to see if the user exists
  public function can_login($email_address, $password)
  {
    $this->db->where('email_address', $email_address);
    $this->db->where('password', $password);
    $query = $this->db->get('users');

    if($query->num_rows() > 0)
    {
      return $query;
    }
    else {
      return null;
    }
  }



}

 ?>
