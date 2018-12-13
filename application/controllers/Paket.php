<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('paket');
		$this->load->model('model_paket');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_paket->ambil('paket');
		$this->load->view('admin/manage_paket', $data);

	}
	public function add_paket()
	{
		$this->cek_login();
		if ($this->input->post('submit2', TRUE) == 'Submit2'){
			//validasi
			$this->form_validation->set_rules('id_paket', 'Id Paket', 'required');
			$this->form_validation->set_rules('kd_paket', 'Kode Paket', 'required');
			$this->form_validation->set_rules('porsi', 'Porsi', 'required');

			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'id_paket' => $this->input->post('id_paket', TRUE),
						'kd_paket' => $this->input->post('kd_paket', TRUE),
						'porsi' => $this->input->post('porsi', TRUE),
					);
					$this->model_paket->insert('paket', $items);
				}
			}
		$data['id_paket'] = $this->input->post('id_paket', TRUE);
		$data['kd_paket'] = $this->input->post('kd_paket', TRUE);
		$data['porsi'] = $this->input->post('porsi', TRUE);
		$data['header']= "Halaman Tambah Paket ";
		$this->load->view('admin/paket_form', $data);
	}
	public function update_paket($id_paket)
	{
		$this->cek_login();
		$data['data']= $this->model_paket->getById_paket($id_paket);
		$data['header']= "Halaman Update Paket ";
		$this->load->view('admin/edit_paket', $data);
	}
	public function save_update($id_paket)
	{
		$this->cek_login();
		$this->model_paket->update($id_paket);
		redirect ('Paket');
	}
	function delete ($id_paket)
	{
		$this->cek_login();
		$this->model_paket->delete($id_paket);
		redirect ('Paket');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
}