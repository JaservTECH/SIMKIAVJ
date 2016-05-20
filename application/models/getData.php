<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

	class GetData extends CI_Model {
		function get($kolom,$tabel,$cat){
			$this->db->select($kolom);
  			$this->db->from($tabel);
  			if($cat){
  				$this->db->where($cat);
  			}
  			$query = $this->db->get();
  			return $query->result();
		}
	}

?>