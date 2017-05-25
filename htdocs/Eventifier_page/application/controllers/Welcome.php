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
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	public function loadPages()
	{
		$this->load->view('header');
		$this->load->view('main_page');
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
	}

	// Opens signup page when link is clicked
	public function signup()
	{
		$this->load->view('header');
		$this->load->view('signup');
	}

	public function userspage()
	{
		if (isset($_SESSION['user_name'])) {
			$this->load->view('header');
			$this->outputEvent();
			//$this->load->view('userspage');
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

	public function logout()
	{
		unset($_SESSION['user_name']);
		$this->session->sess_destroy();
		$this->load->view('header');
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	// Validates the login information
	public function login_validation(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('user_name','user_name','required');
	$this->form_validation->set_rules('password','password','required');
	if ($this->form_validation->run())
	{
		$user_name = $this->input->post('user_name');
		$password = $this->input->post('password');
		// model function
		$this->load->model('login_model');
		if ($this->login_model->can_login($user_name,$password)) {
			/// stores user in session
			$session_data = array(
				'user_name'=> $user_name,
				'user_id'=>$user_id
			);
			$this->session->set_userdata($session_data);
			//complete with redirect location homepage
			redirect('/userspage');
			//$this->load->view('Welcome/userspage');
			}
			else {
					$this->session->set_flashdata('error','Invalid username and password');
					//complete with redirect to login page
					$this->load->view('login');
					//redirect('http://localhost/Test/user/welcome_message');
						}
		}
		else {
		//false
		$this->login();
		}
}

/*
	 * User registration
	 */
public function user_registration(){
		$data = array();
		$userData = array();
		if($this->input->post('regisSubmit')){
				$this->form_validation->set_rules('user_name', 'user_name', 'required');
				//$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
				$this->form_validation->set_rules('password', 'password', 'required');
				$this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

				// to hash the password use md5($this->input->post('password'))
				$userData = array(
						'user_name' => strip_tags($this->input->post('user_name')),
						//'email' => strip_tags($this->input->post('email')),
						'password' => $this->input->post('password'),
						//'gender' => $this->input->post('gender'),
						//'phone' => strip_tags($this->input->post('phone'))
				);

				if($this->form_validation->run() == true){
						$insert = $this->db->insert('users',$userData);
						if($insert){
								$this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
								$this->load->view('homepage');
						}else{
								$data['error_msg'] = 'Some problems occured, please try again.';
						}
				}
		}
		$data['user_name'] = $userData;
		//load the view
		$this->load->view('homepage', $data);
}

public function createEvent()
{
	$this->load->view('header');
	$this->load->view('createEvent');
	$this->load->view('footer');
}

public function outputEvent()
{
	$this->load->model('event_model');
	$data['events'] = $this->event_model->all_events();
	$this->load->view('userspage',$data);
}

/*
	 * creates event in database
	 */
public function create_event(){
		$data = array();
		$userData = array();
		if($this->input->post('createSubmit')){
				$this->form_validation->set_rules('title', 'title', 'required');
				$this->form_validation->set_rules('date', 'date', 'required');
				$this->form_validation->set_rules('time', 'time', 'required');
				$this->form_validation->set_rules('content', 'content', 'required');

				$userData = array(
						'title' => $this->input->post('title'),
						'date' => $this->input->post('date'),
						'time' => $this->input->post('time'),
						'content' => $this->input->post('content')
				);

				if($this->form_validation->run() == true){
						$insert = $this->db->insert('events',$userData);
						if($insert){
								$this->session->set_userdata('success_msg', 'Event was created successfully.');
								$this->load->view('userspage');
						}else{
								$data['error_msg'] = 'Some problems occured, please try again.';
						}
				}
		}
		//$data['title'] = $userData;
		//load the view
		redirect('/userspage');
}

}
