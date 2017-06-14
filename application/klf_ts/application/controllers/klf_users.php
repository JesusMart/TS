<?php

class Klf_users extends CI_Controller {

	// public function show($user_id) {

	// 	// $this->load->model('klf_user_model');   // It is loaded in the autoload.php in config

	// 	$data['results'] = $this->klf_user_model->get_users($user_id, 'hilda');

	// 	$this->load->view('klf_user_view', $data);

	// 	// foreach ($result as $object) {

	// 	// 	echo $object->name . "<br>";

	// 	// }

	// }

	// public function insert() {

	// 	$name = "Leonardo";
	// 	$password = "secret";
	// 	$id_type_user = 3;
	// 	$id_department = 2;

	// 	$this->klf_user_model->create_users([

	// 		'name' => $name,
	// 		'password' => $password,
	// 		'id_type_user' => $id_type_user,
	// 		'id_department' => $id_department

	// 		]);

	// }

	// public function update() {

	// 	$id = 5;

	// 	$name = "Leo";
	// 	$password = "not so secret";
	// 	//$id_type_user = 3;
	// 	//$id_department = 2;

	// 	$this->klf_user_model->update_users([

	// 		'name' => $name,
	// 		'password' => $password
	// 		//'id_type_user' => $id_type_user,
	// 		//'id_department' => $id_department

	// 		], $id);

	// }	

	// public function delete() {

	// 	$id = 5;

	// 	$this->klf_user_model->delete_users($id);

	// }

	public function register() {

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE) {
			
		$data['main_view'] = 'users/klf_register_view';

		$this->load->view('layouts/klf_main', $data);
			
		} else {

			if($this->klf_user_model->create_user()) {

				$this->session->set_flashdata('user_registered', 'User has been registered');
				redirect('home_klf_ts/index');

			} else {



			}

			

		}	


	}

	public function login() {

		//echo $_POST['username'];

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
		
		if($this->form_validation->run() == FALSE) {
			
			$data = array(
			
				'errors' => validation_errors()	
			
			);
			
			$this->session->set_flashdata($data);
			
			redirect('home_klf_ts');
			
		} else {
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$user_id = $this->klf_user_model->login_user($username, $password);
			
			if($user_id) {
				
				$user_data = array(
				
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				
				);
			

			$this->session->set_userdata($user_data);	

			$this->session->set_flashdata('login_success', 'You are now logged in');

			// $data['main_view'] = "klf_admin_view";

			// $this->load->view('layouts/klf_main', $data);			
				
			redirect('home_klf_ts/index');	
				
			} else {

				
				$this->session->set_flashdata('login_failed', 'Sorry You are not logged in');
				redirect('home_klf_ts/index');	
				
			}
			
		}

	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('home_klf_ts/index');	

	}	

}

?>