<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

	}

	public function index()
	{

		$data['all_car'] = $this->m_nissan->get_car('tbl_brand','tbl_brand_type','tbl_brand.id_brand=tbl_brand_type.id_brand')->result();
		$data['nissan'] = $this->m_nissan->get_datsun('tbl_brand','tbl_brand_type','tbl_brand.id_brand=tbl_brand_type.id_brand',array('nama_brand'=>'Nissan'))->result();
		$data['datsun'] = $this->m_nissan->get_datsun('tbl_brand','tbl_brand_type','tbl_brand.id_brand=tbl_brand_type.id_brand',array('nama_brand'=>'Datsun'))->result();


		$data['title'] = 'List Mobil Nissan | Datsun';
		$data['page'] = 'List Mobil Nissan | Datsun';

		$this->template->load('template', 'mobil/index', $data);
	}

	public function datsun()
	{
		$data['datsun'] = $this->m_nissan->get_datsun('tbl_brand','tbl_brand_type','tbl_brand.id_brand=tbl_brand_type.id_brand',array('nama_brand'=>'Datsun'))->result();
		$data['page'] = 'List Mobil | Datsun';
		$data['title'] = 'List Mobil | Datsun';
		$this->template->load('template', 'mobil/datsun', $data);
	}

	public function nissan()
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['nissan'] = $this->m_nissan->get_datsun('tbl_brand','tbl_brand_type','tbl_brand.id_brand=tbl_brand_type.id_brand',array('nama_brand'=>'Nissan'))->result();
		$data['page'] = 'List Mobil | Nissan';
		$data['title'] = 'List Mobil | Nissan';
		$this->template->load('template', 'mobil/nissan', $data);
	}

	public function add()
	{
		if ($this->input->post('submit', TRUE) == 'Submit') {
			#validasi
			$this->form_validation->set_rules('brand', 'Nama Brand', 'trim|required');
			$this->form_validation->set_rules('type', 'Nama type brand', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				$data = array(
					'nama_brand_type' => $this->input->post('type', TRUE),
					'id_brand' => $this->input->post('brand', TRUE),
				);
				
				$this->m_nissan->insert('tbl_brand_type', $data);
				$this->session->set_flashdata('message','
					<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					Data Mobil berhasil Ditambah.
					</div>'); 
				redirect('mobil','refresh');

			} 
		}
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		if ($this->input->post('submit', TRUE) == 'Submit') {
			#validasi
			$this->form_validation->set_rules('brand', 'Nama Brand', 'trim|required');
			$this->form_validation->set_rules('type', 'Nama type brand', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				$update = array(
					'nama_brand_type' => $this->input->post('type', TRUE),
					'id_brand' => $this->input->post('brand', TRUE),
				);
				
				$this->m_nissan->update('tbl_brand_type', $update, array('id_brand_type'=>$id));
				$this->session->set_flashdata('message','
					<div class="alert alert-warning alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					Data Mobil berhasil Diupdate.
					</div>'); 
				redirect('mobil','refresh');

			} 
		}
		$mobil=$this->m_nissan->get_where('tbl_brand_type', array('id_brand_type'=>$id))->result();
		foreach ($mobil as $key) {
			$data['brand'] = $key->id_brand;
			$data['type'] = $key->id_brand_type;
			$data['nama'] = $key->nama_brand_type;
		}
		$data['page'] = 'Edit Mobil Nissan | Datsun';
		$data['title'] = 'Edit Mobil Nissan | Datsun';
		$this->template->load('template', 'mobil/update', $data);
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$where = array('id_brand_type' => $id);
		$this->m_nissan->delete($where, 'tbl_brand_type');
		// echo "<script>alert('Data berhasil dihapus')</script>;";

		$this->session->set_flashdata('message','
			<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Data berhasil dihapus.
			</div>');  
		redirect('mobil','refresh');
	}

}

/* End of file Mobil.php */
/* Location: ./application/controllers/Mobil.php */