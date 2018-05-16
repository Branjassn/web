<?php
class Model_Mahasiswa extends CI_Model {
	
	function get_table(){
        return $this->db->get("tm_mahasiswa");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM tm_mahasiswa");
		return $query->result();
	}
	
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM tm_prodi");
		return $query->result();
	}
	
	function get_gol(){
		$query = $this->db->query("SELECT * FROM tm_gol");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('tm_mahasiswa',$data);
		
	}
	
	function get_data_edit(){
		$query = $this->db->query("SELECT * FROM tm_mahasiswa WHERE 'nim' = ($id)");
		return $query->result_array();
	}
	
}