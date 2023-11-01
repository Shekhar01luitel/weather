<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Fetch all users from the "users" table
	public function get_all_users()
	{
		$query = $this->db->get('users'); // Assuming 'users' is your table name
		return $query->result(); // Return an array of user records
	}

	public function get_user_by_id($user_id)
	{
		$query = $this->db->get_where('users', array('id' => $user_id));

		if ($query->num_rows() > 0) {
			return $query->row(); // Return a single user object
		} else {
			return false; // Return false if user not found
		}
	}
}
