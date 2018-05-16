<?php
class Persegipanjang extends CI_Controller{
	public function index(){
	$this->load->model('Persegipanjang_model');
	$model = $this->Persegipanjang_model;
	
	$model->set_panjang(4);
	$model->set_lebar(5);
	
	$this->load->view('Persegipanjangview', array('model'=>$model));
	}
}
?>