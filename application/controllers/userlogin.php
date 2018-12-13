<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userlogin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		 $this->load->library('session');
		$this->load->helper('url');
		$this->load->database('anggota');
    $this->load->model('model_angg');
	}
	function index()
	{
		$this->load->view('loginuser');
	}
function user_verify()
	{
	$username=$this->input->post('username');
    $password=$this->input->post('pass');
    $checking = $this->model_angg->checklogin('anggota', array('username' => $username), array('pass' => $password));
    if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id_user'   => $apps->id_user,
                            'username' => $apps->username,
                            'nama' => $apps->nama,
                            'pass' => $apps->pass,
                            'alamat' => $apps->alamat,
                            'jen_kel' => $apps->jen_kel,
                            'no_telp' => $apps->no_telp,
                            'email' => $apps->email,
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('User');

                    }
                }else{
                    $this->load->view('loginuser');
                }

            

      }

	}

?>