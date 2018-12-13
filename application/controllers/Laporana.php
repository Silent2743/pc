<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporana extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('pesan');
		$this->load->model('model_pesan');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_pesan->ambil('pesan');
		$this->load->view('admin/laporana', $data);

	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
		function delete ($username)
	{
		$this->cek_login();
		$this->model_pesan->delete($username);
		redirect ('Laporana');
	}

	public function update_lap($username)
	{
		$data['data']= $this->model_pesan->GetByUsername($username);
		$data['header']= "Halaman Update Laporan ";
		$this->load->view('admin/m_lap', $data);
	}
	public function save_update($username)
	{
		$this->model_pesan->update($username);
		redirect ('admin/m_lap');
	}

}