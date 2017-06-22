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


	/*****************   Methods for Status  *****************/				





} 

?>	