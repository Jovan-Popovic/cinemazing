<?php

class Collection_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_posts($slug = false, $limit = false, $offset = false)
	{
		if ($limit)
			$this->db->limit($limit, $offset);

		if (!$slug) {
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('genres', 'genres.id = posts.genre_id');
			$query = $this->db->get('posts');

			return $query->result_array();
		}

		$query = $this->db->get_where('posts', ['slug' => $slug]);

		return $query->row_array();
	}

	public function create_post($post_image)
	{
		$slug = url_title($this->input->post('title'));

		$data = [
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'description' => $this->input->post('description'),
			'user_id' => $this->session->userdata('user_id'),
			'genre_id' => $this->input->post('genre_id'),
			'image_slug' => $post_image,
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
			'genre_id' => $this->input->post('genre_id'),
			'image_slug' => $this->input->post('image_slug'),
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

	public function get_genres()
	{
		$this->db->order_by('name');
		$query = $this->db->get('genres');

		return $query->result_array();
	}

	public function get_posts_by_genre($genre_id)
	{
		$this->db->order_by('posts.id', 'DESC');
		$this->db->join('genres', 'genres.id = posts.genre_id');
		$query = $this->db->get_where('posts', ['genre_id' => $genre_id]);

		return $query->result_array();
	}
}
