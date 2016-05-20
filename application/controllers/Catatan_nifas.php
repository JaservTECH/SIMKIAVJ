<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Catatan_nifas extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
				$this->load->model(array('Model_nifas','GetData'));
				$this->load->helper(array('url','form'));
		}
		
		public function index(){
			$isi['content']				= 'catatan_nifas/tampilan_catatan_nifas';
			$isi['judul']	 			= 'Catatan Kesehatan Ibu';
			$isi['sub_judul']		 	= 'Catatan Nifas';
			$isi['list_status']			= $this->decode_data('status','status', false);
			$isi['list_jenis_kelamin']	= $this->decode_data('jenis_kelamin','jenis_kelamin');
			$isi['list_agama']			= $this->decode_data('agama','agama');
			$isi['list_pendidikan'] 	= $this->decode_data('pendidikan','pendidikan');
			$isi['list_dokter'] 		= $this->decode_data('nama_dokter','dokter');
			$this->load->view("tampilan_home",$isi);
		}
		
		public function proses_edit()
		{
			if($this->input->post('update'))
			{
				$this->model_nifas->edit_identitas();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Diedit!');
					redirect('catatan_nifas');
				}
			}
			if($this->input->post('batal'))
			{
				{
					redirect('data_petugas');
				}
			}
		}
		
		function tambah_data()
		{
			if($this->input->post('submit'))
			{
				$this->Model_nifas->tambah();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('catatan_nifas');
				}
				
			}
			
			$this->load->view("tampilan_home",$isi);
		}	
	 
		function decode_data($kolom, $tabel) {
			$datas = $this->GetData->get($kolom, $tabel, false);
			$temp = array();
			$i=1;
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

