<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuTamu extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('buku_tamu');
		$this->load->model('model_bt');
	}
	public function index()
	{
		$this->cek_login();
		$this->cek_login();
		if ($this->input->post('submit2', TRUE) == 'Submit2'){
			//validasi
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('pesan', 'Pesan', 'required');

			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'nama' => $this->input->post('nama', TRUE),
						'email' => $this->input->post('email', TRUE),
						'pesan' => $this->input->post('pesan', TRUE),
					);
					$this->model_bt->insert('buku_tamu', $items);
				}
			}
		$data['nama'] = $this->input->post('nama', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		$data['pesan'] = $this->input->post('pesan', TRUE);
		$this->load->view('bukutamu', $data);
		

	}
	
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
	}