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


	public function get_all_tickets($user_id) {

		$this->db->where('requested_by', $user_id);

		$query = $this->db->get('tickets');

		return $query->result();

	}


	public function create_ticket($data) {

		$insert_query = $this->db->insert('tickets', $data);

		return $insert_query;

	}


	public function edit_ticket($ticket_id, $data) {

		$this->db->where('id_ticket', $ticket_id);
		$this->db->update('tickets', $data);

		return true;

	}

	public function delete_ticket($ticket_id) {

		$this->db->where('id_ticket', $ticket_id);
		$this->db->delete('tickets');

	}


	public function get_tickets_info($ticket_id) {

		$this->db->where('id_ticket', $ticket_id);

		$get_data = $this->db->get('tickets');

		return $get_data->row();

	}


	public function get_id_ticket_history($ticket_id) {

		$this->db->select('

				history.description as desc_history,
				history.date_time,
				history.id_history as history_id,
				tickets.title,
				tickets.description

			');

		$this->db->from('history');
		$this->db->join('tickets', 'tickets.id_ticket = history.id_ticket');
		$this->db->where('history.id_ticket', $ticket_id);
		
		$query = $this->db->get();

		if($query->num_rows() < 1) {

			return FALSE;

		}

		return $query->result();

	}		
	
	
		
	public function get_ticket_history($ticket_id, $active = true) {

		$this->db->select('

				history.description as desc_history,
				history.date_time,
				history.id_history as history_id,
				tickets.title,
				tickets.description

			');

		$this->db->from('history');
		$this->db->join('tickets', 'tickets.id_ticket = history.id_ticket');
		$this->db->where('history.id_ticket', $ticket_id);
		
		if($active == true) {

			$this->db->where('history.id_status', 1);

		} else {

			$this->db->where('history.id_status', 2);

		}
		
		$query = $this->db->get();

		if($query->num_rows() < 1) {

			return FALSE;

		}

		return $query->result();

	}


	public function delete_ticket_history($ticket_id) {

		$this->db->where('id_ticket', $ticket_id);

		$query = $this->db->delete('history');

		return $query;

	}

}

?>