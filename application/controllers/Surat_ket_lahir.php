<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Surat_ket_lahir extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->model(array('model_lahir','GetData'));
			$this->load->helper(array('url','form'));
		}
		
		public function index(){
			$isi['content']				= 'Surat_ket_lahir/tampilan_surat_ket_lahir';
			$isi['judul']	 			= 'Surat Keterangan Lahir';
			$isi['sub_judul'] 			= '';
			$isi['list_jenis_kelamin']	= $this->decode_data('jenis_kelamin','jenis_kelamin');
			$isi['list_agama']			= $this->decode_data('agama','agama');
			$isi['list_pendidikan']		= $this->decode_data('pendidikan','pendidikan');
			$this->load->view("tampilan_home",$isi);
		}
		
		function tambah_data()
		{
			if($this->input->post('submit'))
			{
				$this->model_lahir->tambah();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('surat_ket_lahir');
				}
			}
			if($this->input->post('batal'))
			{
				redirect('surat_ket_lahir');
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