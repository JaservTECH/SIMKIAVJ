<?php
class Model_persalinan extends CI_Model {
   
    function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
	function tambah()
		{
			$tgl_surat				= $this->input->post('tgl_surat');
			$no_RM 					= $this->input->post('no_RM'); 
			$nama					= $this->input->post('nama');
			$gol_darah				= $this->input->post('gol_darah');
			$alamat					= $this->input->post('alamat');
			$napas					= $this->input->post('napas');
			$HPL					= $this->input->post('HPL');
			$penolong1				= $this->input->post('penolong1');
			$penolong2				= $this->input->post('penolong2');
			$sumber_dana			= $this->input->post('sumber_dana');
			$pemilik_kendaraan		= $this->input->post('pemilik_kendaraan');
			$noHP_milik_kendaraan	= $this->input->post('noHP_milik_kendaraan');
			$metode_KB				= $this->input->post('metode_KB');
			$pendonor1				= $this->input->post('pendonor1');
			$pendonor2				= $this->input->post('pendonor2');
			$noHP_donor1			= $this->input->post('noHP_donor1');
			$noHP_donor2			= $this->input->post('noHP_donor2');
			
			$data = array (
				'tgl_surat'				=> $tgl_surat, 
				'no_RM'					=> $no_RM, 
				'nama'					=> $nama,
				'gol_darah'				=> $gol_darah,
				'alamat'				=> $alamat,
				'HPL'					=> $HPL,
				'penolong1'				=> $penolong1,
				'penolong2'				=> $penolong2,
				'sumber_dana'			=> $sumber_dana,
				'pemilik_kendaraan'		=> $pemilik_kendaraan,
				'noHP_milik_kendaraan'	=> $noHP_milik_kendaraan,
				'metode_KB'				=> $metode_KB,
				'pendonor1'				=> $pendonor1,
				'pendonor2'				=> $pendonor2,
				'noHP_donor1'			=> $noHP_donor1,
				'noHP_donor2'			=> $noHP_donor2
			); 

			
			$this->db->insert('rencana_persalinan',$data);//insert data di tabel kunjungan
			
		}
		
	}
?>