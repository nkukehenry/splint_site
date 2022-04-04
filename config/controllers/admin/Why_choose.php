<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Why_choose extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_why_choose');
        $this->load->model('admin/Model_pricing_table');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['why_choose'] = $this->Model_why_choose->show();
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_why_choose',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['pricing_items'] = $this->Model_pricing_table->show();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');

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
				$next_id = $this->Model_why_choose->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'community-member'.$ai_id.'.'.$ext;
		        $destination = './public/uploads/comnty-member/'.$final_name;
				
				move_uploaded_file($path_tmp, $destination);

				if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($destination,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

		        $form_data = array(
		        	'category_id' => $_POST['category_id'],
					'name'        => $_POST['name'],
					'content'     => $_POST['content'],
					'link'        => $_POST['icon'],
					'photo'       => $final_name
	            );
	            $this->Model_why_choose->add($form_data);

		        $success = 'Community member is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/our-community');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/our-community/new');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_why_choose_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}

	public function edit($id)
	{
		
    	$tot = $this->Model_why_choose->why_choose_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/our-community');
        	exit;
    	}

    	$data['pricing_items'] = $this->Model_pricing_table->show();
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');

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
		    	$data['why_choose'] = $this->Model_why_choose->getData($id);

		    	if($path == '') {
		    		$form_data = array(
		    			'category_id' => $_POST['category_id'],
						'name'        => $_POST['name'],
						'content'     => $_POST['content'],
						'link'        => $_POST['icon']
		            );
		            $this->Model_why_choose->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/'.$data['why_choose']['photo']);

					$final_name = 'community-member-'.$id.'.'.$ext;
		        	$destination = './public/uploads/comnty-member/'.$final_name;
				
					move_uploaded_file($path_tmp, $destination);

					if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($destination,100,true);
					 if($webp_image->status==1)
					  $final_name = $webp_image->file;
					}

		        	$form_data = array(
		        		'category_id' => $_POST['category_id'],
						'name'        => $_POST['name'],
						'content'     => $_POST['content'],
						'link'        => $_POST['icon'],
						'photo'       => $final_name
		            );
		            $this->Model_why_choose->update($id,$form_data);
				}
				$success = 'Community member is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/our-community');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/our-community/edit/'.$id);
		    }
           
		} else {
			$data['why_choose'] = $this->Model_why_choose->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_why_choose_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_why_choose->why_choose_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/our-community');
        	exit;
    	}

        $data['why_choose'] = $this->Model_why_choose->getData($id);
        if($data['why_choose']) {
            unlink('./public/uploads/comnty-member/'.$data['why_choose']['photo']);
        }

        $this->Model_why_choose->delete($id);
        $success = 'Community member is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/our-community');
    }

}