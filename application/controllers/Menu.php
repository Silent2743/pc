<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->helper('url');
		$this->load->database('menu');
		$this->load->model('t_menu');
	}
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->t_menu->ambil('menu');
		$this->load->view('admin/manage_menu', $data);

	}
	public function add_menu()
	{
		$this->cek_login();
		if ($this->input->post('submit', TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('kd_menu', 'Kode Menu', 'required');
			$this->form_validation->set_rules('kt_menu', 'Keterangan Menu', 'required');
			$this->form_validation->set_rules('isi_menu', 'Isi Menu', 'required');

			if ($this->form_validation->run() == TRUE)
				{
					//proses Insert
					$items= array(
						'kd_menu' => $this->input->post('kd_menu', TRUE),
						'kt_menu' => $this->input->post('kt_menu', TRUE),
						'isi_menu' => $this->input->post('isi_menu', TRUE),
					);
					$this->t_menu->insert('menu', $items);
				}
			}
		$data['kd_menu'] = $this->input->post('kd_menu', TRUE);
		$data['kt_menu'] = $this->input->post('kt_menu', TRUE);
		$data['isi_menu'] = $this->input->post('isi_menu', TRUE);
		$data['header']= "Halaman Tambah Menu ";
		$this->template->add_menu('admin/menu_form', $data);
	}
	public function update_menu($id_menu)
	{
		$this->cek_login();
		$data['data']= $this->t_menu->getById_menu($id_menu);
		$data['header']= "Halaman Update Menu ";
		$this->template->update_menu('admin/edit_menu', $data);

	}
	public function save_update($id_menu)
	{
		$this->cek_login();
		$this->t_menu->update($id_menu);
		redirect ('Menu');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
	function delete ($id_menu)
	{
		$this->cek_login();
		$this->t_menu->delete($id_menu);
		redirect ('Menu');
	}
	
}