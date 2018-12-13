<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('anggota');
		$this->load->model('model_regis');
	}
	public function index()
	{
		$data['username'] = $this->input->post('username', TRUE);
		$data['pass'] = $this->input->post('pass', TRUE);
		$data['nama'] = $this->input->post('nama', TRUE);
		$data['alamat'] = $this->input->post('alamat', TRUE);
		$data['jen_kel'] = $this->input->post('jen_kel', TRUE);
		$data['no_telp'] =$this->input->post('no_telp', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		 
	$this->load->view('register', $data);
         
	  }
	  public function register()	
	  {
	  	if ($this->input->post('submit', TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('jen_kel', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('no_telp', 'No Telpon', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');


			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'username' => $this->input->post('username', TRUE),
						'pass' => $this->input->post('pass', TRUE),
						'nama' => $this->input->post('nama', TRUE),
						'alamat' => $this->input->post('alamat', TRUE),
						'jen_kel' => $this->input->post('jen_kel', TRUE),
						'no_telp' => $this->input->post('no_telp', TRUE),
						'email' => $this->input->post('email', TRUE)
					);
					$this->model_regis->insert('anggota', $items);
				}
			}
		$data['username'] = $this->input->post('username', TRUE);
		$data['pass'] = $this->input->post('pass', TRUE);
		$data['nama'] = $this->input->post('nama', TRUE);
		$data['alamat'] = $this->input->post('alamat', TRUE);
		$data['jen_kel'] = $this->input->post('jen_kel', TRUE);
		$data['no_telp'] =$this->input->post('no_telp', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		$this->load->view('register', $data);
		redirect('userlogin') ;
	  }

}




