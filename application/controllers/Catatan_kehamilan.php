<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Catatan_kehamilan extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
				$this->load->model(array('Model_hamil','GetData'));
				$this->load->helper(array('url','form'));
		}
		
		
		public function index(){
			$isi['content']				= 'catatan_kehamilan/tampilan_catatan_kehamilan';
			$isi['judul']	 			= 'Catatan Kesehatan Ibu';
			$isi['sub_judul'] 			= 'Catatan Kehamilan';
			$isi['list_status']			= $this->decode_data('status','status', false);
			$isi['list_jenis_kelamin']	= $this->decode_data('jenis_kelamin','jenis_kelamin', false);
			$isi['list_agama']			= $this->decode_data('agama','agama', false);
			$isi['list_pendidikan'] 	= $this->decode_data('pendidikan','pendidikan', false);
			$isi['list_dokter'] 		= $this->decode_data('nama_dokter','dokter', false);
			$isi['list_TT'] 			= $this->decode_data2('keterangan','jenis_pemeriksaan', '(id=16 OR id=17 OR id=18 OR id=19 OR id=20)');
			$this->load->view("tampilan_home",$isi);
		}
		
		function tambah_data1()
		{
			if($this->input->post('submit1'))
			{
				$this->Model_hamil->tambah1();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('catatan_kehamilan');
				}
				
			}
			
			$this->load->view("tampilan_home",$isi);
		}	
		
		function tambah_data2()
		{
			if($this->input->post('submit2'))
			{
				$this->Model_hamil->tambah2();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('catatan_kehamilan');
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
			$i=16;
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
?>