<?php

class Klf_ticket_model extends CI_Model {

	public function get_ticket($id) {

		$this->db->where('id_ticket' , $id);
		$query =$this->db->get('tickets');
		

		return $query->row();

	}

	public function get_tickets() {

		$query = $this->db->get('tickets');

		return $query->result();

	}

	public function create_ticket($data) {

		$insert_query = $this->db->insert('tickets', $data);

		return $insert_query;

	}

}

?>