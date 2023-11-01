<?php
class Registration_model extends CI_Model
{
	public function create_user($data)
	{
		$this->db->insert('users', $data);
	}

	public function is_email_unique($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		return ($query->num_rows() == 0); // If no rows are found, the email is unique
	}
}
