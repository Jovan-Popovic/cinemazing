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
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('users/sign-up', $data);
			$this->load->view('templates/footer');
		} else {
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			$this->session->set_flashdata('user_registered', 'You are now registered and can log in.');

			redirect('collections');
		}
	}

	public function login()
	{
		$data['title'] = 'Login';

		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$user_id = $this->user_model->login($email, $password);

			if ($user_id) {
				$user_data = [
					'user_id' => $user_id,
					'email' => $email,
					'logged_in' => true,
				];

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('user_logged_in', 'You are now logged in, welcome.');

				redirect('collections');
			} else {
				$this->session->set_flashdata('login_failed', 'Login failed, please try again.');

				redirect('users/login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');

		$this->session->set_flashdata('user_logged_out', 'You are now logged out, see you soon :)');

		redirect('users/login');
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
