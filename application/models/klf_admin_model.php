<?php

class Klf_admin_model extends CI_Model {

	public function get_department($id) {

		$this->db->where('id_department' , $id);
		$query =$this->db->get('department');

		return $query->row();

	}


	public function get_departments() {

		$query = $this->db->get('department');

		return $query->result();

	}


	public function create_department_mod($data) {

		$insert_query = $this->db->insert('department', $data);

		return $insert_query;

	}	

} 

?>	