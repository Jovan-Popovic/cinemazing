<?php
class Genres extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Categories';

		$data['genres'] = $this->genre_model->get_genres();

		$this->load->view('templates/header');
		$this->load->view('genres/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['title'] = 'Create Genre';

		$this->form_validation->set_rules('name', 'Name', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('genres/create', $data);
			$this->load->view('templates/footer');
		} else {
			$this->genre_model->create_genre();

			$this->session->set_flashdata('genre_created', 'Your genre has been created');

			redirect('genres');
		}
	}

	public function collections($id)
	{
		$data['title'] = $this->genre_model->get_genre($id)->name;

		$data['posts'] = $this->collection_model->get_posts_by_genre($id);

		$this->load->view('templates/header');
		$this->load->view('collections/index', $data);
		$this->load->view('templates/footer');
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$this->genre_model->delete_genre($id);

		$this->session->set_flashdata('genre_deleted', 'Your genre has been deleted');

		redirect('genres');
	}
}
