<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nissan extends CI_Model {

	function get_all($table)
	{
		$this->db->from($table);
		return $this->db->get();
	}

	function get_all_desc($table, $title)
	{
		$this->db->from($table);
		$this->db->order_by($title, 'desc');
		return $this->db->get();
	}

	function insert($table='', $data='')
	{
		$this->db->insert($table, $data);
	}

	function update($table='', $data='', $where='')
	{
		$this->db->update($table, $data, $where);
	}

	function get_where($table='', $where='')
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	function get_datsun($table='',$table2='',$rules='',$where='')
	{
		$this->db->from($table);
		$this->db->join($table2, $rules);
		$this->db->where($where);

		return $this->db->get();
	}

	function get_car($table='',$table2='',$rules='')
	{
		$this->db->from($table);
		$this->db->join($table2, $rules);

		return $this->db->get();
	}

	function booklist()
	{
		$this->db->from('tbl_booking');
		$this->db->join('tbl_user', 'tbl_user.user_id = tbl_booking.id_user');
		$this->db->join('tbl_brand_type', 'tbl_brand_type.id_brand_type = tbl_booking.id_kendaraan');
		$this->db->join('tbl_brand', 'tbl_brand.id_brand = tbl_brand_type.id_brand');
		$this->db->join('tbl_service', 'tbl_service.id_service = tbl_booking.id_service');
		return $this->db->get();
	}

	function booklist_where($where)
	{
		$this->db->from('tbl_booking');
		$this->db->join('tbl_user', 'tbl_user.user_id = tbl_booking.id_user');
		$this->db->join('tbl_brand_type', 'tbl_brand_type.id_brand_type = tbl_booking.id_kendaraan');
		$this->db->join('tbl_brand', 'tbl_brand.id_brand = tbl_brand_type.id_brand');
		$this->db->join('tbl_service', 'tbl_service.id_service = tbl_booking.id_service');
		$this->db->where($where);
		$this->db->order_by('jadwal', 'desc');

		return $this->db->get();
	}


	function get_meeting($where='')
	{
		$this->db->from('tbl_main');
		$this->db->join('tbl_room', 'tbl_room.id_main = tbl_main.id_main', 'left');
		$this->db->where($where);

		return $this->db->get();
	}

	function get_switch($where='')
	{
		$this->db->from('tbl_main');
		$this->db->join('tbl_switch', 'tbl_switch.id_main = tbl_main.id_main', 'left');
		$this->db->where($where);
		return $this->db->get();
	}

	function get_visman($where='')
	{
		$this->db->from('tbl_main');
		$this->db->join('tbl_visman', 'tbl_visman.id_main = tbl_main.id_main', 'left');
		$this->db->where($where);
		return $this->db->get();
	}

	function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function check_login($table, $field1, $field2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->where($field2);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->result();
		}
	}

	function logged_in()
	{
		return $this->session->userdata('id_user');
	}

	function join1($table1,$table2,$value)
	{
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2, $value);
		$query = $this->db->get();
		return $query->result();
	}


	function sum($field,$table)
	{
		$this->db->select('sum('.$field.') as total');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->row()->total;
	}

	function avg($field,$table)
	{
		$this->db->select('avg('.$field.') as total');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->row()->total;
	}

	function simpan_upload($image){
		$data = array(
			'avatar' => $image
		);  
		$result= $this->db->update('tbl_user',$data);
		return $result;
	}

	function login_user()
	{
		return $this->session->userdata('id_user');
	}

}

/* End of file Rsia.php */
/* Location: ./application/models/Rsia.php */ 