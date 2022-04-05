 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class User extends CI_Controller
	{

		public function index()
		{
			$data['title'] = 'User | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer', $data);
		}
	}
