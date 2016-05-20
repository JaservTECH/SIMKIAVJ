<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Home extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->helper('url');
		}
		
		public function index()
		{
			$this->load->model('model_petugas');
			$isi['total_petugas'] = "".$this->model_petugas->getTotalPetugas()."";
			$isi['content']		= 'tampilan_dashboard';
			$isi['judul']	 	= 'Dashboard';
			$isi['sub_judul'] 	= 'SIM KIA';
			$this->load->view("tampilan_home",$isi);
		}
		
}