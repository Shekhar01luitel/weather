<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth();
	}

	public function index()
	{
		$this->load->view('Dashboard/setting');
	}
}
