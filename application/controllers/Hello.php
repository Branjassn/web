<?php
class Hello extends CI_Controller{
	public function index() {
		$this->load->model('Hello_Model');
		$model = $this->Hello_Model;
		$a = $model->txt;
		$data['teks'] = $a;
		$this->load->view('helloview', $data);

		}
	}
?>
		