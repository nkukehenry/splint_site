<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counters extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
    }

	public function index()
	{
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_counters');
		$this->load->view('admin/view_footer');
	}

    public function create(){
		
        $error = '';
        $success = '';

        $valid = 1;

        $this->form_validation->set_rules('label', 'Counter Label', 'trim|required');
        $this->form_validation->set_rules('value', 'Counter Value', 'trim|required');
        $this->form_validation->set_rules('icon',   'Counter Icon', 'trim|required');

        if($this->form_validation->run() == FALSE) {
            $valid = 0;
            $error .= validation_errors();
        }

        // print_r($_POST);
        // exit();


        if($valid == 1) 
        {
        
            $form_data = array(
                'counter_label' => $_POST['label'],
                'counter_value' => $_POST['value'],
                'icon' => $_POST['icon']
            );

            if(empty($_POST['id'])){
                $success = 'Counter Stat saved successfully!';
                $this->Model_common->addCounter($form_data);
            }
            else{
                $success = 'Counter Stat updated successfully!';
                $this->Model_common->updateCounter($_POST['id'],$form_data);
            }

            $this->session->set_flashdata('success',$success);
        } 
        else
        {
            $this->session->set_flashdata('error',$error);
        }
        
        redirect(base_url().'counters');
	}

    public function delete($id)
    {
        if(empty($id))
        {
            $error = 'Undefined Counter Record';
            $this->session->set_flashdata('error',$error);
        }
        else{
            $success = 'Counter Stat deleted successfully!';
            $this->session->set_flashdata('success',$success);
            $this->Model_common->deleteCounter($id);
        }

        redirect(base_url().'counters');
    }

}