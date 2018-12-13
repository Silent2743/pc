<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
public function update($user, $data)
    {
      // Jalankan query
      $query = $this->db
        ->where('username', $user)
        ->update($this->table, $data);
         // Return hasil query
      return $query;
      }
  }