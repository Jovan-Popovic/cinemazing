<?php

class Comments extends CI_Controller
{
	public function create($post_id)
	{
		$slug = $this->input->post('slug');
		$data['post'] = $this->collection_model->get_posts($slug);

		$this->form_validation->set_rules('body', 'Body', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('collections/view', $data);
			$this->load->view('templates/footer');
		} else {
			$this->comment_model->create_comment($post_id);
			redirect('collections/' . $slug);
		}
	}
}
