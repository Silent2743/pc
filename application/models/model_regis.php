<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_regis extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function insert($table = '', $data = '')
	{
	   return $this->db->insert($table, $data);
	}
	
}