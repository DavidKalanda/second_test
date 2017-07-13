<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class event_controller extends CI_Controller{

  public function createEvent()
	{
		$error="";
		$this->load->view('header');
		$this->load->view('createEvent',$error);
		$this->load->view('footer');
	}

  public function editEvent($event_id)
  {
    $this->load->view('header');
		$this->load->model('event_model');
    $data['event'] = $this->event_model->currentEvent($event_id);
    $this->load->view('edit',$data);
    $this->load->view('footer');
  }

  public function deleteEvent($event_id)
  {
    $this->db->where('event_id', $event_id);
    $this->db->delete('events');
    redirect('/profile');
  }

  // Loads the event that was clicked
	public function event_view($id)
	{
    // if (isset($_SESSION['user_id'])) {
    //   $_SESSION['user_id'] =='0';
    // }else {
    //   $data['user_id'] = $_SESSION['user_id'];
    // }

		$this->load->view('header');
		$this->load->model('event_model');
		$data['event'] = $this->event_model->currentEvent($id);
    $data['user_id'] = $_SESSION['user_id'];
		$this->load->view('event_view',$data);
	}

  // Loads the users page with all the events
	public function outputEvent()
	{
		$this->load->model('event_model');
		$data['events'] = $this->event_model->all_events();
		$this->load->view('userspage',$data);
	}

  //Outputs homepage with local events
	public function outputLocalEvent()
	{
		$this->load->model('event_model');
		$data['events'] = $this->event_model->localEvent('Winnipeg');
		$this->load->view('main_page',$data);
	}

  // adds user and event id to the attending table-header-group
  public function add_attending($event_id, $user_id)
  {
    echo $event_id . " / " . $user_id;
    $data = array(
      'event_id' => $event_id,
      'user_id'=>$user_id);
    $this->db->insert('users_attending',$data);
    // redirect('/about');
  }

  // Uploads the image that the user adds to the event,
	//to the uploads folder
	public function do_upload()
  {
          $config['upload_path']          = './uploads/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 1000000000;
          $config['max_width']            = 10000;
          $config['max_height']           = 10000;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('event_image'))
          {
                  $error = array('error' => $this->upload->display_errors());

                  $this->load->view('upload_form', $error);
          }
          else
          {
                  $data = array('upload_data' => $this->upload->data());

                  $this->load->view('userspage', $data);
          }
  }


  /*
 	* creates event in database
 	*/
 	public function create_event(){
	$data = array();
	$userData = array();

  if (isset($_SESSION['email_address'])) {
	if($this->input->post('upload')){
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('start_date', 'start_date', 'required');
			$this->form_validation->set_rules('start_time', 'start_time', 'required');
      $this->form_validation->set_rules('end_date', 'end_date', 'required');
      $this->form_validation->set_rules('end_time', 'end_time', 'required');
			$this->form_validation->set_rules('content', 'content', 'required');
			$this->form_validation->set_rules('address', 'address', 'required');
			$this->form_validation->set_rules('price', 'price', 'required');
      $this->form_validation->set_rules('category', 'category', 'required');
			$this->form_validation->set_rules('event_image', 'event_image');

			$userData = array(
					'title' => $this->input->post('title'),
					'start_date' => $this->input->post('start_date'),
					'start_time' => $this->input->post('start_time'),
          'end_date' => $this->input->post('end_date'),
          'end_time' => $this->input->post('end_time'),
					'content' => $this->input->post('content'),
					'address' => $this->input->post('address'),
					'price' => $this->input->post('price'),
          'category' => $this->input->post('category'),
          'created_by'=> $_SESSION['user_id'],
					'event_image' => $_FILES["event_image"]["name"]
			);

			if($this->form_validation->run() == true){
					$insert = $this->db->insert('events',$userData);
					if($insert){
							$this->session->set_userdata('success_msg', 'Event was created successfully.');

              redirect('/userspage');
							$this->do_upload();
					}else{
							$data['error_msg'] = 'Some problems occured, please try again.';
					}
			}

	   }else{
		redirect('/createEvent');
	}
  }else {
    redirect('/signup');
  }
 }
 /*
 * Edit event in database
 */
 public function edit_event($event_id){
 $data = array();
 $userData = array();

 if (isset($_SESSION['email_address'])) {
 if($this->input->post('update')){
     $this->form_validation->set_rules('title', 'title', 'required');
     $this->form_validation->set_rules('start_date', 'start_date', 'required');
     $this->form_validation->set_rules('start_time', 'start_time', 'required');
     $this->form_validation->set_rules('end_date', 'end_date', 'required');
     $this->form_validation->set_rules('end_time', 'end_time', 'required');
     $this->form_validation->set_rules('content', 'content', 'required');
     $this->form_validation->set_rules('address', 'address', 'required');
     $this->form_validation->set_rules('price', 'price', 'required');
     $this->form_validation->set_rules('category', 'category', 'required');
     $this->form_validation->set_rules('event_image', 'event_image');

     $eventData = array(
         'title' => $this->input->post('title'),
         'start_date' => $this->input->post('start_date'),
         'start_time' => $this->input->post('start_time'),
         'end_date' => $this->input->post('end_date'),
         'end_time' => $this->input->post('end_time'),
         'content' => $this->input->post('content'),
         'address' => $this->input->post('address'),
         'price' => $this->input->post('price'),
         'category' => $this->input->post('category'),
         'created_by'=> $_SESSION['user_id'],
         'event_image' => $_FILES["event_image"]["name"]
     );

     if($this->form_validation->run() == true){
         $this->db->where('event_id', $event_id);
         $update = $this->db->replace('events',$eventData);
         if($update){
             $this->session->set_userdata('success_msg', 'Event was created successfully.');

             redirect('/profile');
             $this->do_upload();
         }else{
             $data['error_msg'] = 'Some problems occured, please try again.';
         }
     }

    }else{
   redirect('/createEvent');
 }
 }else {
   redirect('/signup');
 }
}

}

 ?>
