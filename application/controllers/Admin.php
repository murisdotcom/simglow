<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['title'] = 'Admin | MS GLOW';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['Admin'] = $this->Admin_model->getAdmin();
		$data['admin'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'password to short'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
			'matches' => 'Password dont match!'
		]);

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => htmlspecialchars($this->input->post('role_id', true)),
				'is_active' => htmlspecialchars($this->input->post('is_active', true)),
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', 'New admin added!');
			redirect('admin');
		}
	}

	public function editAdmin($id)
	{
		$data['title'] = 'Edit Admin | MS GLOW';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['admin'] = $this->Admin_model->getAdminById($id);

		$data['Admin'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('role_id', 'Role', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/editAdmin', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Admin_model->editAdmin();
			$this->session->set_flashdata('message', 'Data berhasil diubah!');
			redirect('admin');
		}
	}

	public function deleteAdmin($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
		$this->session->set_flashdata('message', 'Admin berhasil dihapus!');
		redirect('admin');
	}

	public function role()
	{
		$data['title'] = 'Role Access | MS GLOW';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('role', 'Name', 'required|trim');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true))
			];

			$this->db->insert('user_role', $data);
			$this->session->set_flashdata('message', 'New role added!');
			redirect('role');
		}
	}

	public function editRole($id)
	{
		$data['title'] = 'Edit Role | MS GLOW';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['role'] = $this->Admin_model->getRoleById($id);

		$this->form_validation->set_rules('role', 'Role', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/editRole', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Admin_model->editRole();
			$this->session->set_flashdata('message', 'Role berhasil diubah!');
			redirect('role');
		}
	}

	public function deleteRole($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_role');
		$this->session->set_flashdata('message', 'Role berhasil dihapus!');
		redirect('role');
	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access | MS GLOW';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer');
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];
		$result = $this->db->get_where('user_access_menu', $data);
		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}
		$this->session->set_flashdata('message', 'Access changed!');
	}
}
