<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->view('header');
		// loads main page with Local events showing
		$this->outputLocalEvent();
		$this->load->view('footer');
	}

	// Loads the view for the welcome page with all the local events
	public function loadPages()
	{
		$this->load->view('header');
		// loads the main page as well as some local events
		$this->outputLocalEvent();
		$this->load->view('footer');
	}

	// Opens about page when link is clicked
	public function about()
  {
	 $this->load->view('header');
	 $this->load->view('about');
  }

	// Opens services page when link is clicked
	public function services()
	{
		$this->load->view('header');
		$this->load->view('services');
	}

	// Opens login page when link is clicked
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	// Opens signup page when link is clicked
	public function signup()
	{
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	// registrater your organization
	public function register_your_organization()
  {
		$this->load->view('header');
	 	$this->load->view('register_your_organization');
		$this->load->view('footer');
  }

	public function user_profile()
	{
		$this->load->view('header');
	 	$this->load->view('user_profile');
		$this->load->view('footer');
	}

	// loads the users page after loging in
	public function userspage()
	{
		if (isset($_SESSION['first_name'])) {
			$this->load->model('login_model');
			$data['users'] = $this->login_model->all_users();
			$this->load->view('header',$data);
			$this->outputEvent();
			$this->load->view('footer');
		}else {
			$this->load->view('header');
			$this->load->view('main_page');
			$this->load->view('footer');
		}
	}

	// Opens contact page when link is clicked
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	// Ends the session and loads the home page
	public function logout()
	{
		unset($_SESSION['first_name']);
		$this->session->sess_destroy();
		$this->load->view('header');
		$this->outputLocalEvent();
		$this->load->view('footer');
	}



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

	/*
 	* creates event in database
 	*/
 	public function create_event(){
	$data = array();
	$userData = array();
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

	}
		//$data['title'] = $userData;
		//load the view
		redirect('/userspage');
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
		 * User registration
		 *Adds a user into the database
		 */
	public function user_registration(){
			$data = array();
			$userData = array();
			if($this->input->post('regisSubmit')){
					$this->form_validation->set_rules('first_name', 'first_name', 'required');
					$this->form_validation->set_rules('last_name', 'last_name', 'required');
					$this->form_validation->set_rules('email_address', 'email_address', 'required|valid_email');//|callback_email_check
					$this->form_validation->set_rules('password', 'password', 'required');
					$this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');
					echo "TEST ";
					// to hash the password use md5($this->input->post('password'))
					$userData = array(
							'first_name' => strip_tags($this->input->post('first_name')),
							'last_name' => strip_tags($this->input->post('last_name')),
							'email_address' => strip_tags($this->input->post('email_address')),
							'password' => $this->input->post('password'),
							//'gender' => $this->input->post('gender'),
							//'phone' => strip_tags($this->input->post('phone'))
					);
					if($this->form_validation->run() == true){
							$insert = $this->db->insert('users',$userData);
							if($insert){
									$this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
									redirect('/login');
							}else{
									$data['error_msg'] = 'Some problems occured, please try again.';
							}
					}
					else {
						$data['first_name'] = $userData;
						redirect('/signup');
						//$this->load->view('/signup', $data);
					}
			}
			else {
				$data['first_name'] = $userData;
				//load the view
				$this->load->view('login', $data);
			}
	}

	// Validates the login information
	public function login_validation(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('first_name','first_name','required');
	$this->form_validation->set_rules('password','password','required');
	if ($this->form_validation->run())
	{
		$first_name = $this->input->post('first_name');
		$password = $this->input->post('password');
		// model function
		$this->load->model('login_model');
		if ($this->login_model->can_login($first_name,$password)) {
			/// stores user in session
			$session_data = array(
				'first_name'=> $first_name,
				'user_id'=>$user_id
			);
			$this->session->set_userdata($session_data);
			//redirect to userspage
			redirect('/userspage');
			}
			else {
					$this->session->set_flashdata('error','Invalid username and password');
					//complete with redirect to login page
					$this->load->view('/login');

						}
		}
		else {
		//false
		$this->login();
		}
}


}
