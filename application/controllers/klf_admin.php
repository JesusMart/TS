<?php

class Klf_admin extends CI_Controller {


	public function __construct() {
	parent::__construct()	;

		if(!$this->session->userdata('logged_in')) {

			$this->session->set_flashdata('no_access' , 'Sorry you are not allowed or not logged in');

			redirect('home_klf_ts/index');

		}


	}



	public function create_department() {

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['main_view'] = 'admin/create_department_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'requested_by' 			=> $this->session->userdata('user_id'),
					'title' 				=> $this->input->post('title'),
					'description' 			=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_department_mod($data))  {

				$this->session->set_flashdata('department_created','Your Department has been created Successfully!');

				redirect("klf_tickets/index");

			}

		}	

	}   


?>		