<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in();

		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['title'] = 'Admin | MS GLOW';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['Admin'] = $this->Admin_model->getAdmin();
		// $data['admin'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}
}
