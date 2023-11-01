<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model'); // Load the model
		$this->load->library('session');
	}
	public function index()
	{
		// User is not logged in, show the login form
		$this->load->view('login/login');
	}

	public function process_login()
	{
		$this->load->library('form_validation');

		// Set validation rules for login
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

		if ($this->form_validation->run() === FALSE) {
			// Validation failed, display errors
			$this->load->view('login/login'); // Load your login form view
		} else {
			// Validation successful, process login
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			// Check if the email and password match a user in the database
			$user = $this->Login_model->get_user_by_email($email);

			if ($user && password_verify($password, $user['password'])) {
				// Login successful, set user session and redirect to dashboard
				$this->session->set_userdata('user_id', $user['id']);
				redirect(base_url('dashboard'));
			} else {
				// Login failed, display an error message
				$error_message = '<div class="alert alert-danger">Invalid email or password.</div>';
				$this->session->set_flashdata('message', $error_message);
				redirect(base_url('login'));
				// $this->load->view('login/login');
			}
		}
	}
	public function logout()
	{
		// Destroy the user's session data
		$this->session->sess_destroy();

		// Redirect to the login page or any other desired location
		redirect(base_url('login'));
	}
}
