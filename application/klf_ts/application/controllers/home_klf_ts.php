<?php

class Home_klf_ts extends CI_Controller {


	public function index() {

		$data['main_view'] = "home_klf_ts_view";

		$this->load->view('layouts/klf_main', $data);

	}




}




?>