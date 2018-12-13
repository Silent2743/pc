<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listrias extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->model('model_rias');
	}

	public function index()
	{
		$data['data'] = $this->model_rias->ambil('rias');
		 $this->load->view('listrias', $data);
	}
}
	

?>