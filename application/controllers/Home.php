<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Home extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->helper('url');
			$this->load->library('session');
		}
		
		public function index()
		{
			
			$temp = $this->session->all_userdata();
			if(!array_key_exists('admin',$temp))
				redirect("Login/");
			$this->load->model('model_petugas');
			$isi['total_petugas'] = "".$this->model_petugas->getTotalPetugas()."";
			$isi['content']		= 'tampilan_dashboard';
			$isi['judul']	 	= 'Dashboard';
			$isi['sub_judul'] 	= 'SIM KIA';
			$isi['logout'] = base_url()."index.php/Home/signOut";
			$this->load->view("tampilan_home",$isi);
		}
		public function signOut(){
			$temp = $this->session->unset_userdata('admin');
			$this->index();
			
		}
		
}