<?php
Class M_jajal extends CI_Model {

	public function __construct()
	{
	$this->load->database();
	}

	function get_pasien_edit($no_rm) {
		$this->db->where('no_rm',$no_rm);
		$query = $getData = $this->db->get('data_pasien');    
		if($getData->num_rows() > 0)    
		return $query;   
		else   
		return null;        
	}
	function edit_pasien() {
		$no_rm = $this->input->post('no_rm');
		$data = array(
			'no_rm' => $this->input->post('no_rm')
			
		);   
			$this->db->where('no_rm',$this->input->post('no_rm',$no_rm));
			$this->db->update('data_pasien', $data);        
	}
	
}
?>

