<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Login extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->library('authenticateparent');
			$this->load->library('gatelogin');
			$this->load->helper('url');
		}
		
		public function index($error=0,$message=''){
			if($error == 0)
				$this->load->view("login_layout");
			else{
				$data['error'] = "<div class='alert alert-warning' role='alert'>".$message."</div>";
				$this->load->view("login_layout",$data);
			}
		}
		
		function login_authenticate(){
			if($this->input->post('submit') === NULL){
				$this->index(1,'Anda login illegal metode');
				return;
			}
			
			$kategori = $this->input->post("kategori");
			if($kategori === NULL){
				$this->index(1,"Kategori tidah diisi");
				return;
			}
			if(intval($kategori) > 3 || intval($kategori) < 1){
				$this->index(1,"Kategori tidah Boleh kosong");
				return;
			}
			
			$username = $this->input->post("username");
			if($username === NULL){
				$this->index(1,"Username tidah diisi");
				return;
			}
			if($username == ""){
				$this->index(1,"Username tidah Boleh kosong");
				return;
			}
			$password = $this->input->post("password");
			if($password === NULL){
				$this->index(1,"Username tidah diisi");
				return;
			}
			if($password == ""){
				$this->index(1,"Username tidah Boleh kosong");
				return;
			}
			switch(intval($kategori)){
				case 1 :
					$this->load->model('login_model');
					$temp = $this->login_model->getData($username,$password);
					//exit(count($temp)." ");
					if(count($temp)==0)
					{
						$this->index(1,"Username atau password anda tidak terdaftar");
						return;
					}else{
						if($username!= $temp['user']){
							$this->index(1,"Username tidak cocok");
							return;
						}
						if(md5($password)!= $temp['pass']){
							$this->index(1,"password tidak cocok");
							return;
						}
						$this->load->library('session');
						$this->session->set_userdata("admin",$username);
						redirect('Home/');
					}
				break;
				case 2 :				
					$this->index(1,"Kategori belum diset");
					return;
				break;
				case 3 :
					$this->index(1,"Kategori belum diset");
					return;
				break;
			}
			
		}
}