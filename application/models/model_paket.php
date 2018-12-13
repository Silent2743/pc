<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_paket extends CI_Model {
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
	function update($id_paket)
	{
		$arr['id_paket']= $this->input->post('id_paket');
		$arr['kd_paket']= $this->input->post('kd_paket');
		$arr['porsi']= $this->input->post('porsi');
		$this->db->where(array('id_paket'=>$id_paket));
		$this->db->update('paket', $arr);
		
	}
	function getById_paket($id_paket)
	{
		return $this->db->get_where('paket', array('id_paket'=>$id_paket))->row();
	}
	function delete($id_paket)
	{
		$this->db->where(array('id_paket'=>$id_paket));
		$this->db->delete('paket');
	}
}