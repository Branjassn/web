<?php
class entri extends CI_Controller{
	public function index (){
		$this->load->model('mahasiswa_model');
		$model = $this->mahasiswa_model;
		
		if (isset($_POST['btnsubmit'])){
			$model = array(
				'nim' => $this->input->post('nim'),
				'nama'=> $this->input->post('nama'),
				'prodi'=> $this->input->post('prodi'));
			//$model->insert();
			$this->db->insert('mahasiswa',$model);
			$this->load->view('entri_respon_view',['model'=>$model]);
		}else{
			$this->load->view('entri_form_view',['model'=>$model]);
		}
	}
}
?>