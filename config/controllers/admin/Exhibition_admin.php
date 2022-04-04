<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exhibition_admin extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_why_choose');
        $this->load->model('admin/Model_exhibition');
    }
    
    
	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['exhibitions'] = $this->Model_exhibition->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_exhibitions',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['members'] = $this->Model_why_choose->show();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_description', 'Short Description', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		    
		    if($valid == 1) 
		    {
				$next_id = $this->Model_exhibition->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'exhibitions-'.$ai_id.'.'.$ext;
		        $destination = './public/uploads/exhibition/'.$final_name;
				
				move_uploaded_file($path_tmp, $destination);

				if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($destination,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}


		        $srch_char = array("(",")",":","/","+",","," ","?","`","’","'");
		    		   $rp = array("-","-","-","-","-","-","-","-","-","-","-");

		    	$dt = strtolower(str_replace(" - "," ",$_POST['name']));

		        $form_data = array(
		        	'member_id'         => $_POST['member_id'],
					'name'              => $_POST['name'],
					'name_slag'         => strtolower(str_replace($srch_char,$rp,$dt)),
					'short_description' => $_POST['short_description'],
					'description'       => $_POST['description'],
					'photo'             => $final_name,
					'meta_title'        => $_POST['meta_title'],
					'meta_keyword'      => $_POST['meta_keyword'],
					'meta_description'  => $_POST['meta_description']
	            );
	            $this->Model_exhibition->add($form_data);

		        $success = 'Item is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/exhibitions');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/exhibitions/new');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_exhibitions_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no service in this id, then redirect
    	$tot = $this->Model_exhibition->exhibition_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/exhibitions');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
       	$data['members'] = $this->Model_why_choose->show();
       	
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_description', 'Short Description', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    }

		    
		    if($valid == 1) 
		    {
		    	$data['service'] = $this->Model_exhibition->getData($id);

		    	if($path == '') {

		    		$srch_char = array("(",")",":","/","+",","," ","?","`","’","'");
		    		       $rp = array("-","-","-","-","-","-","-","-","-","-","-");

		    		$dt = strtolower(str_replace(" - "," ",$_POST['name']));

		    		$form_data = array(
		    			'member_id'         => $_POST['member_id'],
						'name'              => $_POST['name'],
						'name_slag'         => strtolower(str_replace($srch_char,$rp,$dt)),
						'short_description' => $_POST['short_description'],
						'description'       => $_POST['description'],
						'meta_title'        => $_POST['meta_title'],
						'meta_keyword'      => $_POST['meta_keyword'],
						'meta_description'  => $_POST['meta_description']
		            );
		            $this->Model_exhibition->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/exhibition/'.$data['service']['photo']);

					$final_name = 'exhibitions-'.$id.'.'.$ext;
		        	$destination = './public/uploads/exhibition/'.$final_name;
				
					move_uploaded_file($path_tmp, $destination);

					if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($destination,100,true);
					 if($webp_image->status==1)
					  $final_name = $webp_image->file;
					}

		        	$srch_char = array("(",")",":","/","+",","," ","?","`","’","'");
		    		       $rp = array("-","-","-","-","-","-","-","-","-","-","-");

		    		$dt = strtolower(str_replace(" - "," ",$_POST['name']));

		        	$form_data = array(
		        	    'member_id'         => $_POST['member_id'],
						'name'              => $_POST['name'],
						'name_slag'         => strtolower(str_replace($srch_char,'-',$dt)),
						'short_description' => $_POST['short_description'],
						'description'       => $_POST['description'],
						'photo'             => $final_name,
						'meta_title'        => $_POST['meta_title'],
						'meta_keyword'      => $_POST['meta_keyword'],
						'meta_description'  => $_POST['meta_description']
		            );
		            $this->Model_exhibition->update($id,$form_data);
				}
				$success = 'Item is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/exhibitions');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/exhibitions/edit/'.$id);
		    }
           
		} else {
			$data['service'] = $this->Model_exhibition->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_exhibitions_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no service in this id, then redirect
    	$tot = $this->Model_exhibition->exhibition_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/exhibitions');
        	exit;
    	}

        $data['service'] = $this->Model_exhibition->getData($id);
        if($data['service']) {
            unlink('./public/uploads/'.$data['service']['photo']);
        }

        $this->Model_exhibition->delete($id);
        $success = 'Item is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/exhibitions');
    }

}