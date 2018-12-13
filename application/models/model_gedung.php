<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_gedung extends CI_Model {
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
	function update($kd_gd)
	{
		$arr['kd_gd']= $this->input->post('kd_gd');
		$arr['nm_gedung']= $this->input->post('nm_gedung');
		$arr['alamat']= $this->input->post('alamat');
		$arr['peta']= $this->input->post('peta');
		$this->db->where(array('kd_gd'=>$kd_gd));
		$this->db->update('gedung', $arr);
		
	}
	function getById_menu($kd_gd)
	{
		return $this->db->get_where('gedung', array('kd_gd'=>$kd_gd))->row();
	}
	function delete($kd_gd)
	{
		$this->db->where(array('kd_gd'=>$kd_gd));
		$this->db->delete('gedung');
	}
}