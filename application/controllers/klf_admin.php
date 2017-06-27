<?php

class Klf_admin extends CI_Controller {


	public function __construct() {
	parent::__construct()	;

		if(!$this->session->userdata('logged_in') or   
			$this->session->userdata('username') <> "Admin"

		      ) {

			

			$this->session->set_flashdata('no_access' , 'Sorry you are not allowed or not logged in');

			redirect('home_klf_ts/index');

		}


	}


	/*****************   Methods for Departments *****************/


	public function index_department() {

		$data['departments'] = $this->klf_admin_model->get_departments();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "admin/index_departments";

		$this->load->view('layouts/klf_main', $data);

	}


	public function display_departments($department_id) {
		
		//$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);

		$data['department_data'] = $this->klf_admin_model->get_department($department_id);

		$data['main_view'] = "admin/display_departments";

		$data['departments'] = $this->klf_admin_model->get_departments();
		$data['left_view'] = "admin/index_departments";

		$this->load->view('layouts/klf_main', $data);		


	}


	public function create_department() {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['departments'] = $this->klf_admin_model->get_departments();
			$data['left_view'] = "admin/index_departments";			
			$data['main_view'] = 'admin/create_department_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_department_mod($data))  {

				$this->session->set_flashdata('department_created','Your Department has been created Successfully!');

				redirect("klf_admin/index_department");

			}

		}	

	}   


	public function edit_department($department_id) {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');			

        
        
        if ( (($this->input->post('submit') !== null)  and   ($this->input->post('submit')   == "Update")) or
             ($this->input->post('submit') == null)
            )
        
        {
           
                if($this->form_validation->run() == FALSE) {


                    $data['department_data'] = $this->klf_admin_model->get_departments_info($department_id);

                    $data['departments'] = $this->klf_admin_model->get_departments();
                    $data['left_view'] = "admin/index_departments";


                    $data['main_view'] = 'admin/edit_department';
                    $this->load->view('layouts/klf_main', $data);



                } else {



                    $data = array(

                            'name' 			=> $this->input->post('name'),
                            'description' 	=> $this->input->post('description')


                        );

                    if($this->klf_admin_model->edit_department($department_id, $data))  {

                        $this->session->set_flashdata('department_updated','Your Department has been updated Successfully!');

                        redirect("klf_admin/index_department");


                    }



                }   /* else */
        
        }
        else   /* Button Cancel  */
            {
              redirect("klf_admin/index_department");  
            }

	}


    public function delete_department($department_id) {

    	//$this->klf_ticket_model->delete_ticket_history($ticket_id);

    	$this->klf_admin_model->delete_department($department_id);

		$this->session->set_flashdata('department_deleted','Your Department has been deleted Successfully!');

		redirect("klf_admin/index_department");    	

    }	


	/*****************   Methods for Software Property *****************/

	public function index_software_property() {


		$data['software_properties'] = $this->klf_admin_model->get_software_properties();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "admin/index_software_properties";

		$this->load->view('layouts/klf_main', $data);

	}	


	public function display_software_properties($software_property_id) {
		
		//$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);

		$data['software_property_data'] = $this->klf_admin_model->get_software_property($software_property_id);

		$data['main_view'] = "admin/display_software_properties";

		$data['software_properties'] = $this->klf_admin_model->get_software_properties();
		$data['left_view'] = "admin/index_software_properties";

		$this->load->view('layouts/klf_main', $data);		


	}



	public function create_software_property() {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['software_properties'] = $this->klf_admin_model->get_software_properties();
			$data['left_view'] = "admin/index_software_properties";			
			$data['main_view'] = 'admin/create_software_property_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_software_property_mod($data))  {

				$this->session->set_flashdata('software_property_created','Your Software Property has been created Successfully!');

				redirect("klf_admin/index_software_property");

			}

		}	

	}   


	public function edit_software_property($software_property_id) {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');			

		if($this->form_validation->run() == FALSE) {

			$data['software_property_data'] = $this->klf_admin_model->get_software_properties_info($software_property_id);

			$data['software_properties'] = $this->klf_admin_model->get_software_properties();
			$data['left_view'] = "admin/index_software_properties";
			
			
			$data['main_view'] = 'admin/edit_software_property';
			$this->load->view('layouts/klf_main', $data);
			
		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')


				);

			if($this->klf_admin_model->edit_software_property($software_property_id, $data))  {

				$this->session->set_flashdata('software_property_updated','Your Software Property has been updated Successfully!');

				redirect("klf_admin/index_software_property");


			}

		}	

	}


    public function delete_software_property($software_property_id) {

    	//$this->klf_ticket_model->delete_ticket_history($ticket_id);

    	$this->klf_admin_model->delete_software_property($software_property_id);

		$this->session->set_flashdata('software_property_deleted','Your Software Property has been deleted Successfully!');

		redirect("klf_admin/index_software_property");    	

    }	

	/*****************   Methods for Type Service  *****************/	

	public function index_type_service() {

		$data['type_services'] = $this->klf_admin_model->get_type_services();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "admin/index_type_services";

		$this->load->view('layouts/klf_main', $data);

	}

	
	public function display_type_services($type_service_id) {
		
		//$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);

		$data['type_service_data'] = $this->klf_admin_model->get_type_service($type_service_id);

		$data['main_view'] = "admin/display_type_services";

		$data['type_services'] = $this->klf_admin_model->get_type_services();
		$data['left_view'] = "admin/index_type_services";

		$this->load->view('layouts/klf_main', $data);		


	}
	
	

	public function create_type_service() {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['type_services'] = $this->klf_admin_model->get_type_services();
			$data['left_view'] = "admin/index_type_services";			
			$data['main_view'] = 'admin/create_type_service_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_type_service_mod($data))  {

				$this->session->set_flashdata('type_service_created','Your Type Service has been created Successfully!');

				redirect("klf_admin/index_type_service");

			}

		}	

	}   	
	
	
	public function edit_type_service($type_service_id) {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');			

		if($this->form_validation->run() == FALSE) {

			$data['type_service_data'] = $this->klf_admin_model->get_type_services_info($type_service_id);

			$data['type_services'] = $this->klf_admin_model->get_type_services();
			$data['left_view'] = "admin/index_type_services";
			
			
			$data['main_view'] = 'admin/edit_type_service';
			$this->load->view('layouts/klf_main', $data);
			
		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')


				);

			if($this->klf_admin_model->edit_type_service($type_service_id, $data))  {

				$this->session->set_flashdata('type_service_updated','Your Type Service has been updated Successfully!');

				redirect("klf_admin/index_type_service");


			}

		}	

	}	
	
    public function delete_type_service($type_service_id) {

    	//$this->klf_ticket_model->delete_ticket_history($ticket_id);

    	$this->klf_admin_model->delete_type_service($type_service_id);

		$this->session->set_flashdata('type_service_deleted','Your Type Service has been deleted Successfully!');

		redirect("klf_admin/index_type_service");    	

    }	
	

	/*****************   Methods for Category  *****************/	

	public function index_category() {

		$data['categories'] = $this->klf_admin_model->get_categories();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "admin/index_categories";

		$this->load->view('layouts/klf_main', $data);

	}

	public function display_categories($category_id) {
		
		//$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);

		$data['category_data'] = $this->klf_admin_model->get_category($category_id);

		$data['main_view'] = "admin/display_categories";

		$data['categories'] = $this->klf_admin_model->get_categories();
		$data['left_view'] = "admin/index_categories";

		$this->load->view('layouts/klf_main', $data);		


	}	


	public function create_category() {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['categories'] = $this->klf_admin_model->get_categories();
			$data['left_view'] = "admin/index_categories";			
			$data['main_view'] = 'admin/create_category_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_category_mod($data))  {

				$this->session->set_flashdata('category_created','Your Category has been created Successfully!');

				redirect("klf_admin/index_category");

			}

		}	

	}   


	public function edit_category($category_id) {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');			

		if($this->form_validation->run() == FALSE) {

			$data['category_data'] = $this->klf_admin_model->get_categories_info($category_id);

			$data['categories'] = $this->klf_admin_model->get_categories();
			$data['left_view'] = "admin/index_categories";
			
			
			$data['main_view'] = 'admin/edit_category';
			$this->load->view('layouts/klf_main', $data);
			
		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')


				);

			if($this->klf_admin_model->edit_category($category_id, $data))  {

				$this->session->set_flashdata('category_updated','Your Category has been updated Successfully!');

				redirect("klf_admin/index_category");


			}

		}	

	}


    public function delete_category($category_id) {

    	//$this->klf_ticket_model->delete_ticket_history($ticket_id);

    	$this->klf_admin_model->delete_category($category_id);

		$this->session->set_flashdata('category_deleted','Your Category has been deleted Successfully!');

		redirect("klf_admin/index_category");    	

    }	


	/*****************   Methods for Priority  *****************/		

	public function index_priority() {

		$data['priorities'] = $this->klf_admin_model->get_priorities();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "admin/index_priorities";

		$this->load->view('layouts/klf_main', $data);

	}	


	public function display_priorities($priority_id) {
		
		//$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);

		$data['priority_data'] = $this->klf_admin_model->get_priority($priority_id);

		$data['main_view'] = "admin/display_priorities";

		$data['priorities'] = $this->klf_admin_model->get_priorities();
		$data['left_view'] = "admin/index_priorities";

		$this->load->view('layouts/klf_main', $data);		


	}	


	public function create_priority() {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['priorities'] = $this->klf_admin_model->get_priorities();
			$data['left_view'] = "admin/index_priorities";			
			$data['main_view'] = 'admin/create_priority_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_priority_mod($data))  {

				$this->session->set_flashdata('priority_created','Your Priority has been created Successfully!');

				redirect("klf_admin/index_priority");

			}

		}	

	}   



	public function edit_priority($priority_id) {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');			

		if($this->form_validation->run() == FALSE) {

			$data['priority_data'] = $this->klf_admin_model->get_priorities_info($priority_id);

			$data['priorities'] = $this->klf_admin_model->get_priorities();
			$data['left_view'] = "admin/index_priorities";
			
			
			$data['main_view'] = 'admin/edit_priority';
			$this->load->view('layouts/klf_main', $data);
			
		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')


				);

			if($this->klf_admin_model->edit_priority($priority_id, $data))  {

				$this->session->set_flashdata('priority_updated','Your Priority has been updated Successfully!');

				redirect("klf_admin/index_priority");


			}

		}	

	}


    public function delete_priority($priority_id) {

    	//$this->klf_ticket_model->delete_ticket_history($ticket_id);

    	$this->klf_admin_model->delete_priority($priority_id);

		$this->session->set_flashdata('priority_deleted','Your Priority has been deleted Successfully!');

		redirect("klf_admin/index_priority");    	

    }	



	/*****************   Methods for Status  *****************/			


	public function index_status() {

		$data['statuses'] = $this->klf_admin_model->get_statuses();

		$data['main_view'] = "layouts/empty";

		$data['left_view'] = "admin/index_statuses";

		$this->load->view('layouts/klf_main', $data);

	}	

	public function display_statuses($status_id) {
		
		//$data['all_id_history'] = $this->klf_ticket_model->get_id_ticket_history($ticket_id);

		$data['status_data'] = $this->klf_admin_model->get_status($status_id);

		$data['main_view'] = "admin/display_statuses";

		$data['statuses'] = $this->klf_admin_model->get_statuses();
		$data['left_view'] = "admin/index_statuses";

		$this->load->view('layouts/klf_main', $data);		


	}	


	public function create_status() {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');	


		if($this->form_validation->run() == FALSE) {

			$data['statuses'] = $this->klf_admin_model->get_statuses();
			$data['left_view'] = "admin/index_statuses";			
			$data['main_view'] = 'admin/create_status_view';
			$this->load->view('layouts/klf_main', $data);

		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')

				);

			if($this->klf_admin_model->create_status_mod($data))  {

				$this->session->set_flashdata('status_created','Your Status has been created Successfully!');

				redirect("klf_admin/index_status");

			}

		}	

	}   


	public function edit_status($status_id) {

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');			

		if($this->form_validation->run() == FALSE) {

			$data['status_data'] = $this->klf_admin_model->get_statuses_info($status_id);

			$data['statuses'] = $this->klf_admin_model->get_statuses();
			$data['left_view'] = "admin/index_statuses";
			
			
			$data['main_view'] = 'admin/edit_status';
			$this->load->view('layouts/klf_main', $data);
			
		} else {

			$data = array(

					'name' 			=> $this->input->post('name'),
					'description' 	=> $this->input->post('description')


				);

			if($this->klf_admin_model->edit_status($status_id, $data))  {

				$this->session->set_flashdata('status_updated','Your Status has been updated Successfully!');

				redirect("klf_admin/index_status");


			}

		}	

	}


    public function delete_status($status_id) {

    	//$this->klf_ticket_model->delete_ticket_history($ticket_id);

    	$this->klf_admin_model->delete_status($status_id);

		$this->session->set_flashdata('status_deleted','Your Status has been deleted Successfully!');

		redirect("klf_admin/index_status");    	

    }	




	/*********************************************************/				



}

?>		