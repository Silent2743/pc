<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
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
		if ($this->input->post('submit2', TRUE) == 'Submit2'){
			//validasi
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('kd_jasa', 'Kode Jasa', 'required');
			$this->form_validation->set_rules('kd_paket', 'Pilihan Paket', 'required');
			$this->form_validation->set_rules('tgl_pesan', 'Tanggal Pesan', 'required');
			$this->form_validation->set_rules('status_pesan', 'Status Pesan', 'required');
			$this->form_validation->set_rules('status_bayar', 'Status Bayar', 'required');
			$this->form_validation->set_rules('kd_gd', 'Pilihan Gedung', 'required');
			$this->form_validation->set_rules('kd_rs', 'Pilihan Rias', 'required');
			

			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'username' => $this->input->post('username', TRUE),
						'kd_jasa' => $this->input->post('kd_jasa', TRUE),
						'kd_paket' => $this->input->post('kd_paket', TRUE),
						'tgl_pesan' => $this->input->post('tgl_pesan', TRUE),
						'status_pesan' => $this->input->post('status_pesan', TRUE),
						'status_bayar' => $this->input->post('status_bayar', TRUE),
						'kd_gd' => $this->input->post('kd_gd', TRUE),
						'kd_rs' => $this->input->post('kd_rs', TRUE)
						
					);
					$this->model_pesan->insert('pesan', $items);
				}
				redirect('Laporan');
			}
		$data['username'] = $this->input->post('username', TRUE);
		$data['kd_jasa'] = $this->input->post('kd_jasa', TRUE);
		$data['kd_paket'] = $this->input->post('kd_paket', TRUE);
		$data['tgl_pesan'] = $this->input->post('tgl_pesan', TRUE);
		$data['status_pesan'] = $this->input->post('status_pesan', TRUE);
		$data['status_bayar'] = $this->input->post('status_bayar', TRUE);
		$data['kd_gd'] = $this->input->post('kd_gd', TRUE);
		$data['kd_rs'] = $this->input->post('kd_rs', TRUE);
		$this->load->view('user/pesan', $data);

	}
}