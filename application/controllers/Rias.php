<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rias extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('rias');
		$this->load->model('model_rias');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_rias->ambil('rias');
		$this->load->view('admin/manage_rias', $data);

	}
	public function add_rias()
	{
		$this->cek_login();
		if ($this->input->post('submit', TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('kd_rs', 'Kode Rias', 'required');
			$this->form_validation->set_rules('nm_rias', 'Nama Rias', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('peta', 'Peta', 'required');


			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'kd_rs' => $this->input->post('kd_rs', TRUE),
						'nm_rias' => $this->input->post('nm_rias', TRUE),
						'alamat' => $this->input->post('alamat', TRUE),
						'peta' => $this->input->post('peta', TRUE)
					);
					$this->model_rias->insert('rias', $items);
				}
			}
		$data['kd_rs'] = $this->input->post('kd_rs', TRUE);
		$data['nm_rias'] = $this->input->post('nm_rias', TRUE);
		$data['alamat'] = $this->input->post('alamat', TRUE);
		$data['peta'] = $this->input->post('peta', TRUE);
		$data['header']= "Halaman Tambah Rias ";
		$this->load->view('admin/form_rias', $data);

	}
	public function update_rias($kd_rs)
	{
		$this->cek_login();
		$data['data']= $this->model_rias->getByKd_rs($kd_rs);
		$data['header']= "Halaman Update Rias ";
		$this->load->view('admin/edit_rias', $data);
	}
	public function save_update($kd_rs)
	{
		$this->cek_login();
		$this->model_rias->update($kd_rs);
		redirect ('Rias');
	}
	function delete ($kd_rs)
	{
		$this->cek_login();
		$this->model_rias->delete($kd_rs);
		redirect ('Rias');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
}