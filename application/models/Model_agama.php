<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Model_agama extends CI_Model
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
		 public function get(){
		  return $this->db->get("agama");
		 }
		 
}
?>