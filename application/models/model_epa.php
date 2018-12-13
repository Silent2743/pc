<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_epa extends CI_Model {
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
		$arr['nama']= $this->input->post('nama');
		$arr['email']= $this->input->post('email');
		$arr['password']= $this->input->post('password');
		$this->db->where(array('username'=>$username));
		$this->db->update('admin', $arr);
		
	}
	function GetByUsername($username)
	{
		return $this->db->get_where('admin', array('username'=>$username))->row();
	}
	function GetByUsernamep($username)
	{
		return $this->db->get_where('anggota', array('username'=>$username))->row();
	}
}