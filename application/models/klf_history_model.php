<?php

class Klf_history_model extends CI_Model {

	public function get_history($history_id) {

		$this->db->where('id_history', $history_id);

		$query = $this->db->get('history');

		return $query->row();

	}
	
	public function get_all_history($user_id) {

		$this->db->where('requested_by', $user_id);
		$this->db->join('history', 'tickets.id_ticket = history.id_ticket');
		$query = $this->db->get('tickets');

		return $query->result();

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
	
 	public function delete_history($history_id) {
		
		$this->db->where('id_history', $history_id);
		$this->db->delete('history');
		
	}	 

 	public function mark_history_complete($history_id) {
		
		$this->db->set('id_status', 2);
		$this->db->where('id_history', $history_id);
		$this->db->update('history');

		return true;
		
	}	 	
	
 	public function mark_history_incomplete($history_id) {
		
		$this->db->set('id_status', 1);
		$this->db->where('id_history', $history_id);
		$this->db->update('history');

		return true;
		
	}	 		
	

}

?>