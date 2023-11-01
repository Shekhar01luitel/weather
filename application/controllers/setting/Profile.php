<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth();
	}

	public function index()
	{
		$this->load->view('Dashboard/profile');
	}
	public function user_get_by_id_details($user_id)
	{
		$this->load->model('User_model'); // Load the User_model
		$data = $this->User_model->get_user_by_id($user_id);

		// Check if data is retrieved
		if ($data) {
			// Data is retrieved, you can access it
			$this->load->view('Dashboard/profile', array('user_data' => $data));
		} else {
			// Data not found, handle the case when the user doesn't exist
			$error_message = '<div class="alert alert-danger">No user find.</div>';
			$this->session->set_flashdata('message', $error_message);
			redirect(base_url('user'));
		}
	}
}
