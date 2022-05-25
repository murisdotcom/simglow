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

			$data['product'] = $this->db->get('product')->result_array();
			$data['customer'] = $this->db->get_where('customer', ['status' => 2])->num_rows();
			$data['stock_in'] = $this->db->get_where('stock_in', 'date')->num_rows();
			$data['stock_out'] = $this->db->get_where('stock_out', 'date')->num_rows();
			$data['allproduct'] = $this->User_model->totalStock();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer');
		}

		public function editProfile()
		{
			$data['title'] = 'Edit Profile | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			// $data['User'] = $this->User_model->getUserById($id);

			$this->form_validation->set_rules('name', 'Name', 'required|trim');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/editProfile', $data);
				$this->load->view('templates/footer');
			} else {
				$name = $this->input->post('name', true);
				$email = $this->input->post('email', true);

				// cek jika ada gambar yang di upload
				$upload_image = $_FILES['image']['name'];
				if ($upload_image) {
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '2048';
					$config['upload_path'] = './assets/img/profile/';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image')) {
						$old_image = $data['user']['image'];
						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/img/profile/' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('image', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				}

				$this->db->set('name', $name);
				$this->db->where('email', $email);
				$this->db->update('user');

				$this->session->set_flashdata('message', 'Profile changed!');
				redirect('user');
			}
		}

		public function changePassword()
		{
			$data['title'] = 'Change Password | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
			$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
			$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/changePassword', $data);
				$this->load->view('templates/footer');
			} else {
				$current_password = $this->input->post('current_password');
				$new_password = $this->input->post('new_password1');
				if (!password_verify($current_password, $data['user']['password'])) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Wrong password!</div>');
					redirect('user/changePassword');
				} else {
					if ($current_password == $new_password) {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						New password cannot be the same as current password!</div>');
						redirect('user/changePassword');
					} else {
						// password sudah benar
						$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

						$this->db->set('password', $password_hash);
						$this->db->where('email', $this->session->userdata('email'));
						$this->db->update('user');

						$this->session->set_flashdata('message', 'Password changed!');
						redirect('user');
					}
				}
			}
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
			$this->session->set_flashdata('message', 'Supplier deleted!');
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
				$this->session->set_flashdata('message', 'Supplier changed!');
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

		public function product()
		{
			$data['title'] = 'Product | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['product'] = $this->User_model->getProduct();
			$data['category'] = $this->db->get('category')->result_array();
			$data['unit'] = $this->db->get('unit')->result_array();

			$this->form_validation->set_rules(
				'barcode',
				'Barcode',
				'required|is_unique[product.barcode]',
				[
					'is_unique' => 'This Barcode has already registered!'
				]
			);
			$this->form_validation->set_rules('name_product', 'Product_Name', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('unit', 'Unit', 'required');
			$this->form_validation->set_rules('price', 'Price', 'required');
			$this->form_validation->set_rules('stock', 'Stock', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/product', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'barcode' => $this->input->post('barcode', true),
					'name_product' => $this->input->post('name_product', true),
					'category' => $this->input->post('category', true),
					'unit' => $this->input->post('unit', true),
					'price' => $this->input->post('price', true),
					'stock' => $this->input->post('stock', true),
					'sold' => '0'
				];
				$this->db->insert('product', $data);
				$this->session->set_flashdata('message', 'New product added!');
				redirect('user/product');
			}
		}

		public function deleteProduct($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('product');
			$this->session->set_flashdata('message', 'Product berhasil dihapus!');
			redirect('user/product');
		}

		public function editProduct($id)
		{
			$data['title'] = 'Edit Product | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['Product'] = $this->User_model->getProductById($id);

			$data['category'] = $this->db->get('category')->result_array();
			$data['unit'] = $this->db->get('unit')->result_array();

			$this->form_validation->set_rules('barcode', 'Barcode', 'required');
			$this->form_validation->set_rules('name_product', 'Product_Name', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('unit', 'Unit', 'required');
			$this->form_validation->set_rules('price', 'Price', 'required');
			$this->form_validation->set_rules('stock', 'Stock', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/editProduct', $data);
				$this->load->view('templates/footer');
			} else {
				$this->User_model->editProduct();
				$this->session->set_flashdata('message', 'Product berhasil diubah!');
				redirect('user/product');
			}
		}

		public function category()
		{
			$data['title'] = 'Category | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['category'] = $this->db->get('category')->result_array();

			$this->form_validation->set_rules(
				'category',
				'Category',
				'required|is_unique[product.barcode]',
				[
					'is_unique' => 'This Barcode has already registered!'
				]
			);

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/category', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'category' => $this->input->post('category', true)
				];
				$this->db->insert('category', $data);
				$this->session->set_flashdata('message', 'New category added!');
				redirect('user/category');
			}
		}

		public function deleteCategory($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('category');
			$this->session->set_flashdata('message', 'Category berhasil dihapus!');
			redirect('user/category');
		}

		public function editCategory($id)
		{
			$data['title'] = 'Edit Category | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['Category'] = $this->User_model->getCategoryById($id);

			$this->form_validation->set_rules('category', 'Category', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/editCategory', $data);
				$this->load->view('templates/footer');
			} else {
				$this->User_model->editCategory();
				$this->session->set_flashdata('message', 'Category berhasil diubah!');
				redirect('user/category');
			}
		}

		public function unit()
		{
			$data['title'] = 'Unit | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['unit'] = $this->db->get('unit')->result_array();

			$this->form_validation->set_rules(
				'unit',
				'unit',
				'required|is_unique[product.barcode]',
				[
					'is_unique' => 'This Barcode has already registered!'
				]
			);

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/unit', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'unit' => $this->input->post('unit', true)
				];
				$this->db->insert('unit', $data);
				$this->session->set_flashdata('message', 'New unit added!');
				redirect('user/unit');
			}
		}

		public function deleteUnit($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('unit');
			$this->session->set_flashdata('message', 'Unit berhasil dihapus!');
			redirect('user/unit');
		}

		public function editUnit($id)
		{
			$data['title'] = 'Edit Unit | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['Unit'] = $this->User_model->getUnitById($id);

			$this->form_validation->set_rules('unit', 'Unit', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/editUnit', $data);
				$this->load->view('templates/footer');
			} else {
				$this->User_model->editUnit();
				$this->session->set_flashdata('message', 'Unit berhasil diubah!');
				redirect('user/Unit');
			}
		}

		public function stock_in()
		{
			$data['title'] = 'Stock In | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['stock_in'] = $this->db->get('stock_in')->result_array();
			$data['supplier'] = $this->db->get('supplier')->result_array();
			$data['product'] = $this->db->get('product')->result_array();

			$this->form_validation->set_rules('date', 'Date', 'required');
			$this->form_validation->set_rules('barcode', 'Barcode', 'required');
			$this->form_validation->set_rules('total', 'Total', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('supplier', 'Supplier', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/stock_in', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'date' => time(),
					'barcode' => $this->input->post('barcode', true),
					'total' => $this->input->post('total', true),
					'description' => $this->input->post('description', true),
					'supplier' => $this->input->post('supplier', true)
				];
				$this->db->insert('stock_in', $data);
				$this->session->set_flashdata('message', 'New stock added!');
				redirect('user/stock_in');
			}
		}

		public function stock_out()
		{
			$data['title'] = 'Stock Out | MS GLOW';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$data['stock_out'] = $this->db->get('stock_out')->result_array();
			$data['product'] = $this->db->get('product')->result_array();

			$this->form_validation->set_rules('date', 'Date', 'required');
			$this->form_validation->set_rules('barcode', 'Barcode', 'required');
			$this->form_validation->set_rules('total', 'Total', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('user/stock_out', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'date' => time(),
					'barcode' => $this->input->post('barcode', true),
					'total' => $this->input->post('total', true),
					'description' => $this->input->post('description', true),
					'supplier' => $this->input->post('supplier', true)
				];
				$this->db->insert('stock_out', $data);
				// $this->User_model->stockOut();
				$this->session->set_flashdata('message', 'Stocked Out!');
				redirect('user/stock_out');
			}
		}
	}
