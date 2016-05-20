<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Model_imunisasi extends CI_Model
	{  
	
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
		function tambah()
		{
			$no_RM 					= $this->input->post('no_RM'); //input no rm
			$tanggal_kunjungan		= $this->input->post('tanggal_kunjungan');
			$imunisasi				= $this->input->post('imunisasi');
			$tanggal_pemberian		= $this->input->post('tanggal_pemberian'); 
			$nama_dokter			= $this->input->post('nama_dokter');
			
			
			$P1 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> $imunisasi,
				'hasil_pemeriksaan'		=> $tanggal_pemberian,
				'nama_dokter'			=> $nama_dokter
				
			); 

			$this->db->insert('kunjungan',$P1);
		}
	}
?>

