<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	class Model_petugas extends CI_Model{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}

		function get_petugas() {
			$query = $getData = $this->db->get('user');
			if($getData->num_rows() > 0) 
			return $query;	
			
			else
			return null;
		}
		
		function tambah()
		{
			$nama 				= $this->input->post('nama'); //input no rm ibu
			$jenis_kelamin 		= $this->input->post('jenis_kelamin');
			$alamat 			= $this->input->post('alamat');
			$username 			= $this->input->post('username');
			$password 			= $this->input->post('password');
			$level 				= $this->input->post('level');
			
			
			$data = array (
				'nama'				=> $nama,  //input kedalam field no rm ibu
				'jenis_kelamin'		=> $jenis_kelamin,
				'alamat'			=> $alamat,
				'username'			=> $username,
				'password'			=> md5($password),	
				'level'				=> $level	
			); 
	  
			$this->db->insert('user',$data);//insert data di tabel data_ibu
		}
		
		function get_petugas_edit($id_user) {
			$this->db->where('id_user',$id_user);
			$query = $getData = $this->db->get('user');    
			if($getData->num_rows() > 0)    
			return $query;   
			else   
			return null;        
		}
		
		function edit_petugas() {
			$id_user = $this->input->post('id_user');
			$data = array(
				'nama' 			=> $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' 		=> $this->input->post('alamat'),
				'username' 		=> $this->input->post('username'),
				'level' 		=> $this->input->post('level')		
			);   
				$this->db->where('id_user',$this->input->post('id_user',$id_user));
				$this->db->update('user', $data);        
		}
		
		
		function hapus_petugas($id_user) {
			$this->db->where('id_user',$id_user);
			$this->db->delete('user');    
		}	
		function getTotalPetugas(){
			return count($this->db->query("SELECT * FROM user")->result_array());
		}
		
}