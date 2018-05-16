<?php
class login extends CI_Controller{
	public function index(){
		$this->load->model('user_model');
		$model = $this->user_model;
		
	if(isset($_POST['btnsubmit'])){
		$model->username = $_POST['username'];
		$model->password = $_POST['password'];
		
	if ($model->authentikasi()){
		$this->load->view('login_succes_view');
	}else{
		$this->load->view('login_error_view');
	}
	}else{
		$this->load->view('login_form_view', array('model'=>$model));
		}
	}
}
?>
	