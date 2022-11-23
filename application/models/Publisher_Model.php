<?php

class Publisher_Model extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->get('publishers');
		return $query->result();
	}

	public function get_item($id)
	{
		$query = $this->db->get_where('publishers', ['id' => $id]);
		return $query->row();
	}

	public function create_item()
	{
		$item['name'] = $this->input->post('name');

		$this->db->insert('publishers', $item);
	}

	public function update_item($id)
	{
		$item['name'] = $this->input->post('name');

		$this->db->where('id', $id);
		$this->db->update('publishers', $item);
	}

	public function delete_item($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('publishers');
	}
}