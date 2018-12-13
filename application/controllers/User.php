<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->model('model_angg');
	}
	public function index()
	{
		$this->ceklogin();
		$data['data'] = $this->model_angg->ambil('anggota');
	   $this->template->user('user/d_user', $data);
	}

	public function logout()
	{
	$this->load->library('session');
	$this->session->sess_destroy();
	$this->load->view('loginuser');
	}

	public function update_angg()
	{
		$this->load->view('User/e_angg');

	}
public function save_angg($username)
	{
		$this->cek_login();
		$this->model_angg->update($username);
		redirect ('User');
	}
	
	
	public function ceklogin()
	{
		if(!$this->session->userdata('username'))
		redirect('userlogin');
	}

	
	
}

?>