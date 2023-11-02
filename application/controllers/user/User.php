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
		$data['super_admin'] = $this->User_model->get_super_admin();
		$data['admin'] = $this->User_model->get_admin();
		$data['users'] = $this->User_model->get_user();
        $this->load->view('Dashboard/user', $data);
	}

	
}
