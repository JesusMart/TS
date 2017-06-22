<?php

class Klf_admin_model extends CI_Model {


	/*****************   Methods for Departments *****************/


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

	public function edit_department($department_id, $data) {

		$this->db->where('id_department', $department_id);
		$this->db->update('department', $data);

		return true;

	}

	public function delete_department($department_id) {

		$this->db->where('id_department', $department_id);
		$this->db->delete('department');

	}



	public function get_departments_info($department_id) {

		$this->db->where('id_department', $department_id);

		$get_data = $this->db->get('department');

		return $get_data->row();

	}


	/*****************   Methods for Software Property *****************/

	public function get_software_property($id) {

		$this->db->where('id_software_property' , $id);
		$query =$this->db->get('software_property');

		return $query->row();

	}

	public function get_software_properties() {

		$query = $this->db->get('software_property');

		return $query->result();

	}	

	public function create_software_property_mod($data) {

		$insert_query = $this->db->insert('software_property', $data);

		return $insert_query;

	}		


	public function edit_software_property($software_property_id, $data) {

		$this->db->where('id_software_property', $software_property_id);
		$this->db->update('software_property', $data);

		return true;

	}	

	public function delete_software_property($software_property_id) {

		$this->db->where('id_software_property', $software_property_id);
		$this->db->delete('software_property');

	}	

	public function get_software_properties_info($software_property_id) {

		$this->db->where('id_software_property', $software_property_id);

		$get_data = $this->db->get('software_property');

		return $get_data->row();

	}	


	/*****************   Methods for Type Service  *****************/	
	
	public function get_type_service($id) {

		$this->db->where('id_type_service' , $id);
		$query =$this->db->get('type_service');

		return $query->row();

	}
	

	public function get_type_services() {

		$query = $this->db->get('type_service');

		return $query->result();

	}
	

	public function create_type_service_mod($data) {

		$insert_query = $this->db->insert('type_service', $data);

		return $insert_query;

	}		
	
	public function edit_type_service($type_service_id, $data) {

		$this->db->where('id_type_service', $type_service_id);
		$this->db->update('type_service', $data);

		return true;

	}
	
	public function delete_type_service($type_service_id) {

		$this->db->where('id_type_service', $type_service_id);
		$this->db->delete('type_service');

	}
	
	
	public function get_type_services_info($type_service_id) {

		$this->db->where('id_type_service', $type_service_id);

		$get_data = $this->db->get('type_service');

		return $get_data->row();

	}
	
	
	/*****************   Methods for Category  *****************/	

	public function get_category($id) {

		$this->db->where('id_category' , $id);
		$query =$this->db->get('category');

		return $query->row();

	}


	public function get_categories() {

		$query = $this->db->get('category');

		return $query->result();

	}	


	public function create_category_mod($data) {

		$insert_query = $this->db->insert('category', $data);

		return $insert_query;

	}	

	public function edit_category($category_id, $data) {

		$this->db->where('id_category', $category_id);
		$this->db->update('category', $data);

		return true;

	}

	public function delete_category($category_id) {

		$this->db->where('id_category', $category_id);
		$this->db->delete('category');

	}	

	public function get_categories_info($category_id) {

		$this->db->where('id_category', $category_id);

		$get_data = $this->db->get('category');

		return $get_data->row();

	}	

	/*****************   Methods for Priority  *****************/		

	public function get_priority($id) {

		$this->db->where('id_priority' , $id);
		$query =$this->db->get('priority');

		return $query->row();

	}

	public function get_priorities() {

		$query = $this->db->get('priority');

		return $query->result();

	}

	public function create_priority_mod($data) {

		$insert_query = $this->db->insert('priority', $data);

		return $insert_query;

	}		


	public function edit_priority($priority_id, $data) {

		$this->db->where('id_priority', $priority_id);
		$this->db->update('priority', $data);

		return true;

	}

	public function delete_priority($priority_id) {

		$this->db->where('id_priority', $priority_id);
		$this->db->delete('priority');

	}	


	public function get_priorities_info($priority_id) {

		$this->db->where('id_priority', $priority_id);

		$get_data = $this->db->get('priority');

		return $get_data->row();

	}


	/*****************   Methods for Status  *****************/				

	public function get_status($id) {

		$this->db->where('id_status' , $id);
		$query =$this->db->get('status');

		return $query->row();

	}


	public function get_statuses() {

		$query = $this->db->get('status');

		return $query->result();

	}

	public function create_status_mod($data) {

		$insert_query = $this->db->insert('status', $data);

		return $insert_query;

	}		


	public function edit_status($status_id, $data) {

		$this->db->where('id_status', $status_id);
		$this->db->update('status', $data);

		return true;

	}	


	public function delete_status($status_id) {

		$this->db->where('id_status', $status_id);
		$this->db->delete('status');

	}	

	public function get_statuses_info($status_id) {

		$this->db->where('id_status', $status_id);

		$get_data = $this->db->get('status');

		return $get_data->row();

	}	

	/*********************************************************/					



} 

?>	