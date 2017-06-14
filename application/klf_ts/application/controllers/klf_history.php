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

					'requested_by' 	=> $this->session->userdata('user_id'),
					'title' 		=> $this->input->post('description'),
					'description' 	=> $this->input->post('date_time')


				);

			if($this->klf_history_model->create_history($data))  {

				$this->session->set_flashdata('history_created','Your History has been created Successfully!');

				redirect("klf_history/index");

			}

		}	

	}


}


?>