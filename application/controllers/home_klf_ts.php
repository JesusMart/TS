<?php

class Home_klf_ts extends CI_Controller {


	public function index() {

	if($this->session->userdata('logged_in')) {

		$user_id = $this->session->userdata('user_id');

		$data['history'] = $this->klf_history_model->get_all_history($user_id);

		$data['tickets'] = $this->klf_ticket_model->get_all_tickets($user_id);

	}

		$data['main_view'] = "home_klf_ts_view";

		/*$data['main_view'] = "layouts/empty";*/

		$data['left_view'] = "layouts/empty";		

		$this->load->view('layouts/klf_main', $data);

	}




}




?>