<?php

class Klf_history_model extends CI_Model {

	public function get_history($history_id) {

		$this->db->where('id_history', $history_id);

		$query = $this->db->get('history');

		return $query->row();

	}
	

}


?>