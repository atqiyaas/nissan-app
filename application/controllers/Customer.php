<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['customer'] = $this->m_nissan->get_where('tbl_user', array('role_id'=>'2'))->result();

		$data['page'] = 'List Customer Nissan | Datsun';
		$data['title'] = 'List Customer Nissan | Datsun';

		$this->template->load('template', 'customer/index', $data);

	}

	public function detail()
	{
		$id = $this->uri->segment(3);

		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$customer = $this->m_nissan->get_where('tbl_user', array('user_id'=>$id))->result();
		foreach ($customer as $key) {
			$data['id'] = $key->user_id;
			$data['nama'] = $key->name;
			$data['email'] = $key->email;
			$data['image'] = $key->image;
			$data['phone'] = $key->phone;
			$data['address'] = $key->address;
			$data['registered'] = $key->date_created;

		}

		$data['page'] = 'Detail Customer Nissan | Datsun';
		$data['title'] = 'Detail Customer Nissan | Datsun';

		$this->template->load('template', 'customer/detail', $data);
	}

	public function add()
	{

		if ($this->input->post('submit', TRUE) == 'Submit') {
			#validasi
			$this->form_validation->set_rules('name', 'Nama Customer', 'trim|required');
			$this->form_validation->set_rules(
				'email',
				'Email',
				'required|trim|valid_email'
			);
			$this->form_validation->set_rules(
				'phone',
				'No. Telephone',
				'required|trim|numeric'
			);
			$this->form_validation->set_rules('address', 'Alamat Customer', 'trim|required');


			if ($this->form_validation->run() == TRUE) {

				$data = array(
					'name' => $this->input->post('name', TRUE),
					'email' => $this->input->post('email', TRUE),
					'phone' => $this->input->post('phone', TRUE),
					'address' => $this->input->post('address', TRUE),
					'image' => 'default.jpg',
					'password' => password_hash('Abcd1234', PASSWORD_DEFAULT),
					'role_id' => '2',
					'is_active' => '1',
					'date_created' => time(),
					'update_at' => time()
				);
				
				$this->m_nissan->insert('tbl_user', $data);
				$this->session->set_flashdata('message','
					<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					Data Customer berhasil Di-Tambah.
					</div>'); 
				redirect('customer','refresh');
			} else {

				$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
				$data['customer'] = $this->m_nissan->get_where('tbl_user', array('role_id'=>'2'))->result();
				$data['page'] = 'List Customer Nissan | Datsun';
				$data['title'] = 'List Customer Nissan | Datsun';

				$this->template->load('template', 'customer/index', $data);

			}
		}

	}


	public function update()
	{
		$id = $this->uri->segment(3);

		if ($this->input->post('submit', TRUE) == 'Submit') {
			#validasi
			$this->form_validation->set_rules('name', 'Nama Customer', 'trim|required');
			$this->form_validation->set_rules(
				'email',
				'Email',
				'required|trim|valid_email'
			);
			$this->form_validation->set_rules(
				'phone',
				'No. Telephone',
				'required|trim|numeric'
			);
			$this->form_validation->set_rules('address', 'Alamat Customer', 'trim|required');


			if ($this->form_validation->run() == TRUE) {

				$update = array(
					'name' => $this->input->post('name', TRUE),
					'email' => $this->input->post('email', TRUE),
					'phone' => $this->input->post('phone', TRUE),
					'address' => $this->input->post('address', TRUE),
				);
				
				$this->m_nissan->update('tbl_user', $update, array('user_id'=>$id));
				$this->session->set_flashdata('message','
					<div class="alert alert-warning alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					Data Customer berhasil Di-update.
					</div>'); 
				redirect('customer','refresh');

			} 
		}

		$customer = $this->m_nissan->get_where('tbl_user', array('user_id'=>$id))->result();
		foreach ($customer as $key) {
			$data['user_id'] = $key->user_id;
			$data['name'] = $key->name;
			$data['email'] = $key->email;
			$data['image'] = $key->image;
			$data['phone'] = $key->phone;
			$data['address'] = $key->address;
			$data['registered'] = $key->date_created;
		}

		$data['page'] = 'Edit Customer Nissan | Datsun';
		$data['title'] = 'Edit Customer Nissan | Datsun';

		$this->template->load('template', 'customer/update', $data);
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$where = array('user_id' => $id);
		$this->m_nissan->delete($where, 'tbl_user');

		$this->session->set_flashdata('message','
			<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Data Customer berhasil dihapus.
			</div>');  
		redirect('customer','refresh');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */