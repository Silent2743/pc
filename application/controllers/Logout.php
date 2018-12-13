<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
	}
	function index()
   {
   	$this->load->library('session');
	$this->session->sess_destroy();
	$this->load->view('admin/login_form');
	   }
}
?>