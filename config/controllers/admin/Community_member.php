<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community_member extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_community_member');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['members'] = $this->Model_community_member->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_community_member',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

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
				$next_id = $this->Model_community_member->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'client-'.$ai_id.'.'.$ext;
		        $destination = './public/uploads/'.$final_name;
				
		        move_uploaded_file($path_tmp, $destination);

		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($destination,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

		        $form_data = array(
					'name'  => $_POST['name'],
					'url'   => $_POST['url'],
					'photo' => $final_name
	            );
	            $this->Model_community_member->add($form_data);

		        $success = 'Community member is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/community_member');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/community_member/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_community_member_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no client in this id, then redirect
    	$tot = $this->Model_community_member->client_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/community_member');
        	exit;
    	}
       	
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
		    	$data['client'] = $this->Model_community_member->get_client($id);

		    	if($path == '') {
		    		$form_data = array(
						'name' => $_POST['name'],
						'url'  => $_POST['url']
		            );
		            $this->Model_community_member->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/'.$data['client']['photo']);

					$final_name = 'client-'.$id.'.'.$ext;
		        	$destination = './public/uploads/'.$final_name;
				
			        move_uploaded_file($path_tmp, $destination);

			        if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($destination,100,true);
					 if($webp_image->status==1)
					  $final_name = $webp_image->file;
					}

		        	$form_data = array(
						'name'  => $_POST['name'],
						'url'   => $_POST['url'],
						'photo' => $final_name
		            );
		            $this->Model_community_member->update($id,$form_data);
				}
				
				$success = 'Community member is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/community_member');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/community_member/edit'.$id);
		    }
           
		} else {
			$data['client'] = $this->Model_community_member->get_client($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_community_member_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no client in this id, then redirect
    	$tot = $this->Model_community_member->client_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/community_member');
        	exit;
    	}

        $data['client'] = $this->Model_community_member->get_client($id);
        if($data['client']) {
            unlink('./public/uploads/'.$data['client']['photo']);
        }

        $this->Model_community_member->delete($id);
        $success = 'Community member is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/community_member');
    }

}