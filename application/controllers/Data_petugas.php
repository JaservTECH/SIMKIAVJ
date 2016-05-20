<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Data_petugas extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->model(array('model_petugas','GetData'));
			$this->load->helper(array('url','form','file','html'));
			
			
		}
		public function index(){
			$isi['content']		= 'data_petugas/tampilan_data_petugas';
			$isi['judul']	 	= 'Dashboard';
			$isi['sub_judul'] 	= 'Data Petugas';
			$data		        = $this->model_petugas->get_petugas();
			foreach ($data->result() as $row) {
				$cat = 'id_jenis_kelamin = '. $row->jenis_kelamin;
				$row->jenis_kelamin = $this->GetData->get('jenis_kelamin', 'jenis_kelamin', $cat);
			}
			$isi['data']        = $data;
			$this->load->view("tampilan_home",$isi);
		}
		
		public function add_petugas(){
			$isi['content']					= 'data_petugas/tampilan_tambah_petugas';
			$isi['judul']	 				= 'Data Petugas';
			$isi['sub_judul']			 	= 'Tambah Data Petugas';
			$isi['list_jenis_kelamin']		= $this->decode_data('jenis_kelamin','jenis_kelamin');
			$this->load->view("tampilan_home",$isi);
		}
		
		function tambah_data()
		{
			if($this->input->post('submit'))
			{
				$this->model_petugas->tambah();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('data_petugas/add_petugas');
				}
			}
			if($this->input->post('batal'))
			{
				redirect('data_petugas');
			}
			
			$this->load->view("tampilan_home",$isi);
		}	
				
		public function edit($id_user)
		{
			$isi['content']					= 'data_petugas/tampilan_edit_petugas';
			$isi['judul']	 				= 'Data Petugas';
			$isi['sub_judul']			 	= 'Edit Data Petugas';
			$isi['list_jenis_kelamin']		= $this->decode_data('jenis_kelamin','jenis_kelamin');
			$isi['user'] = $this->model_petugas->get_petugas_edit($id_user);
			$this->load->view('tampilan_home', $isi);
		}
		
		public function proses_edit()
		{
			if($this->input->post('update'))
			{
				$this->model_petugas->edit_petugas();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Diedit!');
					redirect('data_petugas');
				}
			}
			if($this->input->post('batal'))
			{
				{
					redirect('data_petugas');
				}
			}
		}
		
		public function hapus($id_user)
		{
			 
			$this->model_petugas->hapus_petugas($id_user);  
				
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Dihapus!');
					redirect('data_petugas');
				}
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

