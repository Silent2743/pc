<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angg extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('anggota');
		$this->load->model('model_angg');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_angg->ambil('anggota');
		$this->load->view('admin/m_angg', $data);

	}
	public function add_angg()
	{
		$this->cek_login();
		if ($this->input->post('submit', TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('jen_kel', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');


			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'username' => $this->input->post('username', TRUE),
						'pass' => $this->input->post('pass', TRUE),
						'alamat' => $this->input->post('alamat', TRUE),
						'jen_kel' => $this->input->post('jen_kel', TRUE),
						'no_telp' => $this->input->post('no_telp', TRUE),
						'email' => $this->input->post('email', TRUE)

					);
					$this->model_gedung->insert('anggota', $items);
				}
			}
		$data['username'] = $this->input->post('username', TRUE);
		$data['pass'] = $this->input->post('pass', TRUE);
		$data['alamat'] = $this->input->post('alamat', TRUE);
		$data['jen_kel'] = $this->input->post('jen_kel', TRUE);
		$data['no_telp'] = $this->input->post('no_telp', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		$data['header']= "Halaman Tambah Anggota ";
		$this->load->view('admin/f_angg', $data);

	}
	public function update_angg($username)
	{
		$this->cek_login();
		$data['data']= $this->model_angg->GetByUsername($username);
		$data['header']= "Halaman Update Anggota ";
		$this->load->view('admin/e_angg', $data);
	}
	public function save_angg($username)
	{
		$this->cek_login();
		$this->model_angg->update($username);
		redirect ('Angg');
	}
	function delete ($username)
	{
		$this->cek_login();
		$this->model_angg->delete($username);
		redirect ('Angg');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
}