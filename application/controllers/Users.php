<?php
class Users extends CI_Controller
{
	public function register()
	{
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('birth_date', 'Birth Date', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('users/sign-up', $data);
			$this->load->view('templates/footer');
		} else {
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

			redirect('collections');
		}
	}

	public function check_username_exists($username)
	{
		$this->form_validation->set_message('username_exists', 'This username is taken. Please choose a different one');

		return $this->user_model->check_username_exists($username) ? true : false;
	}

	public function check_email_exists($email)
	{
		$this->form_validation->set_message('email_exists', 'This email is taken. Please choose a different one');

		return $this->user_model->check_email_exists($email) ? true : false;
	}
}
