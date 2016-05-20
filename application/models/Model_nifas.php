<?php
class Model_nifas extends CI_Model {
   
    function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
	function edit_identitas() {
			$no_RM = $this->input->post('no_RM');
			$data = array(
				'nama'  				=> $nama 
				
			);   
				$this->db->where('no_RM',$this->input->post('no_RM',$no_RM));
				$this->db->update('data_pasien', $data);        
		}	
 
	
    function tambah()
		{
			$no_RM 					= $this->input->post('no_RM'); //input no rm
			$tanggal_kunjungan		= $this->input->post('tanggal_kunjungan');
			$TD						= $this->input->post('TD');
			$nadi					= $this->input->post('nadi');
			$napas					= $this->input->post('napas');
			$suhu					= $this->input->post('suhu');
			$kontraksi				= $this->input->post('kontraksi');
			$perdarahan				= $this->input->post('perdarahan');
			$BAB					= $this->input->post('BAB');
			$BAK					= $this->input->post('BAK');
			$lokhia					= $this->input->post('lokhia');
			$ASI					= $this->input->post('ASI');
			$tindakan				= $this->input->post('tindakan');
			$nasihat				= $this->input->post('nasihat');
			$nama_dokter			= $this->input->post('nama_dokter');
			
			$P1 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '22',
				'hasil_pemeriksaan'		=> $TD,
				'nama_dokter'			=> $nama_dokter
			); 

			$P2 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '32',
				'hasil_pemeriksaan'		=> $nadi,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P3 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '33',
				'hasil_pemeriksaan'		=> $napas,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P4 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '34',
				'hasil_pemeriksaan'		=> $suhu,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P5 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '35',
				'hasil_pemeriksaan'		=> $kontraksi,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P6 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '36',
				'hasil_pemeriksaan'		=> $perdarahan,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P7 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '38',
				'hasil_pemeriksaan'		=> $BAB,
				'nama_dokter'			=> $nama_dokter
			);
						
			$P8 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '39',
				'hasil_pemeriksaan'		=> $BAK,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P9 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '37',
				'hasil_pemeriksaan'		=> $lokhia,
				'nama_dokter'			=> $nama_dokter
			);

			$P10 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '40',
				'hasil_pemeriksaan'		=> $ASI,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P11 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '30',
				'hasil_pemeriksaan'		=> $tindakan,
				'nama_dokter'			=> $nama_dokter
			);
			
			$P12 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '31',
				'hasil_pemeriksaan'		=> $nasihat,
				'nama_dokter'			=> $nama_dokter
			);
			
			
			$this->db->insert('kunjungan',$P1);//insert data di tabel kunjungan
			$this->db->insert('kunjungan',$P2);
			$this->db->insert('kunjungan',$P3);
			$this->db->insert('kunjungan',$P4);
			$this->db->insert('kunjungan',$P5);
			$this->db->insert('kunjungan',$P6);
			$this->db->insert('kunjungan',$P7);
			$this->db->insert('kunjungan',$P8);
			$this->db->insert('kunjungan',$P9);
			$this->db->insert('kunjungan',$P10);
			$this->db->insert('kunjungan',$P11);
			$this->db->insert('kunjungan',$P12);
		}
	
}
?>
