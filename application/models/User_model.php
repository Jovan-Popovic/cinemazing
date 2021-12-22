<?php

class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function register($enc_password)
	{
		$data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'birth_date' => $this->input->post('birth_date'),
			'phone_number' => $this->input->post('phone_number'),
			'city' => $this->input->post('city'),
			'username' => $this->input->post('username'),
			'password' => $enc_password,
		];

		return $this->db->insert('users', $data);
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$result = $this->db->get('users');

		return $result->num_rows() === 1 ? $result->row(0)->id : false;
	}

	public function check_username_exists($username)
	{
		$query = $this->db->get_where('users', ['username' => $username]);

		return empty($query->row_array()) ? true : false;
	}

	public function check_email_exists($email)
	{
		$query = $this->db->get_where('users', ['email' => $email]);

		return empty($query->row_array()) ? true : false;
	}
}
