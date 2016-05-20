<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Agama extends CI_Controller
	{
		
		public function index(){     
		  $this->data['agama'] = $this->model_agama->get();
		  $this->load->view('agama', $this->data);
		 }
	
}




