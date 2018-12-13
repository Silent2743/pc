<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EPA extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('admin');
		$this->load->model('model_epa');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_epa->ambil('admin');
		$this->load->view('admin/epa', $data);

	}
	public function add_epa()
	{
		$this->cek_login();
		if ($this->input->post('submit', TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama', 'Nama ', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');


			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'username' => $this->input->post('username', TRUE),
						'nama' => $this->input->post('nama', TRUE),
						'email' => $this->input->post('email', TRUE),
						'password' => $this->input->post('password', TRUE)
					);
					$this->model_rias->insert('admin', $items);
				}
			}
		$data['username'] = $this->input->post('username', TRUE);
		$data['nama'] = $this->input->post('nama', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		$data['password'] = $this->input->post('password', TRUE);
		$data['header']= "Halaman Tambah Admin ";
		$this->load->view('admin/f_epa', $data);

	}
	public function update_epa($username)
	{
		$data['data']= $this->model_epa->GetByUsername($username);
		$data['header']= "Halaman Update Info Admin ";
		$this->load->view('admin/m_epa', $data);
	}
	public function save_update($username)
	{
		$this->model_epa->update($username);
		redirect ('admin');
	}
	function delete ($username)
	{
		$this->cek_login();
		$this->model_rias->delete($username);
		redirect ('admin');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
}