<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

	}

	public function index()
	{
		$data['booking'] = $this->m_nissan->booklist()->result();
		$data['title'] = 'List Booking Nissan | Datsun';
		$data['page'] = 'List Booking Nissan | Datsun';

		$this->template->load('template', 'booking/index', $data);
	}

	public function view()
	{
		$id = $this->session->userdata('user_id');
		$data['booking'] = $this->m_nissan->booklist_where(array('id_user'=>$id))->result();
		$data['title'] = 'YourList Booking Nissan | Datsun';
		$data['page'] = 'YourList Booking Nissan | Datsun';

		$this->template->load('template', 'booking/index', $data);
	}

	public function detail()
	{
		$id = $this->uri->segment(3);

		$customer = $this->m_nissan->booklist_where(array('id_booking'=>$id))->result();
		foreach ($customer as $key) {
			$data['id'] = $key->user_id;
			$data['nama'] = $key->name;
			$data['brand'] = $key->nama_brand;
			$data['type'] = $key->nama_brand_type;
			$data['jadwal'] = $key->jadwal;

		}

		$data['page'] = 'Detail Booking Nissan | Datsun';
		$data['title'] = 'Detail Booking Nissan | Datsun';

		$this->template->load('template', 'booking/detail', $data);
	}

	public function update( $id = NULL )
	{

	}

	public function delete( $id = NULL )
	{

	}
}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */
