<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pesan extends CI_Model {
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
	function update($username)
	{
		$arr['username']= $this->input->post('username');
		$arr['kd_jasa']= $this->input->post('kd_jasa');
		$arr['kd_paket']= $this->input->post('kd_paket');
		$arr['tgl_pesan']= $this->input->post('tgl_pesan');
		$arr['status_pesan']= $this->input->post('status_pesan');
		$arr['status_bayar']= $this->input->post('status_bayar');
		$arr['kd_gd']= $this->input->post('kd_gd');
		$arr['kd_rs']= $this->input->post('kd_rs');
		$this->db->where(array('username'=>$username));
		$this->db->update('pesan', $arr);
	}
	function GetByUsername($username)
	{
		return $this->db->get_where('pesan', array('username'=>$username))->row();
	}
}