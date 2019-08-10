<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sparepart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['sparepart'] = $this->db->get('tbl_sparepart')->result();
        $data['page'] = 'List Sparepart | Nissan Datsun';
        $data['title'] = 'List Sparepart Nissan | Datsun';
        $this->template->load('template', 'sparepart/index', $data);
    }

    // Add a new item
    public function add()
    {
        if ($this->input->post('submit', TRUE) == 'Submit') {
            #validasi
            $this->form_validation->set_rules('name', 'Nama Sparepart', 'trim|required');
            $this->form_validation->set_rules('qty', 'Quantity Sparepart', 'trim|required|numeric');
            $this->form_validation->set_rules('harga', 'Harga Sparepart', 'trim|required|numeric');

            if ($this->form_validation->run() == TRUE) {

                $data = array(
                    'nama_sparepart' => $this->input->post('name', TRUE),
                    'qty' => $this->input->post('qty', TRUE),
                    'harga' => $this->input->post('harga', TRUE),
                );
                
                $this->m_nissan->insert('tbl_sparepart', $data);
                $this->session->set_flashdata('message','
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Sparepart Berhasil Ditambah.
                    </div>'); 
                redirect('sparepart','refresh');

            } 
        }
        $data['page'] = 'Sparepart Nissan | Datsun';
        $data['title'] = 'Sparepart Nissan | Datsun';
        $this->template->load('template', 'sparepart/add', $data);
    }

    //Update one item
    public function update()
    {
        $id = $this->uri->segment(3);

        if ($this->input->post('submit', TRUE) == 'Submit') {
            #validasi
            $this->form_validation->set_rules('name', 'Nama Sparepart', 'trim|required');
            $this->form_validation->set_rules(
                'qty',
                'Qty Sparepart',
                'required|trim|numeric'
            );
            $this->form_validation->set_rules(
                'harga',
                'Harga Sparepart',
                'required|trim|numeric'
            );

            if ($this->form_validation->run() == TRUE) {

                $update = array(
                   'nama_sparepart' => $this->input->post('name', TRUE),
                   'qty' => $this->input->post('qty', TRUE),
                   'harga' => $this->input->post('harga', TRUE),
               );
                
                $this->m_nissan->update('tbl_sparepart', $update, array('id_sparepart'=>$id));
                $this->session->set_flashdata('message','
                    <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Data Sparepart berhasil Di Update.
                    </div>'); 
                redirect('sparepart','refresh');

            } 
        }

        $sparepart = $this->m_nissan->get_where('tbl_sparepart', array('id_sparepart'=>$id))->result();
        foreach ($sparepart as $key) {
            $data['id_sparepart'] = $key->id_sparepart;
            $data['name'] = $key->nama_sparepart;
            $data['qty'] = $key->qty;
            $data['harga'] = $key->harga;
        }

        $data['page'] = 'Edit Sparepart Nissan | Datsun';
        $data['title'] = 'Edit Sparepart Nissan | Datsun';

        $this->template->load('template', 'sparepart/update', $data);
    }

    //Delete one item
    public function delete( $id = NULL )
    {
        $where = array('id_sparepart' => $id);
        $this->m_nissan->delete($where, 'tbl_sparepart');
        // echo "<script>alert('Data berhasil dihapus')</script>;";

        $this->session->set_flashdata('message','
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            Data Sparepart berhasil dihapus.
            </div>');  
        redirect('sparepart','refresh');
    }
}

/* End of file Sparepart.php */
/* Location: ./application/controllers/Sparepart.php */
