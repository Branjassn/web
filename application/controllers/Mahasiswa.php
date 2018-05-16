<?php
class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Mahasiswa');
        
	}
	
	function index(){
		$this->load->view('home');
	}
	function home(){
		
		$data = array(
				'data'=>$this->Model_Mahasiswa->get_data());
		
		$this->load->view('list_mhs',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Mahasiswa->input(array (
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'tm_prodi_id' => $this->input->post('prodi'),
			'tm_gol_id' => $this->input->post('gol')));
			redirect('Mahasiswa/home');
		}else{
			$x =$this->Model_Mahasiswa->get_prodi();
			$data = array(
				'nama_prodi'=>$this->Model_Mahasiswa->get_prodi(),
				'gol'=>$this->Model_Mahasiswa->get_gol()
				);
			
			$this->load->view('input_mhs',$data);
		}
	}
	function edit(){
			$id = $this->uri->segment(3);
			//var_dump ($id);
			$data = array(
				'user' => $this->Model_Mahasiswa->get_data_edit($id),
			);
			//var_dump($data);
			$data['id'] = $this->Model_Mahasiswa->get_prodi();
			$data['prodi'] = $this->Model_Mahasiswa->get_prodi();
			$data['id'] = $this->Model_Mahasiswa->get_gol();
			$data['golongan'] = $this->Model_Mahasiswa->get_gol();
			$this->load->view("edit_mhs, $data");
	}
	
}