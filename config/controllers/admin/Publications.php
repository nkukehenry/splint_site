<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publications extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_publications');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['publications'] = $this->Model_publications->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_publications',$data);
		$this->load->view('admin/view_footer');
	}


	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form12'])) {

			$valid = 1;

            $path = $_FILES['attachment']['name'];
		    $path_tmp = $_FILES['attachment']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_attachment($ext);

		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload xlsx, docx, pdf, xls, png, doc, jpg, png, jpeg or gif file<br>';
		        }

		       $final_name = $_POST['name']."_".date('Y-m-d-H-i-s').".".$ext;

		    } else {

		    	$valid = 1;
		        $final_name ="";
		    }
		   
		    if($valid == 1) 
		    {
		        move_uploaded_file( $path_tmp, './public/uploads/directory/'.$final_name );
		        $form_data = array(
					'name'        => $_POST['name'],
					'content'     => $_POST['content'],
					'attachment'  => $final_name

	            );
	            $this->Model_publications->add($form_data);

		        $success = 'Publications/Directory is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/publications');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/publications/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_publications_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
	
    	$tot = $this->Model_publications->publications_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/publications');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;
            
            $path = $_FILES['attachment']['name'];
		    $path_tmp = $_FILES['attachment']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_attachment($ext);

		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload xlsx, docx, pdf, xls, png, doc, jpg, png, jpeg or gif file<br>';
		        }

		    } else {

		    	$valid = 1;
		    }
		   
		    if($valid == 1) 
		    {

		    	$data['publications'] = $this->Model_publications->getData($id);

		    	if($path == '') {
		    		$form_data = array(
						'name'        => $_POST['name'],
					    'content'     => $_POST['content']
		            );
		            $this->Model_publications->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/'.$data['attachment']);

					$final_name = $_POST['name']."_".date('Y-m-d-H-i-s').".".$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/directory/'.$final_name );

		        	$form_data = array(
					'name'        => $_POST['name'],
					'content'     => $_POST['content'],
					'attachment'  => $final_name
	            );
	            $this->Model_publications->update($id,$form_data);
				}
				
				$success = 'Publications/Directory is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/publications');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/publications/edit/'.$id);
		    }
           
		} else {
			$data['publications'] = $this->Model_publications->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_publications_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}

	public function delete($id) 
	{
    	$tot = $this->Model_publications->publications_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/publications');
        	exit;
    	}

        $data['publications'] = $this->Model_publications->getData($id);
        if($data['publications']) {
            unlink('./public/uploads/directory/'.$data['publications']['attachment']);
        }

        $this->Model_publications->delete($id);
        $success = 'Publication/directory is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/publications');
    }

}