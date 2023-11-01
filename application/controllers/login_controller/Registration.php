<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/registration');
	}
	public function process_registration()
	{
		$this->load->library('form_validation');

		// Set validation rules
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() === FALSE) {
			// Validation failed, display errors
			// $this->session->set_flashdata('message', '<div class="alert alert-danger">Fill the form'. $this->form_validation->error().'.</div>');
			$error_message = '<div class="alert alert-danger">' . validation_errors() . '</div>';
			$this->session->set_flashdata('message', $error_message);
			redirect('registration');
			// $this->load->view('login/registration'); // Load your registration form view
		} else {
			// Validation successful, process registration
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			// Load the User_model
			$this->load->model('Registration_model');

			// Check if the email already exists in the database
			if ($this->Registration_model->is_email_unique($email)) {
				// Email is unique, proceed with registration
				$user_data = array(
					'name' => $name,
					'email' => $email,
					'password' => password_hash($password, PASSWORD_DEFAULT)
				);

				// Insert user data into the database
				$this->Registration_model->create_user($user_data);
				redirect(base_url('login'));

				// Registration is successful
				$this->load->view('login/login');
			} else {
				// Email already exists, display an error message
				$error_message = '<div class="alert alert-danger">Email address already in use.</div>';
				$this->session->set_flashdata('message', $error_message);
				redirect(base_url('registration'));

				// $this->load->view('login/registration');
			}
		}
	}
}
