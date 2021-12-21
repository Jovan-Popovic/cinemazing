<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Movie Collections';
		$data['posts'] = $this->post_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('collections/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = null)
	{
		$data['post'] = $this->post_model->get_posts($slug);

		if (empty($data['post']))
			show_404();

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('collections/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Create new Movie';

		$this->load->view('templates/header');
		$this->load->view('collections/create', $data);
		$this->load->view('templates/footer');
	}
}
