<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Collections extends CI_Controller
{
	public function index($offset = 0)
	{
		$config['base_url'] = base_url() . 'collections/index';
		$config['total_rows'] = $this->db->count_all('posts');
		$config['per_page'] = 12;
		$config['url_segment'] = 3;
		$config['attributes'] = ['class' => 'pagination-link'];

		// Init Pagination
		$this->pagination->initialize($config);
		$data['title'] = 'Movie Collections';
		$data['posts'] = $this->collection_model->get_posts(false, $config['per_page'], $offset);

		$this->load->view('templates/header');
		$this->load->view('collections/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = null)
	{
		$data['post'] = $this->collection_model->get_posts($slug);
		$post_id = $data['post']['id'];
		$data['comments'] = $this->comment_model->get_comments($post_id);

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
		if (empty($_FILES['userfile']['name']))
			$this->form_validation->set_rules('userfile', 'Image URL', 'required');
		$this->form_validation->set_rules('available_at', 'Available At', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('collections/create', $data);
			$this->load->view('templates/footer');
		} else {
			$config['upload_path'] = './assets/images/data/movies';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['width'] = '2000';
			$config['height'] = '2000';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				$errors = ['error' => $this->upload->display_errors()];
				$post_image = 'no-image.png';
			} else {
				$data = ['upload_data' => $this->upload->data()];
				$post_image = $_FILES['userfile']['name'];
			}

			$this->collection_model->create_post($post_image);

			$this->session->set_flashdata('movie_created', 'You successfully added a new movie');

			redirect('collections');
		}
	}

	public function edit($slug = null)
	{
		if (!$this->session->userdata('logged_in'))
			redirect('users/login');

		$data['post'] = $this->collection_model->get_posts($slug);

		if ($this->session->userdata('user_id') !== $this->collection_model->get_posts($slug)['user_id'])
			redirect('collections');
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
