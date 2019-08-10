<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
	}

	public function index()
	{
		$data['mobil'] = $this->db->get('tbl_brand')->result();
		$data['join'] = $this->m_nissan->join1('tbl_brand', 'tbl_brand_type', 'tbl_brand.id_brand=tbl_brand_type.id_brand');
		$data['title'] = 'Dashboard Page';
		$this->template->load('template2', 'user/index', $data);
	}

	public function booking_keluhan()
	{
		if ($this->input->post('submit', TRUE) == 'Submit') {
			#validasi
			$this->form_validation->set_rules('type2', 'Brand dan Type Brand Car', 'trim|required');
			$this->form_validation->set_rules('date', 'Date Service', 'trim|required');
			$this->form_validation->set_rules('time', 'Time Service', 'trim|required');
			$this->form_validation->set_rules('nopol', 'Nomor Kendaraan', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				$date = $this->input->post('date', TRUE);
				$time = $this->input->post('time', TRUE);

				$d = new DateTime($date.' '.$time.':00');

				$booking = array(
					'jadwal' => $d->getTimestamp(),
					'id_kendaraan' => $this->input->post('type', TRUE),
					'nopol' => $this->input->post('nopol', TRUE),
					'id_user' => $this->session->userdata('user_id'),
					'create_at' => time(),
					'id_service' => 1,
				);
				
				$this->m_nissan->insert('tbl_booking', $booking);
				$this->session->set_flashdata('message','
					<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					Berhasil Booking Service (keluhan).
					</div>'); 
				redirect('user','refresh');

			} 
		}
	}

	public function booking_berkala()
	{
		if ($this->input->post('submit', TRUE) == 'Submit') {
			#validasi
			$this->form_validation->set_rules('type', 'Brand dan Type Brand Car', 'trim|required');
			$this->form_validation->set_rules('date', 'Date Service', 'trim|required');
			$this->form_validation->set_rules('time', 'Time Service', 'trim|required');
			$this->form_validation->set_rules('nopol', 'Nomor Kendaraan', 'trim|required');
			$this->form_validation->set_rules('km', 'Speedometer', 'trim|required|numeric');

			if ($this->form_validation->run() == TRUE) {

				$date = $this->input->post('date', TRUE);
				$time = $this->input->post('time', TRUE);

				$d = new DateTime($date.' '.$time.':00');

				$booking = array(
					'jadwal' => $d->getTimestamp(),
					'id_kendaraan' => $this->input->post('type', TRUE),
					'id_user' => $this->session->userdata('user_id'),
					'nopol' => $this->input->post('nopol', TRUE),
					'speedometer' => $this->input->post('km', TRUE),
					'create_at' => time(),
					'id_service' => 2,
				);
				
				$this->m_nissan->insert('tbl_booking', $booking);
				$this->session->set_flashdata('message','
					<div class="alert alert-success alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					Berhasil Booking Service (berkala).
					</div>'); 
				redirect('user','refresh');

			} 
		}
	}

}
