<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('pesan');
		$this->load->model('model_angg');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_angg->ambil('pesan');
		$this->load->view('user/laporan', $data);
		$this->load->view('admin/laporana', $data);

	}
	
	
	
	function delete ($username)
	{
		$this->cek_login();
		$this->model_angg->delete($username);
		redirect ('Laporan');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
}