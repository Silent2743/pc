<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class t_menu extends CI_Model {
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
	function update($id_menu)
	{
		$arr['kd_menu']= $this->input->post('kd_menu');
		$arr['kt_menu']= $this->input->post('kt_menu');
		$arr['isi_menu']= $this->input->post('isi_menu');
		$this->db->where(array('id_menu'=>$id_menu));
		$this->db->update('menu', $arr);
		
	}
	function validate()
	{
		$arr['username'] = $this->input->post('username');
		$arr['password'] = $this->input->post('password');
		return $this->db->get_where('admin',$arr)->row();
	}
	function getById_menu($id_menu)
	{
		return $this->db->get_where('menu', array('id_menu'=>$id_menu))->row();
	}
	function delete($id_menu)
	{
		$this->db->where(array('id_menu'=>$id_menu));
		$this->db->delete('menu');
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



}