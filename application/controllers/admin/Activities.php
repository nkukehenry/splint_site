<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_Activities');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['activity'] = $this->Model_Activities->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_activity',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

	   		if($valid == 1)
		    {				
		        $form_data = array(
					'title' => $_POST['title'],
					'description' => $_POST['description']
	            );
	            $this->Model_Activities->add($form_data);

		        $success = 'Activity is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/activities');		        
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/activities/add');
		    }
            
        } else {
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_activity_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
    	$tot = $this->Model_Activities->activities_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/activities');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

		    if($valid == 1) 
		    {
		    	$data['activity'] = $this->Model_Activities->getData($id);

	    		$form_data = array(
					'title' => $_POST['title'],
					'description' => $_POST['description']
	            );
	            $this->Model_Activities->update($id,$form_data);
				
				$success = 'Activity is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/activities');
		    }
		    else 
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/activities/add');
		    }

          
		} else {
			$data['activity'] = $this->Model_Activities->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_activity_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}

	public function delete($id) 
	{
    	$tot = $this->Model_Activities->activities_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/activities');
        	exit;
    	}

        $this->Model_Activities->delete($id);
        $success = 'Activity is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/activities');
    }    

}