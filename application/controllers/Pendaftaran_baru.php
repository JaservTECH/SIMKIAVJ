<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Pendaftaran_baru extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->model(array('model_pend_baru','GetData'));
			$this->load->helper(array('url','form'));
		}
		
		public function index()
		{
			$isi['content']				= 'pendaftaran/tampilan_pendaftaran_baru';
			$isi['judul']	 			= 'Pendaftaran';
			$isi['sub_judul'] 			= 'Pasien Baru';
			$isi['list_status']			= $this->decode_data('status','status');
			$isi['list_JK']				= $this->decode_data('jenis_kelamin','jenis_kelamin');
			$isi['list_agama']			= $this->decode_data('agama','agama');
			$isi['list_pendidikan']		= $this->decode_data('pendidikan','pendidikan');
			$this->load->view("tampilan_home",$isi);
		}

		function tambah_data()
		{
			if($this->input->post('submit'))
			{
				$this->model_pend_baru->tambah();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('pendaftaran_baru');
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
}



