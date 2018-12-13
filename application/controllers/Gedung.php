<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('gedung');
		$this->load->model('model_gedung');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_gedung->ambil('gedung');
		$this->load->view('admin/manage_gedung', $data);

	}
	public function add_gedung()
	{
		$this->cek_login();
		if ($this->input->post('submit', TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('kd_gd', 'Kode Gedung', 'required');
			$this->form_validation->set_rules('nm_gedung', 'Nama Gedung', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('peta', 'Peta', 'required');


			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'kd_gd' => $this->input->post('kd_gd', TRUE),
						'nm_gedung' => $this->input->post('nm_gedung', TRUE),
						'alamat' => $this->input->post('alamat', TRUE),
						'peta' => $this->input->post('peta', TRUE)
					);
					$this->model_gedung->insert('gedung', $items);
				}
			}
		$data['kd_gd'] = $this->input->post('kd_gd', TRUE);
		$data['nm_gedung'] = $this->input->post('nm_gedung', TRUE);
		$data['alamat'] = $this->input->post('alamat', TRUE);
		$data['peta'] = $this->input->post('peta', TRUE);
		$data['header']= "Halaman Tambah Gedung ";
		$this->load->view('admin/form_gedung', $data);

	}
	public function update_gedung($kd_gd)
	{
		$this->cek_login();
		$data['data']= $this->model_gedung->getById_menu($kd_gd);
		$data['header']= "Halaman Update Gedung ";
		$this->load->view('admin/edit_gedung', $data);
	}
	public function save_update($kd_gd)
	{
		$this->cek_login();
		$this->model_gedung->update($kd_gd);
		redirect ('Gedung');
	}
	function delete ($kd_gd)
	{
		$this->cek_login();
		$this->model_gedung->delete($kd_gd);
		redirect ('Gedung');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
}