<?php

class Klf_user_model extends CI_Model {

//	public function get_users($user_id, $username) {
//
//		//$this->db->where('id_user', $user_id);
//
//		$this->db->where(['
//			id_user' => $user_id,
//			'name' => $username 	
//			]);
//
//		$query = $this->db->get('users');
//
//		return $query->result();
//
//		//$query = $this->db->query("SELECT * FROM users");
//
//		//return $query->num_fields();
//
//		//return $query->num_rows();
//
//		//$query = $this->db->get('users');
//
//		//return $query->result();
//
//
//	}
//
//	public function create_users($data) {
//
//		$this->db->insert('users', $data);
//
//	}
//
//	public function update_users($data, $id) {
//
//		$this->db->where(['id_user' => $id]);
//		$this->db->update('users', $data);
//
//	}	
//
//	public function delete_users($id) {
//
//		$this->db->where(['id_user' => $id]);
//		$this->db->delete('users');
//
//	}		
	
	public function create_user() {

		$options = ['cost' => 12]; 

		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT , $options);

		$data = array(

			//'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' 	=> $this->input->post('email'),
			'name' 	=> $this->input->post('username'),
			'password' 	=> $encripted_pass ,
			'id_type_user' => 3, // Temporal
			'id_department' => 2 // Temporal

		); 

		$insert_data = $this->db->insert('users', $data);

		return $insert_data;

	}
	
	public function login_user($username, $password) {
		
		$this->db->where('name', $username);
		
		$result = $this->db->get('users');
		
		$db_password =$result->row(7)->password;
		
		if(password_verify($password, $db_password )) {
			
			return $result->row(0)->id_user;
			
		} else {
			
			return false;
			
		}
		
		
	}
	

}



?>