<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_hrg extends CI_Model {
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
	function update($id_hrg)
	{
		$arr['id_hrg']= $this->input->post('id_hrg');
		$arr['id_jasa']= $this->input->post('id_jasa');
		$arr['kd_paket']= $this->input->post('kd_paket');
		$arr['hrg']= $this->input->post('hrg');
		$this->db->where(array('id_hrg'=>$id_hrg));
		$this->db->update('hrg', $arr);
		
	}
	function getByid_hrg($id_hrg)
	{
		return $this->db->get_where('hrg', array('id_hrg'=>$id_hrg))->row();
	}
	function delete($id_hrg)
	{
		$this->db->where(array('id_hrg'=>$id_hrg));
		$this->db->delete('hrg');
	}
}