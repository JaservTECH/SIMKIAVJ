<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Model_kehamilan extends CI_Model
	{  
	
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
	
		function updatedata()
		{
			$no_rm 					= $this->input->post('no_rm'); //input no rm ibu
			$nama  					= $this->input->post('nama'); 
			$jenis_kelamin			= $this->input->post('jenis_kelamin');
									
			$data = array (
				'no_rm'					=> $no_rm,  //input kedalam field no rm ibu
				'nama'  				=> $nama, 
				'jenis_kelamin'			=> $jenis_kelamin,
				
			); 
						
			$this->db->where(array('no_rm'=>$no_rm));
			$this->db->update('data_pasien',$data);
		}
		
		function filterdata($no_rm){
			return $this->db->get_where('data_pasien',
			array('no_rm'=>$no_rm,'nama'=>$nama,'jenis_kelamin'=>$jenis_kelamin))->row();
		}
		
		function bacadata(){
			$baca = $this->db->get('data_pasien');
			if($baca->num_rows() > 0) {
				foreach ($baca->result() as $data){
					$hasil[] = $data;
				}
				return $hasil;
			}
		}
	
		function tambah()
		{
			$no_rm 					= $this->input->post('no_rm'); //input no rm ibu
			$nama  					= $this->input->post('nama'); 
			$jenis_kelamin			= $this->input->post('jenis_kelamin');
									
			$data = array (
				'no_rm'					=> $no_rm,  //input kedalam field no rm ibu
				'nama'  				=> $nama, 
				'jenis_kelamin'			=> $jenis_kelamin,
				
			); 
			
			
			$this->db->insert('data_pasien',$data);//insert data di tabel data_ibu
		}
		
}
?>

