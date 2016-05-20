<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	class Model_pasien extends CI_Model{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		function get_pasien() {
			$query = $getData = $this->db->get('data_pasien');
			if($getData->num_rows() > 0) 
			return $query;	
			
			else
			return null;
		}
			
		function hapus_pasien($no_RM) {
			$this->db->where('no_RM',$no_RM);
			$this->db->delete('data_pasien');    
		}	
		
}