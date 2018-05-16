<?php
class Persegipanjang2 extends CI_Controller{
	public function index(){
	$this->load->model('model22');
	$model = $this->model22;
	
	if (isset($_POST['btnSubmit'])){
	$panjang = $_POST['p'];
	$lebar = $_POST['l'];

	$this->load->view('Persegipanjangview', array('model'=>$model));
		}else{
			$this->load->view('persegipanjangformview');
		}
	}
}
?>