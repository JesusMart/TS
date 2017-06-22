<?php

class Klf_users extends CI_Controller {





	public function register() {


		if(!$this->session->userdata('logged_in') or
			$this->session->userdata('username') <> "Admin"
			
			) {

			$this->session->set_flashdata('no_access' , 'Sorry you are not allowed or not logged in');

			redirect('home_klf_ts/index');

		}



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


		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
		
		if($this->form_validation->run() == FALSE) {
			
			$data = array(
			
				'errors' => validation_errors()	
			
			);
			
			$this->session->set_flashdata($data);
			

			$data['connect_est'] = true;
			$data['main_view'] = "home_klf_ts_view";
			$this->load->view('layouts/klf_main', $data);
			//redirect('home_klf_ts', $data);
			
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

			// $this->session->set_flashdata('login_success', 'You are now logged in');  ** It was remove after

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


	public function toconnect() {

		$data['connect_est'] = true;
		$data['main_view'] = "home_klf_ts_view";
		$this->load->view('layouts/klf_main', $data);
		//redirect('home_klf_ts/index');	

	}		

}

?>