<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function process_registration()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['confirm_password'];
			// var_dump($_POST);

			echo "Registration Successful!<br>";
			echo "Name: $name<br>";
			echo "Email: $email<br>";
			echo "Password: $password<br>";

		} else {
			// Redirect back to the registration form if accessed directly
			header('Location: registration.php');
		}
	}
}
