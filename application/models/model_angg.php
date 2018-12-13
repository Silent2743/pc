<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_angg extends CI_Model {
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
		$arr['pass']= $this->input->post('pass');
		$arr['nama']= $this->input->post('nama');
		$arr['alamat']= $this->input->post('alamat');
		$arr['jen_kel']= $this->input->post('jen_kel');
		$arr['no_telp']= $this->input->post('no_telp');
		$arr['email']= $this->input->post('email');
		
		$this->db->where(array('username'=>$username));
		$this->db->update('anggota', $arr);
		
	}
	function GetByUsername($username)
	{
		return $this->db->get_where('anggota', array('username'=>$username))->row();
	}

	function validate()
	{
		$arr['username'] = $this->input->post('username');
		$arr['pass'] = $this->input->post('pass');
		return $this->db->get_where('anggota',$arr)->row();
	}

	public function checklogin($table, $field1, $field2){
       $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
    function delete($username)
	{
		$this->db->where(array('username'=>$username));
		$this->db->delete('pesan');
	}

	
}