<?php  

class Klf_history extends CI_Controller {

	public function display($history_id) {

		$data['history'] = $this->klf_history_model->get_history($history_id);

		$data['main_view'] = "history/display";

		$this->load->view('layouts/klf_main', $data);

	}


	public function create($ticket_id) {

		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('date_time', 'Date Time', 'trim|required');	

		if($this->form_validation->run() == FALSE) {

			$data['main_view'] = 'history/create_history';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(
				
				

					'id_ticket'		=> $ticket_id,
					'description' 		=> $this->input->post('description'),
					'date_time' 	=> $this->input->post('date_time')


				);

			if($this->klf_history_model->create_history($data))  {

				$this->session->set_flashdata('history_created','Your History has been created Successfully!');

				redirect("klf_tickets/index");

			}

		}	

	}


	public function edit($history_id) {

		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('date_time', 'Date Time', 'trim|required');	

		if($this->form_validation->run() == FALSE) {

			$data['ticket_id'] = $this->klf_history_model->get_history_ticket_id($history_id);

			$data['ticket_name'] = $this->klf_history_model->get_ticket_name($data['ticket_id']);

			$data['the_history'] = $this->klf_history_model->get_history_ticket_data($history_id);

			$data['main_view'] = 'history/edit_history';
			$this->load->view('layouts/klf_main', $data);

		} else {

					$ticket_id = $this->klf_history_model->get_history_ticket_id($history_id);

			$data = array(
				
				
					

					'id_ticket'		=> $ticket_id,
					'description' 		=> $this->input->post('description'),
					'date_time' 	=> $this->input->post('date_time')


				);

			if($this->klf_history_model->edit_history($history_id, $data))  {

				$this->session->set_flashdata('history_updated','Your History has been updated Successfully!');

				redirect("klf_tickets/index");

			}

		}	

	}



}


?>