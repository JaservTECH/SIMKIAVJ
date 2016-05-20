<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Rencana_persalinan extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->model(array('Model_persalinan','GetData'));
			$this->load->helper(array('url','form'));
		}
		
		public function index(){
			$isi['content']		= 'rencana_persalinan/tampilan_rencana_persalinan';
			$isi['judul']	 	= 'Catatan Kesehatan Ibu';
			$isi['sub_judul'] 	= 'Rencana Persalinan';
			$this->load->view("tampilan_home",$isi);
		}
		
		function tambah_data()
		{
			if($this->input->post('submit'))
			{
				$this->Model_persalinan->tambah();
				if ($this->db->affected_rows())
				{
					$this->session->set_flashdata('info','Data Berhasil Disimpan!');
					redirect('rencana_persalinan');
				}
				
			}
			
			$this->load->view("tampilan_home",$isi);
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