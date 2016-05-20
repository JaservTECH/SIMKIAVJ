<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Model_lahir extends CI_Model
	{  
	
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
		function tambah()
		{
			$tanggal_surat			= $this->input->post('tanggal_surat');	
			$no_RM 					= $this->input->post('no_RM'); 
			$nama					= $this->input->post('nama'); 
			$jenis_kelamin			= $this->input->post('jenis_kelamin');
			$hari_lahir				= $this->input->post('hari_lahir');
			$tanggal_lahir			= $this->input->post('tanggal_lahir');
			$waktu_lahir			= $this->input->post('waktu_lahir');
			$jenis_kelahiran		= $this->input->post('jenis_kelahiran');
			$kelahiran_ke			= $this->input->post('kelahiran_ke');
			$berat_lahir			= $this->input->post('berat_lahir');
			$panjang_badan			= $this->input->post('panjang_badan');
			$no_surat				= $this->input->post('no_surat');
			$no_RM_ibu				= $this->input->post('no_RM_ibu');
			$nama_ibu				= $this->input->post('nama_ibu');
			$umur_ibu				= $this->input->post('umur_ibu');
			$pekerjaan_ibu			= $this->input->post('pekerjaan_ibu');
			$no_KTP_ibu				= $this->input->post('no_KTP_ibu');
			$nama_ayah				= $this->input->post('nama_ayah');
			$umur_ayah				= $this->input->post('umur_ayah');
			$pekerjaan_ayah			= $this->input->post('pekerjaan_ayah');
			$no_KTP_ayah			= $this->input->post('no_KTP_ayah');
			$alamat					= $this->input->post('alamat');
			$saksi1 				= $this->input->post('saksi1');
			$saksi2					= $this->input->post('saksi2');
			$penolong_lahir			= $this->input->post('penolong_lahir');
			
			$data = array (
				'tanggal_surat'			=> $tanggal_surat,		
				'no_RM'					=> $no_RM,   
				'nama'					=> $nama,
				'jenis_kelamin'			=> $jenis_kelamin,
				'hari_lahir'			=> $hari_lahir,
				'tanggal_lahir'			=> $tanggal_lahir,
				'waktu_lahir'			=> $waktu_lahir,	
				'jenis_kelahiran'		=> $jenis_kelahiran,
				'kelahiran_ke'			=> $kelahiran_ke,
				'berat_lahir'			=> $berat_lahir,
				'panjang_badan'			=> $panjang_badan,
				'no_surat'				=> $no_surat,
				'no_RM_ibu'				=> $no_RM_ibu,
				'nama_ibu'				=> $nama_ibu,
				'umur_ibu'				=> $umur_ibu,
				'pekerjaan_ibu'			=> $pekerjaan_ibu,
				'no_KTP_ibu'			=> $no_KTP_ibu,
				'nama_ayah'				=> $nama_ayah,
				'umur_ayah'				=> $umur_ayah,
				'pekerjaan_ayah'		=> $pekerjaan_ayah,
				'no_KTP_ayah'			=> $no_KTP_ayah,
				'alamat'				=> $alamat,
				'saksi1'				=> $saksi1,
				'saksi2'				=> $saksi2,
				'penolong_lahir'		=> $penolong_lahir
				
			); 

			
			$this->db->insert('keterangan_lahir',$data);	
		}
	}
?>

