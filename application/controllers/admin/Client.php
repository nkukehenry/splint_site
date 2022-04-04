<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_client');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['client'] = $this->Model_client->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_client',$data);
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
				$next_id = $this->Model_client->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'partner-'.$ai_id.'.'.$ext;
		        $destination = './public/uploads/partners/'.$final_name;
				
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
	            $this->Model_client->add($form_data);

		        $success = 'Partner is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/partner');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/partner/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_client_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{

		
    	// If there is no partner in this id, then redirect
    	$tot = $this->Model_client->client_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/partner');
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
		    	$data['client'] = $this->Model_client->get_client($id);

		    	if($path == '') {
		    		$form_data = array(
						'name' => $_POST['name'],
						'url'  => $_POST['url']
		            );
		            $this->Model_client->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/partners/'.$data['client']['photo']);

					$final_name = 'partner-'.$id.'.'.$ext;
		        	$destination = './public/uploads/partners/'.$final_name;
				
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
		            $this->Model_client->update($id,$form_data);
				}
				
				$success = 'Partner is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/partner');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/partner/edit'.$id);
		    }
           
		} else {
			$data['client'] = $this->Model_client->get_client($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_client_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no client in this id, then redirect
    	$tot = $this->Model_client->client_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/partner');
        	exit;
    	}

        $data['client'] = $this->Model_client->get_client($id);
        if($data['client']) {
            unlink('./public/uploads/partners/'.$data['client']['photo']);
        }

        $this->Model_client->delete($id);
        $success = 'Partner is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/partner');
    }



	public function event_sponsor($id)
	{
		$data['eventid'] = $id;
		$data['sponsors'] = $this->Model_client->show_event_sponsors($id);

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_event_sponsor',$data);
		$this->load->view('admin/view_footer');
	}


	public function event_sponsor_add($id)
	{

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
				$next_id = $this->Model_client->get_sponsors_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'sponsor-'.$ai_id.'.'.$ext;
		        $destination = './public/uploads/event_sponsors/'.$final_name;
				
		        move_uploaded_file($path_tmp, $destination);

		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($destination,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

		        $form_data = array(
					'name'  => $_POST['name'],
					'event_id' => $_POST['event_id'],
					'url'   => $_POST['url'],
					'photo' => $final_name
	            );
	            $this->Model_client->add_event_sponsor($form_data);

		        $success = 'Event sponsor is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/event-sponsor/'.$id);
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/event-sponsor/new/'.$id);
		    }
            
        } else {

        	$data['eventid'] = $id;
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_event_sponsor_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}

	public function event_sponsor_edit($eventid,$id)
	{
       	
		$error = '';
		$success = '';

		//print_r($eventid."--".$id);
		//exit();

		if(isset($_POST['form1'])) 
		{
			$valid = 1;

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
		    	if($path == '') {
		    		$form_data = array(
						'name'     => $_POST['name'],
						'event_id' => $_POST['event_id'],
						'url'      => $_POST['url']
		            );
		            $this->Model_client->update_event_sponsor($id,$form_data);
				}
				else {

					$data['sponsor'] = $this->Model_client->get_event_sponsor($id);
			        if($data['sponsor']) {
			            unlink('./public/uploads/event_sponsors/'.$data['sponsor']['photo']);
			        }

					$final_name = 'sponsor-'.$id.'.'.$ext;
		        	$destination = './public/uploads/event_sponsors/'.$final_name;
				
			        move_uploaded_file($path_tmp, $destination);

			        if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($destination,100,true);
					 if($webp_image->status==1)
					  $final_name = $webp_image->file;
					}

		        	$form_data = array(
						'name'  => $_POST['name'],
						'event_id' => $_POST['event_id'],
						'url'   => $_POST['url'],
						'photo' => $final_name
		            );
		            $this->Model_client->update_event_sponsor($id,$form_data);
				}
				
				$success = 'Event sponsor is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/event-sponsor/'.$eventid);
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/event-sponsor/edit/'.$id);
		    }
           
		} else {
			$data['eventid'] = $eventid;
			$data['sponsor'] = $this->Model_client->get_event_sponsor($id);

	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_event_sponsor_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function event_sponsor_delete($eventid,$id) 
	{
        $data['sponsor'] = $this->Model_client->get_event_sponsor($id);
        if($data['sponsor']) {
            unlink('./public/uploads/event_sponsors/'.$data['sponsor']['photo']);
        }

        $this->Model_client->delete_event_sponsor($id);
        $success = 'Event sponsor is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/event-sponsor/'.$eventid);
    }


}