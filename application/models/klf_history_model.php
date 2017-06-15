<?php

class Klf_history_model extends CI_Model {

	public function get_history($history_id) {

		$this->db->where('id_history', $history_id);

		$query = $this->db->get('history');

		return $query->row();

	}
	
	public function create_history($data) {

		$query = $this->db->insert('history', $data);

		return $query;

	}


	public function get_history_ticket_id($history_id) {

		$this->db->where('id_history', $history_id);

		$query = $this->db->get('history');

		return $query->row()->id_ticket;
	}

	public function get_ticket_name($ticket_id) {

		$this->db->where('id_ticket', $ticket_id);

		$query = $this->db->get('tickets');

		return $query->row()->title;

	}


	public function get_history_ticket_data($history_id) {

		$this->db->where('id_history', $history_id);

		$query = $this->db->get('history');

		return $query->row();

	}


	public function edit_history($history_id, $data) {

		$this->db->where('id_history', $history_id);

		$this->db->update('history', $data);

		return true;

	}
	
	

}

?>