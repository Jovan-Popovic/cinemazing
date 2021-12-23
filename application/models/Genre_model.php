<?php
class Genre_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_genres()
	{
		$this->db->order_by('name');
		$query = $this->db->get('genres');

		return $query->result_array();
	}

	public function create_genre()
	{
		$data = [
			'name' => $this->input->post('name'),
			'user_id' => $this->session->userdata('user_id')
		];

		return $this->db->insert('genres', $data);
	}

	public function get_genre($id)
	{
		$query = $this->db->get_where('genres', ['id' => $id]);
		return $query->row();
	}

	public function delete_genre($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('genres');

		return true;
	}
}
