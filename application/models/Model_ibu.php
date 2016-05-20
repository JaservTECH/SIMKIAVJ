<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Model_ibu extends CI_Model
	{  
	
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
	
		function tambah()
		{
			$no_rm 				= $this->input->post('no_rm'); //input no rm ibu
			$nama  				= $this->input->post('nama'); 
			$jenis_kelamin		= $this->input->post('jenis_kelamin');
			$tanggal_lahir		= $this->input->post('tanggal_lahir'); 
			$umur				= $this->input->post('umur');
			$agama 				= $this->input->post('agama');
			$gol_darah			= $this->input->post('gol_darah');
			$pendidikan 		= $this->input->post('pendidikan');
			$pekerjaan 			= $this->input->post('pekerjaan');
			$no_telepon 		= $this->input->post('no_telepon');
			$no_ktp				= $this->input->post('no_ktp');
			$no_jkn 			= $this->input->post('no_jkn');
			$no_rm_ibu			= $this->input->post('no_rm_ibu');
			$nama_wali 			= $this->input->post('nama_wali');
			$tanggal_lahir_wali	= $this->input->post('tanggal_lahir_wali');
			$umur_wali				= $this->input->post('umur_wali');
			$agama_wali 			= $this->input->post('agama_wali');
			$pendidikan_wali 		= $this->input->post('pendidikan_wali');
			$pekerjaan_wali	 	= $this->input->post('pekerjaan_wali');
			$no_telepon_wali 		= $this->input->post('no_telepon_wali');
			$alamat	 				= $this->input->post('alamat');
			$username	 			= $this->input->post('username');
			$password	 			= $this->input->post('password');
						
			$data = array (
				'no_rm'					=> $no_rm,  //input kedalam field no rm ibu
				'nama'  				=> $nama, 
				'jenis_kelamin'			=> $jenis_kelamin,
				'tanggal_lahir'			=> $tanggal_lahir,
				'umur'					=> $umur,
				'agama' 				=> $agama,
				'gol_darah'				=> $gol_darah,
				'pendidikan'			=> $pendidikan,
				'pekerjaan'				=> $pekerjaan,
				'no_telepon'			=> $no_telepon,
				'no_ktp'				=> $no_ktp,
				'no_jkn'				=> $no_jkn,
				'no_rm_ibu'				=> $no_rm_ibu,
				'nama_wali'				=> $nama_wali,
				'tanggal_lahir_wali' 	=> $tanggal_lahir_wali,
				'umur_wali'				=> $umur_wali,
				'agama_wali'			=> $agama_wali,
				'pendidikan_wali'		=> $pendidikan_wali,
				'pekerjaan_wali'		=> $pekerjaan_wali,
				'no_telepon_wali'		=> $no_telepon_wali,
				'alamat'				=> $alamat,
				'username'				=> $username,
				'password'				=> $password,
				
			); 
	  
			$this->db->insert('data_pasien',$data);//insert data di tabel data_ibu
		}
		
}
?>

