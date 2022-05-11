<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function getSupplierById($id)
	{
		return $this->db->get_where('supplier', ['id' => $id])->row_array();
	}

	public function editSupplier()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"address" => $this->input->post('address', true),
			"phone_number" => $this->input->post('phone_number', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('supplier', $data);
	}
}
