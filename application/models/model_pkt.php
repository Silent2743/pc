<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pkt extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function bu1()
	{
		$this->db->from('menu');
		$bu1= array('p1','p4');
		$this->db->where("kt_menu='bu' ");
		$this->db->where_in('kd_menu', $bu1);

		return $this->db->get();
	}
	function ab1()
	{
		$this->db->from('menu');
		$ab1= array('p1','p4', 'p5');
		$this->db->where("kt_menu='ab' ");
		$this->db->where_in('kd_menu', $ab1);
		return $this->db->get();
	}
	function ap1()
	{
		$this->db->from('menu');
		$ap1= array('p4', 'p5');
		$this->db->where("kt_menu='ap' ");
		$this->db->where_in('kd_menu', $ap1);
		return $this->db->get();
	}
	function as1()
	{
		$this->db->from('menu');
		$as1= array('p1','p4');
		$this->db->where("kt_menu='as' ");
		$this->db->where_in('kd_menu', $as1);
		return $this->db->get();
	}
	function am1()
	{
		$this->db->from('menu');
		$am1= array('p1','p4');
		$this->db->where("kt_menu='am' ");
		$this->db->where_in('kd_menu', $am1);
		return $this->db->get();
	}
	function bu2()
	{
		$this->db->from('menu');
		$bu2= array('p2','p4');
		$this->db->where("kt_menu='bu' ");
		$this->db->where_in('kd_menu', $bu2);

		return $this->db->get();
	}
	function ab2()
	{
		$this->db->from('menu');
		$ab2= array('p2','p4', 'p5');
		$this->db->where("kt_menu='ab' ");
		$this->db->where_in('kd_menu', $ab2);
		return $this->db->get();
	}
	function ap2()
	{
		$this->db->from('menu');
		$ap2= array('p4', 'p5');
		$this->db->where("kt_menu='ap' ");
		$this->db->where_in('kd_menu', $ap2);
		return $this->db->get();
	}
	function as2()
	{
		$this->db->from('menu');
		$as2= array('p4','p6');
		$this->db->where("kt_menu='as' ");
		$this->db->where_in('kd_menu', $as2);
		return $this->db->get();
	}
	function am2()
	{
		$this->db->from('menu');
		$am2= array('p4','p6');
		$this->db->where("kt_menu='am' ");
		$this->db->where_in('kd_menu', $am2);
		return $this->db->get();
	}
	function bu3()
	{
		$this->db->from('menu');
		$bu3= array('p3','p4');
		$this->db->where("kt_menu='bu' ");
		$this->db->where_in('kd_menu', $bu3);

		return $this->db->get();
	}
	function ab3()
	{
		$this->db->from('menu');
		$ab3= array('p2','p4', 'p5');
		$this->db->where("kt_menu='ab' ");
		$this->db->where_in('kd_menu', $ab3);
		return $this->db->get();
	}
	function ap3()
	{
		$this->db->from('menu');
		$ap3= array('p4', 'p3');
		$this->db->where("kt_menu='ap' ");
		$this->db->where_in('kd_menu', $ap3);
		return $this->db->get();
	}
	function as3()
	{
		$this->db->from('menu');
		$as3= array('p4','p6');
		$this->db->where("kt_menu='as' ");
		$this->db->where_in('kd_menu', $as3);
		return $this->db->get();
	}
	function am3()
	{
		$this->db->from('menu');
		$am3= array('p4','p6');
		$this->db->where("kt_menu='am' ");
		$this->db->where_in('kd_menu', $am3);
		return $this->db->get();
	}

	function pk1()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='pk1' ");
		return $this->db->get();
	}
	function pk2()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='pk2' ");
		return $this->db->get();
	}
	function pk3()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='pk3' ");
		return $this->db->get();
	}
	function ps1()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='ps1' ");
		return $this->db->get();
	}
	function ps2()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='ps2' ");
		return $this->db->get();
	}
	function ps3()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='ps3' ");
		return $this->db->get();
	}
	function ps4()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='ps4' ");
		return $this->db->get();
	}
	function pe1()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='pe1' ");
		return $this->db->get();
	}
	function pe2()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='pe2' ");
		return $this->db->get();
	}
	function pe3()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='pe3' ");
		return $this->db->get();
	}
	function pe4()
	{
		$this->db->from('hrg');
		$this->db->where("kd_paket='pe4' ");
		return $this->db->get();
	}
	


}
?>