<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['users'] = $this->User_model->get_all_users();
        $this->load->view('Dashboard/user', $data);
	}

	
}
