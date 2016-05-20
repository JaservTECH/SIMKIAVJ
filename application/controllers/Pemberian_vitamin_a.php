<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Pemberian_vitamin_a extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->model(array('Model_vit_A','GetData'));
			$this->load->helper(array('url','form'));
		}
		
		public function index(){
			$isi['content']				= 'pemberian_vitamin_a/tampilan_pemberian_vitamin_a';
			$isi['judul']	 			= 'Catatan Kesehatan Anak';
			$isi['sub_judul'] 			= 'Pemberian Vitamin A';
			$isi['list_status']			= $this->decode_data('status','status', false);
			$isi['list_jenis_kelamin']	= $this->decode_data('jenis_kelamin','jenis_kelamin', false);
			$isi['list_agama']			= $this->decode_data('agama','agama', false);
			$isi['list_pendidikan']		= $this->decode_data('pendidikan','pendidikan', false);
			$isi['list_dokter'] 		= $this->decode_data('nama_dokter','dokter', false);
			$isi['list_vit_A'] 			= $this->decode_data2('keterangan','jenis_pemeriksaan', '(id=54 OR id=55)');
			$this->load->view("tampilan_home",$isi);
		}
		
		function tambah_data()
		{
			if($this->input->post('submit'))
			{
				$this->Model_vit_A->tambah();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('pemberian_vitamin_A');
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
			$i=54;
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