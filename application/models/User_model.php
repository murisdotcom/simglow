<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	// public function getUserById($id)
	// {
	// 	return $this->db->get_where('user', ['id' => $id])->row_array();
	// }

	// public function editProfile()
	// {
	// 	$data = [
	// 		"name" => $this->input->post('name', true)

	// 	];

	// 	$this->db->where('email', $this->input->post('email'));
	// 	$this->db->update('user', $data);
	// }

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

	public function getProduct()
	{
		$query = "SELECT `product`.*, `category`.`category`,`unit`.`unit`
							FROM `product`
							JOIN `category` ON `product`.`category`=`category`.`id`
							JOIN `unit` ON `product`.`unit` = `unit`.`id`
							";
		return $this->db->query($query)->result_array();
	}

	public function getProductById($id)
	{
		return $this->db->get_where('product', ['id' => $id])->row_array();
	}

	public function editProduct()
	{
		$data = [
			"barcode" => $this->input->post('barcode', true),
			"name_product" => $this->input->post('name_product', true),
			"category" => $this->input->post('category', true),
			"unit" => $this->input->post('unit', true),
			"price" => $this->input->post('price', true),
			"stock" => $this->input->post('stock', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('product', $data);
	}

	public function getCategoryById($id)
	{
		return $this->db->get_where('category', ['id' => $id])->row_array();
	}

	public function editCategory()
	{
		$data = [
			"category" => $this->input->post('category', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('category', $data);
	}

	public function getUnitById($id)
	{
		return $this->db->get_where('unit', ['id' => $id])->row_array();
	}

	public function editUnit()
	{
		$data = [
			"unit" => $this->input->post('unit', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('unit', $data);
	}

	public function stockOut($id)
	{
		$this->db->select('stock');
		$this->db->where('id', $id);
		return $this->db->get('product')->row();
	}
}
