<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function getAdmin()
	{
		$query = "SELECT `user`.*, `user_role`.`role`
							FROM `user` JOIN `user_role`
							ON `user`.`role_id` = `user_role`.`id`
							";
		return $this->db->query($query)->result_array();
	}

	public function getAdminById($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function editAdmin()
	{
		$is_active =  $this->input->post('is_active', true);
		$active = 0;

		if ($is_active == true) {
			$active = 1;
		} else {
			$active = 0;
		}

		$data = [
			"name" => $this->input->post('name', true),
			"email" => $this->input->post('email', true),
			'role_id' => $this->input->post('role_id'),
			"is_active" => $active
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}

	public function editRole()
	{
		$data = [
			"role" => $this->input->post('role', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_role', $data);
	}

	public function getRoleById($id)
	{
		return $this->db->get_where('user_role', ['id' => $id])->row_array();
	}
}
