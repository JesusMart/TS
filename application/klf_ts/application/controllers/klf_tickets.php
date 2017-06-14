<?php

class Klf_tickets extends CI_Controller {


	public function __construct() {
	parent::__construct()	;

		if(!$this->session->userdata('logged_in')) {

			$this->session->set_flashdata('no_access' , 'Sorry you are not alloewd or not logged in');

			redirect('home_klf_ts/index');

		}


	}


	public function index() {

		$data['tickets'] = $this->klf_ticket_model->get_tickets();

		$data['main_view'] = "tickets/index";

		$this->load->view('layouts/klf_main', $data);

	}


	public function display($ticket_id) {

		$data['ticket_data'] = $this->klf_ticket_model->get_ticket($ticket_id);

		$data['main_view'] = "tickets/display";

		$this->load->view('layouts/klf_main', $data);		


	}


	public function create() {

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	

		if($this->form_validation->run() == FALSE) {

			$data['main_view'] = 'tickets/create_ticket';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'requested_by' 	=> $this->session->userdata('user_id'),
					'title' 		=> $this->input->post('title'),
					'description' 	=> $this->input->post('description')


				);

			if($this->klf_ticket_model->create_ticket($data))  {

				$this->session->set_flashdata('ticket_created','Your Ticket has been created Successfully!');

				redirect("klf_tickets/index");

			}

		}	

	}




}




?>