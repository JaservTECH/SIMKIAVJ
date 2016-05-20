<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Model_hamil extends CI_Model
	{  
	
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
		function tambah1()
		{
			$no_RM 					= $this->input->post('no_RM'); //input no rm
			$tanggal_kunjungan		= $this->input->post('tanggal_kunjungan');
			$HPHT					= $this->input->post('HPHT'); 
			$HPL					= $this->input->post('HPL');
			$lila					= $this->input->post('lila');
			$TB						= $this->input->post('TB');
			$BB						= $this->input->post('BB');
			$kontrasepsi			= $this->input->post('kontrasepsi');
			$penyakit				= $this->input->post('penyakit');
			$alergi					= $this->input->post('alergi');
			$gestasi				= $this->input->post('gestasi');
			$partus					= $this->input->post('partus');
			$abortus				= $this->input->post('abortus');
			$jenis_TT				= $this->input->post('jenis_TT');
			$tanggal_pemberian		= $this->input->post('tanggal_pemberian');
			$anak_hidup				= $this->input->post('anak_hidup');
			$anak_mati				= $this->input->post('anak_mati');
			$kurang_bulan			= $this->input->post('kurang_bulan');
			$jarak_terakhir			= $this->input->post('jarak_terakhir');
			$cara_lahir_terakhir	= $this->input->post('cara_lahir_terakhir');
			$nama_dokter			= $this->input->post('nama_dokter');
			
			$P1 = array (
				'no_RM'					=> $no_RM,  //input kedalam field no rm 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '9',
				'hasil_pemeriksaan'		=> $HPHT,
				'nama_dokter'			=> $nama_dokter
			); 

			$P2 = array (
				'no_RM'					=> $no_RM,
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '10',
				'hasil_pemeriksaan'		=> $HPL,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P3 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '11',
				'hasil_pemeriksaan'		=> $lila,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P4 = array (
				'no_RM'					=> $no_RM, 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '12',
				'hasil_pemeriksaan'		=> $TB,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P5 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '23',
				'hasil_pemeriksaan'		=> $BB,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P5 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '13',
				'hasil_pemeriksaan'		=> $kontrasepsi,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P6 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '14',
				'hasil_pemeriksaan'		=> $penyakit,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P7 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '15',
				'hasil_pemeriksaan'		=> $alergi,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P8 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '1',
				'hasil_pemeriksaan'		=> $gestasi,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P9 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '2',
				'hasil_pemeriksaan'		=> $partus,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P10 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '3',
				'hasil_pemeriksaan'		=> $abortus,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P11 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> $jenis_TT,
				'hasil_pemeriksaan'		=> $tanggal_pemberian,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P12 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '4',
				'hasil_pemeriksaan'		=> $anak_hidup,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P13 = array (
				'no_RM'					=> $no_RM, 
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '5',
				'hasil_pemeriksaan'		=> $anak_mati,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P14 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '6',
				'hasil_pemeriksaan'		=> $kurang_bulan,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P15 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '7',
				'hasil_pemeriksaan'		=> $jarak_terakhir,
				'nama_dokter'			=> $nama_dokter
			); 
			
			$P16 = array (
				'no_RM'					=> $no_RM,  
				'tanggal_kunjungan'		=> $tanggal_kunjungan,
				'id_jenis_pemeriksaan'	=> '8',
				'hasil_pemeriksaan'		=> $cara_lahir_terakhir,
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
			$this->db->insert('kunjungan',$P13);
			$this->db->insert('kunjungan',$P14);
			$this->db->insert('kunjungan',$P15);
			$this->db->insert('kunjungan',$P16);
			
		}
		
		function tambah2()
		{
			$no_RM 					= $this->input->post('no_RM'); //input no rm
			$tanggal_kunjungan		= $this->input->post('tanggal_kunjungan');
			$TD						= $this->input->post('TD');
			$BB						= $this->input->post('BB');
			$umur_kehamilan			= $this->input->post('umur_kehamilan');
			$tinggi_fundus			= $this->input->post('tinggi_fundus');
			$letak_janin			= $this->input->post('letak_janin');
			$DJJ					= $this->input->post('DJJ');
			$kaki_bengkak			= $this->input->post('kaki_bengkak');
			$keluhan_sekarang		= $this->input->post('keluhan_sekarang');
			$hasil_lab				= $this->input->post('hasil_lab');
			$tindakan				= $this->input->post('tindakan');
			$nasihat				= $this->input->post('nasihat');
			$jadwal					= $this->input->post('jadwal');
			$nama_dokter			= $this->input->post('nama_dokter');
			
			$P15 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '22',
					'hasil_pemeriksaan'		=> $TD,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
				
			$P16 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '23',
					'hasil_pemeriksaan'		=> $BB,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 

			$P17 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '24',
					'hasil_pemeriksaan'		=> $umur_kehamilan,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
			
			$P18 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '25',
					'hasil_pemeriksaan'		=> $tinggi_fundus,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
			
			$P19 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '58',
					'hasil_pemeriksaan'		=> $letak_janin,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
			
			$P20 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '26',
					'hasil_pemeriksaan'		=> $DJJ,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
				
			$P21 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '27',
					'hasil_pemeriksaan'		=> $kaki_bengkak,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
				
			$P22 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '28',
					'hasil_pemeriksaan'		=> $hasil_lab,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
				
			$P23 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '30',
					'hasil_pemeriksaan'		=> $tindakan,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
				
			$P24 = array (
					'no_RM'					=> $no_RM,  
					'tanggal_kunjungan'		=> $tanggal_kunjungan,
					'id_jenis_pemeriksaan'	=> '31',
					'hasil_pemeriksaan'		=> $nasihat,
					'nama_dokter'			=> $nama_dokter,
					'jadwal'				=> $jadwal
				); 
				
			
			
			$this->db->insert('kunjungan',$P15);//insert data di tabel kunjungan
			$this->db->insert('kunjungan',$P16);
			$this->db->insert('kunjungan',$P17);
			$this->db->insert('kunjungan',$P18);
			$this->db->insert('kunjungan',$P19);
			$this->db->insert('kunjungan',$P20);
			$this->db->insert('kunjungan',$P21);
			$this->db->insert('kunjungan',$P22);
			$this->db->insert('kunjungan',$P23);
			$this->db->insert('kunjungan',$P24);
			
		}
		
		
	}
?>

