<?php

class Klf_tickets extends CI_Controller {


	public function __construct() {
	parent::__construct()	;

		if(!$this->session->userdata('logged_in')) {

			$this->session->set_flashdata('no_access' , 'Sorry you are not allowed or not logged in');

			redirect('home_klf_ts/index');

		}


	}


	public function index() {

		$data['tickets'] = $this->klf_ticket_model->get_tickets();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "tickets/index";

		$this->load->view('layouts/klf_main', $data);

	}


	public function display($ticket_id) {
		
		/*
		$data['completed_history'] = $this->klf_ticket_model->get_ticket_history($ticket_id, true);

		$data['not_completed_history'] = $this->klf_ticket_model->get_ticket_history($ticket_id, false);
		*/
		
		$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);
		
		
		

		$data['ticket_data'] = $this->klf_ticket_model->get_ticket($ticket_id);

		$data['main_view'] = "tickets/display";
		
		
		$data['tickets'] = $this->klf_ticket_model->get_tickets();
		$data['left_view'] = "tickets/index";

		$this->load->view('layouts/klf_main', $data);		


	}


	public function create() {

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	
		$this->form_validation->set_rules('id_software_property', 'id_software_property', 'trim|required');	
		$this->form_validation->set_rules('id_type_service', 'id_type_service', 'trim|required');	
		$this->form_validation->set_rules('id_category', 'id_category', 'trim|required');	
		$this->form_validation->set_rules('id_priority', 'id_priority', 'trim|required');	
		$this->form_validation->set_rules('attachements', 'attachements', 'trim|required');	

		if($this->form_validation->run() == FALSE) {

			$data['software_property'] = $this->klf_ticket_model->get_software_property();
			$data['type_service'] = $this->klf_ticket_model->get_type_service();
			$data['category'] = $this->klf_ticket_model->get_category();
			$data['priority'] = $this->klf_ticket_model->get_priority();

			$data['tickets'] = $this->klf_ticket_model->get_tickets();
			$data['left_view'] = "tickets/index";
			$data['main_view'] = 'tickets/create_ticket';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'requested_by' 			=> $this->session->userdata('user_id'),
					'title' 				=> $this->input->post('title'),
					'description' 			=> $this->input->post('description'),
					'id_software_property'	=> $this->input->post('id_software_property'),
					'id_type_service'		=> $this->input->post('id_type_service'),
					'id_category'			=> $this->input->post('id_category'),
					'id_priority'			=> $this->input->post('id_priority'),
					'attachements'			=> $this->input->post('attachements'),
					'id_user_assigned_champion' => 1


				);

			if($this->klf_ticket_model->create_ticket($data))  {

				$this->session->set_flashdata('ticket_created','Your Ticket has been created Successfully!');

				redirect("klf_tickets/index");

			}

		}	

	}  


	public function edit($ticket_id) {

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	

		if($this->form_validation->run() == FALSE) {

			$data['ticket_data'] = $this->klf_ticket_model->get_tickets_info($ticket_id);

			$data['tickets'] = $this->klf_ticket_model->get_tickets();
			$data['left_view'] = "tickets/index";
			
			
			$data['main_view'] = 'tickets/edit_ticket';
			$this->load->view('layouts/klf_main', $data);
			
		} else {

			$data = array(

					'requested_by' 	=> $this->session->userdata('user_id'),
					'title' 		=> $this->input->post('title'),
					'description' 	=> $this->input->post('description')


				);

			if($this->klf_ticket_model->edit_ticket($ticket_id, $data))  {

				$this->session->set_flashdata('ticket_updated','Your Ticket has been updated Successfully!');

				redirect("klf_tickets/index");

			}

		}	

	}    
    
    
    public function delete($ticket_id) {

    	$this->klf_ticket_model->delete_ticket_history($ticket_id);

    	$this->klf_ticket_model->delete_ticket($ticket_id);

		$this->session->set_flashdata('ticket_deleted','Your Ticket has been deleted Successfully!');

		redirect("klf_tickets/index");    	

    }
    


}




?>