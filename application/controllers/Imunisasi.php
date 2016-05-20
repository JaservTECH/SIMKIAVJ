<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Imunisasi extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->model(array('model_imunisasi','GetData'));
			$this->load->helper(array('url','form'));
		}
		
		public function index(){
			$isi['content']				= 'imunisasi/tampilan_imunisasi';
			$isi['judul']	 			= 'Catatan Kesehatan Anak';
			$isi['sub_judul'] 			= 'Riwayat Imunisasi';
			$isi['list_status']			= $this->decode_data('status','status', false);
			$isi['list_jenis_kelamin']	= $this->decode_data('jenis_kelamin','jenis_kelamin', false);
			$isi['list_agama']			= $this->decode_data('agama','agama', false);
			$isi['list_pendidikan']		= $this->decode_data('pendidikan','pendidikan', false);
			$isi['list_dokter'] 		= $this->decode_data('nama_dokter','dokter', false);
			$isi['list_imunisasi'] 		= $this->decode_data2('keterangan','jenis_pemeriksaan',
										  '(id=41 OR id=42 OR id=43 OR id=44 OR id=45 OR id=46 OR id=47 
										  OR id=48 OR id=49 OR id=50 OR id=51 OR id=52 OR id=53)');
			$this->load->view("tampilan_home",$isi);
		}
		
		function tambah_data()
		{
			if($this->input->post('submit'))
			{
				$this->model_imunisasi->tambah();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('Imunisasi');
				}
				
			}
			
			$this->load->view("tampilan_home",$isi);
		}	
			
		function decode_data($kolom, $tabel, $cat) {
			$datas = $this->GetData->get($kolom, $tabel, $cat);
			$temp = array();
			$i=1;
			foreach ($datas as $data) {
				$temp[$i]= $data->$kolom;
				$i++;
			}
			return $temp;
		}
		
		
		function decode_data2($kolom, $tabel, $cat) {
			$datas = $this->GetData->get($kolom, $tabel, $cat);
			$temp = array();
			$i=41;
			foreach ($datas as $data) {
				$temp[$i]= $data->$kolom;
				$i++;
			}
			return $temp;
		}
		
		
		function get_RM() {
			$kolom = $_GET["kolom"];
			$tabel = $_GET["tabel"];
			$cats = array('no_RM' => $_GET["cat"]);
			$datas = $this->GetData->get($kolom, $tabel, $cats);
			echo json_encode($datas);
		}	
}