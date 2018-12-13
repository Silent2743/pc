<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_rias extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function insert($table = '', $data = '')
	{
	   $this->db->insert($table, $data);
	}
	function ambil($table)
	{
		$this->db->from($table);
		return $this->db->get();
	}
	function dimana($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}
	function update($kd_rs)
	{
		$arr['kd_rs']= $this->input->post('kd_rs');
		$arr['nm_rias']= $this->input->post('nm_rias');
		$arr['alamat']= $this->input->post('alamat');
		$arr['peta']= $this->input->post('peta');
		$this->db->where(array('kd_rs'=>$kd_rs));
		$this->db->update('rias', $arr);
		
	}
	function getByKd_rs($kd_rs)
	{
		return $this->db->get_where('rias', array('kd_rs'=>$kd_rs))->row();
	}
	function delete($kd_rs)
	{
		$this->db->where(array('kd_rs'=>$kd_rs));
		$this->db->delete('rias');
	}
}