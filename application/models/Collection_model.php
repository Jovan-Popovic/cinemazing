<?php

class Collection_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_posts($slug = false)
	{
		if (!$slug) {
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('posts');

			return $query->result_array();
		}

		$query = $this->db->get_where('posts', ['slug' => $slug]);

		return $query->row_array();
	}

	public function create_post()
	{
		$slug = url_title($this->input->post('title'));

		$data = [
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'description' => $this->input->post('description'),
			'image_url' => $this->input->post('image_url'),
			'available_at' => $this->input->post('available_at'),
		];

		return $this->db->insert('posts', $data);
	}

	public function update_post()
	{
		$slug = url_title($this->input->post('title'));

		$data = [
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'description' => $this->input->post('description'),
			'image_url' => $this->input->post('image_url'),
			'available_at' => $this->input->post('available_at'),
		];

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('posts', $data);
	}

	public function delete_post($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('posts');

		return true;
	}
}
