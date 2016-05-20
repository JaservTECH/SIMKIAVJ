<?php
class Model_pem_anak extends CI_Model {
   
    function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
	function tambah()
		{
			$no_RM 					= $this->input->post('no_RM'); 
			$tanggal_kunjungan		= $this->input->post('tanggal_kunjungan');
			$BB						= $this->input->post('BB');
			$TB						= $this->input->post('TB');
			$lingkar_kep			= $this->input->post('lingkar_kep');
			$suhu					= $this->input->post('suhu');
			$napas					= $this->input->post('napas');
			$jantung				= $this->input->post('jantung');
			$diagnosis				= $this->input->post('diagnosis');
			$tindakan				= $this->input->post('tindakan');
			$nama_dokter			= $this->input->post('nama_dokter');
			
			$P1 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '23',
				'hasil_pemeriksaan'		=> $BB,
				'nama_dokter'			=> $nama_dokter
			); 

			$P2 = array (
				'no_RM'					=> $no_RM, 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '12',
				'hasil_pemeriksaan'		=> $TB,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P3 = array (
				'no_RM'					=> $no_RM, 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '56',
				'hasil_pemeriksaan'		=> $lingkar_kep,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P4 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '34',
				'hasil_pemeriksaan'		=> $suhu,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P5 = array (
				'no_RM'					=> $no_RM,
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '33',
				'hasil_pemeriksaan'		=> $napas,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P6 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '57',
				'hasil_pemeriksaan'		=> $jantung,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P7 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '29',
				'hasil_pemeriksaan'		=> $diagnosis,
				'nama_dokter'			=> $nama_dokter
			);
						
			$P8 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '30',
				'hasil_pemeriksaan'		=> $tindakan,
				'nama_dokter'			=> $nama_dokter
			);
			
			$this->db->insert('kunjungan',$P1);
			$this->db->insert('kunjungan',$P2);
			$this->db->insert('kunjungan',$P3);
			$this->db->insert('kunjungan',$P4);
			$this->db->insert('kunjungan',$P5);
			$this->db->insert('kunjungan',$P6);
			$this->db->insert('kunjungan',$P7);
			$this->db->insert('kunjungan',$P8);
		}
		
	}
?>