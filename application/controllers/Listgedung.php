<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listgedung extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->model('model_gedung');
	}

	public function index()
	{
		$data['data'] = $this->model_gedung->ambil('gedung');
		 $this->load->view('listgedung', $data);
	}
}
	

?>