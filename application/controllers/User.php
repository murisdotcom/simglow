 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class User extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			// is_logged_in();

			$this->load->model('User_model');
		}

		public function index()
		{
			$data['title'] = 'Dashboard | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer');
		}

		public function supplier()
		{
			$data['title'] = 'Supplier | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['supplier'] = $this->db->get('supplier')->result_array();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('phone_number', 'Phone_number', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/supplier', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'name' => $this->input->post('name', true),
					'address' => $this->input->post('address', true),
					'phone_number' => $this->input->post('phone_number', true)
				];
				$this->db->insert('supplier', $data);
				$this->session->set_flashdata('message', 'New supplier added!');
				redirect('user/supplier');
			}
		}

		public function deleteSupplier($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('supplier');
			$this->session->set_flashdata('message', 'Supplier berhasil dihapus!');
			redirect('user/supplier');
		}

		public function editSupplier($id)
		{
			$data['title'] = 'Edit Supplier | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['Supplier'] = $this->User_model->getSupplierById($id);

			$data['supplier'] = $this->db->get('supplier')->result_array();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('phone_number', 'phone_number', 'required|numeric');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/editSupplier', $data);
				$this->load->view('templates/footer');
			} else {
				$this->User_model->editSupplier();
				$this->session->set_flashdata('message', 'Supplier berhasil diubah!');
				redirect('user/supplier');
			}
		}

		public function customer()
		{
			$data['title'] = 'Customer | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['status'] = $this->db->get('status_customer')->result_array();
			$data['customer'] = $this->User_model->getCustomer();
			$data['gender'] = $this->db->get('gender')->result_array();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('phone_number', 'Phone_number', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/customer', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'name' => $this->input->post('name', true),
					'gender' => $this->input->post('gender', true),
					'address' => $this->input->post('address', true),
					'phone_number' => $this->input->post('phone_number', true),
					'status' => $this->input->post('status', true)
				];
				$this->db->insert('customer', $data);
				$this->session->set_flashdata('message', 'New customer added!');
				redirect('user/customer');
			}
		}

		public function deleteCustomer($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('customer');
			$this->session->set_flashdata('message', 'Customer berhasil dihapus!');
			redirect('user/customer');
		}

		public function editCustomer($id)
		{
			$data['title'] = 'Edit Customer | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['Customer'] = $this->User_model->getCustomerById($id);

			$data['status'] = $this->db->get('status_customer')->result_array();
			$data['gender'] = $this->db->get('gender')->result_array();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('phone_number', 'phone_number', 'required|numeric');
			$this->form_validation->set_rules('status', 'Status', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/editCustomer', $data);
				$this->load->view('templates/footer');
			} else {
				$this->User_model->editCustomer();
				$this->session->set_flashdata('message', 'Customer berhasil diubah!');
				redirect('user/customer');
			}
		}
	}
