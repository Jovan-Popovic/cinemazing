<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Collections extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Movie Collections';
		$data['posts'] = $this->collection_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('collections/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = null)
	{
		$data['post'] = $this->collection_model->get_posts($slug);

		if (empty($data['post']))
			show_404();

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('collections/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		if (!$this->session->userdata('logged_in'))
			redirect('users/login');

		$data['title'] = 'Create new Movie';
		$data['genres'] = $this->collection_model->get_genres();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('image_url', 'Image URL', 'required');
		$this->form_validation->set_rules('available_at', 'Available At', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('collections/create', $data);
			$this->load->view('templates/footer');
		} else {
			$this->collection_model->create_post();

			$this->session->set_flashdata('movie_created', 'You successfully added a new movie');

			redirect('collections');
		}
	}

	public function edit($slug = null)
	{
		if (!$this->session->userdata('logged_in'))
			redirect('users/login');

		$data['post'] = $this->collection_model->get_posts($slug);
		$data['genres'] = $this->collection_model->get_genres();

		if (empty($data['post']))
			show_404();

		$data['title'] = 'Edit Movie';

		$this->load->view('templates/header');
		$this->load->view('collections/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		if (!$this->session->userdata('logged_in'))
			redirect('users/login');

		$this->collection_model->update_post($id);

		$this->session->set_flashdata('movie_updated', 'You successfully updated a movie');

		redirect('collections');
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in'))
			redirect('users/login');

		$this->collection_model->delete_post($id);

		$this->session->set_flashdata('movie_deleted', 'You successfully deleted a movie');

		redirect('collections');
	}
}
