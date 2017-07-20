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
		$data['error_msg']= "";
		$this->load->view('header');
		$this->load->view('login',$data);
		//$this->load->view('footer');
	}

	// Opens signup page when link is clicked
	public function signup()
	{
		$this->load->view('header');
		$this->load->view('signup');
		//$this->load->view('footer');
	}
	// registrater your organization
	public function register_your_organization()
  {
		$this->load->view('header');
	 	$this->load->view('register_your_organization');
		$this->load->view('footer');
  }

	public function user_profile($user_id)
	{
		$this->load->model('event_model');
		$this->load->model('Login_model');
		$data['user']=$this->Login_model->get_user($user_id);
		$data['events']=$this->event_model->usersEvents($_SESSION['favourite']);
		$data['follow']=$this->Login_model->is_following($user_id,$_SESSION['user_id']);
		$this->load->view('header',$data);
	 	$this->load->view('user_profile',$data);
		$this->load->view('footer');
	}

	// loads the users page after loging in
	public function userspage()
	{
		if (isset($_SESSION['email_address'])) {
			$this->load->model('Login_model');
			$data['user'] = $this->Login_model->get_user($_SESSION['user_id']);
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
		unset($_SESSION['email_address']);
		$this->session->sess_destroy();
		$this->load->view('header');
		$this->outputLocalEvent();
		$this->load->view('footer');
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

	//Addes a follower to the follow table
	public function addFollower($follower_id, $followee_id)
	{
		// echo $follower_id . " / " . $followee_id;
		$data = array(
      'follower_id' => $follower_id,
      'followee_id'=>$followee_id);
    $this->db->insert('following',$data);

		// reloads the user page
	  //$this->user_profile($follower_id);
		redirect('/profile/'.$follower_id);
	}

	//Removes a follower to the follow table
	public function removeFollower($follower_id, $followee_id)
	{
		// echo $follower_id . " / " . $followee_id;
		$data = array(
      'follower_id' => $follower_id,
      'followee_id'=>$followee_id);
    $this->db->delete('following',$data);

		// reloads the user page
	  $this->user_profile($follower_id);
	}

	public function org_registration(){
		$data = array();
		$orgData = array();
		if($this->input->post('orgSubmit')){
				$this->form_validation->set_rules('org_location', 'org_location', 'required');
				$this->form_validation->set_rules('org_name', 'org_name', 'required');
				$this->form_validation->set_rules('org_domain', 'org_domain');//|callback_email_check
				$this->form_validation->set_rules('org_description', 'org_description', 'required');

				$orgData = array(
						'org_location' => strip_tags($this->input->post('org_location')),
						'org_name' => strip_tags($this->input->post('org_name')),
						'org_domain' => strip_tags($this->input->post('org_domain')),
						'org_description' => $this->input->post('org_description'),
						'org_type' => $this->input->post('org_type'),
				);

				if($this->form_validation->run() == true){
					$insert = $this->db->insert('organization',$orgData);
					if($insert){
							$this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
							$this->outputLocalEvent();
						}else{
								$data['error_msg'] = 'Some problems occured, please try again.';
						}
				}
				else {
					$data['first_name'] = $orgData;
					redirect('/signup');
					//$this->load->view('/signup', $data);
				}
		}
		else {
			$data['first_name'] = $orgData;
			//load the view
			$this->load->view('login', $data);
		}
	}


	/*
		 * User registration
		 *Adds a user into the database
		 */
		 public function user_registration(){
	   $this->load->helper('array');
	   //redirect('/signup');
	    $data = array();
	    $userData = array();
	    if(isset($_POST['register'])){
	       $this->form_validation->set_rules('first_name','first name','trim|required',
	             array('required' => 'You must provide a %s.'));
	      $this->form_validation->set_rules('last_name','last name','trim|required',
	             array('required' => 'You must provide a %s.'));
	      $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|is_unique[users.email_address]',
	             array('required' => 'You must provide an email address.',
	             'valid_email' => 'Please provide a valid %s',
	             'is_unique' => 'Email address already exists, Try signing in.'));//|callback_email_check
	      $this->form_validation->set_rules('password', 'password', 'trim|required',
	             array('required' => 'You must provide a %s.'));
	      $this->form_validation->set_rules('conf_password', 'Password confirmation', 'trim|required|matches[password]',
	             array('required' => 'You must provide a %s.',
	             'matches' => '%s does not match with the password'));
	      $userData = array(
	        'first_name' => strip_tags($this->input->post('first_name')),
	        'last_name' => strip_tags($this->input->post('last_name')),
	        'email_address' => strip_tags($this->input->post('email_address')),
	        'password' => md5($this->input->post('password')));
	      if($this->form_validation->run() == true){
	        $insert = $this->db->insert('users',$userData);
	        if($insert){
	          // $this->session->set_userdata($userData);
	          $this->signupsuccess($userData);
	        }else{
	          $data['error_msg'] = 'Some problems occured, please try again.';
	          //redirect('/signup');
	        }
	      }
	      else {
	       // $data['first_name'] = $userData;
	       // redirect('/15');
	       $this->load->view('header');
	       $this->load->view('signup',$data);
	       //$this->load->view('/signup', $data);
	      }
	    }
	     //$data['email_address'] = $userData;
	     //load the view
	     //  $this->load->view('header');
	     // $this->load->view('signup',$data);
	     //$this->load->view('login', $data);
	  }

	public function signupsuccess($data)
	{
	  $this->load->view('signupsuccess',$data);
	}

	// Validates the login information
	public function login_validation(){
	$this->load->library('form_validation');
	//$error_msg="";
	//$this->form_validation->set_rules('first_name','first_name','required');
	$this->form_validation->set_rules('email_address','email_address','required');
	$this->form_validation->set_rules('password','password','required');
	if ($this->form_validation->run())
	{
		$email_address = $this->input->post('email_address');
		$password = $this->input->post('password');

		// model function
		$this->load->model('Login_model');
		$userInfo = $this->Login_model->can_login($email_address,$password);
		if ($userInfo) {

			foreach ($userInfo->result() as $row)
			{
				/// stores user in session
				$session_data = array(
					'email_address'=> $email_address,
					'first_name' => $row->first_name,
					'last_name'=>$row->last_name,
					'user_id'=>$row->user_id,
					'profile_picture'=>$row->profile_picture,
					'friend_count'=>$row->friend_count,
					'favourite'=>$row->favourite
				);
			}
			$this->session->set_userdata($session_data);
			//redirect to userspage
			redirect('/userspage');
			}
			else {
					$data['error_msg']='Invalid username and password';
					//$this->session->set_flashdata('error','Invalid username and password');
					//complete with redirect to login page
					$this->load->view('header');
					$this->load->view('login',$data);
					//redirect('/login');

						}
		}
		else {
		//false
		$this->login();
		}
}


}
