<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('username'))
		redirect('login');
		$this->load->library('template');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->cek_login();
	   $this->template->admin('admin/dashboard');
	}
	public function cek_login()
	{
		if(!$this->session->userdata('username'))
		redirect('login');
		}
	
}
?>