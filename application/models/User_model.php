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

	// public function getStatus()
	// {
	// 	$query = "SELECT `customer`.*, `status_customer`.*
	// 						FROM `customer` JOIN `status_customer`
	// 						ON `customer`.`status` = `status_customer`.`id`
	// 						";
	// 	return $this->db->query($query)->result_array();
	// }

	public function getCustomer()
	{
		$query = "SELECT `customer`.*, `status_customer`.`status`, `gender`.`gender`
							FROM `customer`
							JOIN `gender` ON `customer`.`gender` = `gender`.`id`
							JOIN `status_customer` ON `customer`.`status` = `status_customer`.`id`
							";
		return $this->db->query($query)->result_array();
	}

	public function getCustomerById($id)
	{
		return $this->db->get_where('customer', ['id' => $id])->row_array();
	}

	public function editCustomer()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"gender" => $this->input->post('gender', true),
			"address" => $this->input->post('address', true),
			"phone_number" => $this->input->post('phone_number', true),
			"status" => $this->input->post('status', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('customer', $data);
	}
}
