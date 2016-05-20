<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Data_pasien extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->model(array('model_pasien','GetData'));
			
		}
		
		public function index(){
			$isi['content']		= 'data_pasien/tampilan_data_pasien';
			$isi['judul']	 	= 'Dashboard';
			$isi['sub_judul'] 	= 'Data Pasien';
			$data		        = $this->model_pasien->get_pasien();
			foreach ($data->result() as $row) {
				$cat = 'id_status = '. $row->status;
				$row->status = $this->GetData->get('status', 'status', $cat);
			}
			$isi['data']        = $data;
			$this->load->view("tampilan_home",$isi);
		}
		
			
		
		public function hapus($no_RM)
		{
			$this->model_pasien->hapus_pasien($no_RM);  
				
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Dihapus!');
					redirect('data_pasien');
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