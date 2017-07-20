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

  public function get_user($user_id)
  {
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('users');
    return $query->result_array()[0];
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

  public function is_following($follower_id, $followee_id)
  {
    $this->db->where('follower_id', $follower_id);
    $this->db->where('followee_id', $followee_id);
    $query = $this->db->get('following');

    if ($query->num_rows() > 0)
    {
      return 'Unfollow';
    }else {
      return 'Follow';
    }
  }
}

 ?>
