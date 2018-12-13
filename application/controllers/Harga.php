<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('harga');
		$this->load->model('model_hrg');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->model_hrg->ambil('hrg');
		$this->load->view('admin/m_hrg', $data);

	}
	public function add_hrg()
	{
		$this->cek_login();
		if ($this->input->post('submit', TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('id_hrg', 'Id Harga', 'required');
			$this->form_validation->set_rules('id_jasa', 'Id Jasa', 'required');
			$this->form_validation->set_rules('kd_paket', 'Kode Paket', 'required');
			$this->form_validation->set_rules('hrg', 'Harga', 'required');


			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'id_hrg' => $this->input->post('id_hrg', TRUE),
						'id_jasa' => $this->input->post('id_jasa', TRUE),
						'kd_paket' => $this->input->post('kd_paket', TRUE),
						'hrg' => $this->input->post('hrg', TRUE)
					);
					$this->model_hrg->insert('hrg', $items);
				}
			}
		$data['id_hrg'] = $this->input->post('id_hrg', TRUE);
		$data['id_jasa'] = $this->input->post('id_jasa', TRUE);
		$data['kd_paket'] = $this->input->post('kd_paket', TRUE);
		$data['hrg'] = $this->input->post('hrg', TRUE);
		$data['header']= "Halaman Tambah Harga ";
		$this->load->view('admin/hrg', $data);

	}
	public function update_hrg($id_hrg)
	{
		$this->cek_login();
		$data['data']= $this->model_hrg->getByid_hrg($id_hrg);
		$data['header']= "Halaman Update Harga ";
		$this->load->view('admin/e_harga', $data);
	}
	public function save_update($id_hrg)
	{
		$this->cek_login();
		$this->model_hrg->update($id_hrg);
		redirect ('Harga');
	}
	function delete ($id_hrg)
	{
		$this->cek_login();
		$this->model_hrg->delete($id_hrg);
		redirect ('Harga');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
}