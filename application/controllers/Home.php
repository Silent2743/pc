<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
	}
	public function index()
	{
		 $this->template->perfectcatering('home');
	}

	public function about()
	{
		$this->load->view('about');
	}
	
	public function kontak()
	{
		$this->load->view('contact');
	}
	public function help()
	{
		$this->load->view('help');
	}

	
}
?>