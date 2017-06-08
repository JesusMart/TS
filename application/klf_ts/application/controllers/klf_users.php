<?php

class Klf_users extends CI_Controller {

	public function show() {

		// $this->load->model('klf_user_model');   // It is loaded in the autoload.php in config

		$data['results'] = $this->klf_user_model->get_users();

		$this->load->view('klf_user_view', $data);

		// foreach ($result as $object) {

		// 	echo $object->name . "<br>";

		// }

	}

}

?>