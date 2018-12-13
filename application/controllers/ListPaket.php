<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListPaket extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->model('model_pkt');
		$this->load->database('menu');	}

	public function index()
	{
		$data['query'] = $this->model_pkt->bu1();
		$data['query2'] = $this->model_pkt->ab1();
		$data['query3'] = $this->model_pkt->as1();
		$data['query4'] = $this->model_pkt->ap1();
		$data['query5'] = $this->model_pkt->am1();
		$data['query6'] = $this->model_pkt->bu2();
		$data['query7'] = $this->model_pkt->ab2();
		$data['query8'] = $this->model_pkt->as2();
		$data['query9'] = $this->model_pkt->ap2();
		$data['query10'] = $this->model_pkt->am2();
		$data['query11'] = $this->model_pkt->bu3();
		$data['query12'] = $this->model_pkt->ab3();
		$data['query13'] = $this->model_pkt->as3();
		$data['query14'] = $this->model_pkt->ap3();
		$data['query15'] = $this->model_pkt->am3();
		$data['query16'] = $this->model_pkt->pk1();
		$data['query17'] = $this->model_pkt->pk2();
		$data['query18'] = $this->model_pkt->pk3();
		$data['query19'] = $this->model_pkt->ps1();
		$data['query20'] = $this->model_pkt->ps2();
		$data['query21'] = $this->model_pkt->ps3();
		$data['query22'] = $this->model_pkt->ps4();
		$data['query23'] = $this->model_pkt->pe1();
		$data['query24'] = $this->model_pkt->pe2();
		$data['query25'] = $this->model_pkt->pe3();
		$data['query26'] = $this->model_pkt->pe4();
		$this->load->view('listpaket',$data);
	}
}
	

?>