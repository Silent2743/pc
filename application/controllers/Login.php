<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminlog'))
			redirect('admin');
		$this->load->helper('url');
		$this->load->database('admin');
	}
	function index()
	{
		$this->load->view('admin/login_form');
	}
	function user_verify()
	{
	$this->load->model('t_menu');
	$username=$this->input->post('username');
    $password=$this->input->post('password');
    $checking = $this->t_menu->checklogin('admin', array('username' => $username), array('password' => $password));
    if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'nama'   => $apps->nama,
                            'username' => $apps->username,
                            'password' => $apps->password,
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('Admin');

                    }
                }else{
                    $this->load->view('admin/login_form');
                }

            

      }

	

	
	
}
?> 