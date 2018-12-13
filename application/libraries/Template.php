<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Template
{
	function __construct()
	{
		$this->ci =&get_instance();
	}

	function admin($template, $data_content='')
 {
  $data['content'] = $this->ci->load->view($template, $data_content, TRUE);
  $data['nav'] = $this->ci->load->view('admin/nav', $data_content, TRUE);

  $this->ci->load->view('admin/dashboard', $data_content);

 }

function add_menu($template, $data_content='')
 {
    $this->ci->load->view('admin/menu_form', $data_content);
 }
 function manage_menu($template, $data_content='')
 {
    $this->ci->load->view('admin/manage_menu', $data_content);
 }
 function update_menu($template, $data_content='')
 {
    $this->ci->load->view('admin/edit_menu', $data_content);
 } 
 function edit_profil($template, $data_content='')
 {
    $this->ci->load->view('admin/edit_profil', $data_content);
 } 

  function manage_gedung($template, $data_content='')
 {
    $this->ci->load->view('admin/manage_gedung', $data_content);
 }

 function perfectcatering($template, $data_content='')
 {
  $data['content'] = $this->ci->load->view($template, $data_content, TRUE);
  $this->ci->load->view('index', $data_content);

 }
 function register($template, $data_content='')
 {
    $this->ci->load->view('register', $data_content);
 } 

 function user($template, $data_content='')
 {
  $data['content'] = $this->ci->load->view($template, $data_content, TRUE);
  $data['nav'] = $this->ci->load->view('user/n_user', $data_content, TRUE);

  $this->ci->load->view('user/d_user', $data_content);

 }
 
}
?>