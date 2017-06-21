<?php

class Klf_admin extends CI_Controller {


	public function __construct() {
	parent::__construct()	;

		if(!$this->session->userdata('logged_in')) {

			$this->session->set_flashdata('no_access' , 'Sorry you are not allowed or not logged in');

			redirect('home_klf_ts/index');

		}


	}


	public function index_department() {

		$data['departments'] = $this->klf_admin_model->get_departments();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "admin/index_departments";

		$this->load->view('layouts/klf_main', $data);

	}


	public function display_departments($department_id) {
		
		//$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);

		$data['department_data'] = $this->klf_admin_model->get_department($department_id);

		$data['main_view'] = "admin/display_departments";

		$data['departments'] = $this->klf_admin_model->get_departments();
		$data['left_view'] = "admin/index_departments";

		$this->load->view('layouts/klf_main', $data);		


	}









	public function create_department() {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['departments'] = $this->klf_admin_model->get_departments();
			$data['left_view'] = "admin/index_departments";			
			$data['main_view'] = 'admin/create_department_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_department_mod($data))  {

				$this->session->set_flashdata('department_created','Your Department has been created Successfully!');

				redirect("klf_admin/index_department");

			}

		}	

	}   

}

?>		