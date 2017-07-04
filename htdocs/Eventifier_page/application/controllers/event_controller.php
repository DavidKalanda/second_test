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

  // Loads the event that was clicked
	public function event_view($id)
	{
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

  //
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
			$this->form_validation->set_rules('content', 'content', 'required');
			$this->form_validation->set_rules('address', 'address', 'required');
			$this->form_validation->set_rules('price', 'price', 'required');
			$this->form_validation->set_rules('event_image', 'event_image');

			$userData = array(
					'title' => $this->input->post('title'),
					'start_date' => $this->input->post('start_date'),
					'start_time' => $this->input->post('start_time'),
					'content' => $this->input->post('content'),
					'address' => $this->input->post('address'),
					'price' => $this->input->post('price'),
					'event_image' => $_FILES["event_image"]["name"]
			);

			if($this->form_validation->run() == true){
					$insert = $this->db->insert('events',$userData);
					if($insert){
							$this->session->set_userdata('success_msg', 'Event was created successfully.');
							$this->load->view('userspage');
							$this->do_upload();
					}else{
							$data['error_msg'] = 'Some problems occured, please try again.';
					}
			}

	   }else{
		redirect('/userspage');
	}
  }else {
    redirect('/signup');
  }

  }
}

 ?>
