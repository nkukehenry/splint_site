<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_event');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['event'] = $this->Model_event->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_event',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('event_title', 'Event Title', 'trim|required');
			$this->form_validation->set_rules('event_content_short', 'Event Short Content', 'trim|required');
			$this->form_validation->set_rules('event_content', 'Event Content', 'trim|required');
			$this->form_validation->set_rules('event_start_date', 'Event Start Date', 'trim|required');
			$this->form_validation->set_rules('event_end_date', 'Event End Date', 'trim|required');
			$this->form_validation->set_rules('event_location', 'Event Location', 'trim|required');

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

		    $path1 = $_FILES['banner']['name'];
		    $path_tmp1 = $_FILES['banner']['tmp_name'];

		    if($path1!='') {
		        $ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
		        $file_name = basename( $path1, '.' . $ext1 );
		        $ext_check1 = $this->Model_common->extension_check_photo($ext1);
		        if($ext_check1 == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for banner<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_event->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'event-'.$ai_id.'.'.$ext;
		        $img_path = './public/uploads/'.$final_name;
		        move_uploaded_file( $path_tmp, $img_path);

		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($img_path,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

		        $final_name1 = 'event-banner-'.$ai_id.'.'.$ext1;
		        $img_path1 = './public/uploads/'.$final_name1;
		        move_uploaded_file( $path_tmp1, $img_path1);

		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($img_path1,100,true);
				 if($webp_image->status==1)
				  $final_name1 = $webp_image->file;
				}

		        $form_data = array(
					'event_title'         => $_POST['event_title'],
					'name_slag'           => strtolower(str_replace(' ', '-', $_POST['event_title'])),
					'event_content'       => $_POST['event_content'],
					'event_content_short' => $_POST['event_content_short'],
					'event_start_date'    => $_POST['event_start_date'],
					'event_end_date'      => $_POST['event_end_date'],
					'event_location'      => $_POST['event_location'],
					'event_map'           => $_POST['event_map'],
					'photo'               => $final_name,
					'banner'              => $final_name1,
					'meta_title'          => $_POST['meta_title'],
					'meta_keyword'        => $_POST['meta_keyword'],
					'meta_description'    => $_POST['meta_description']
	            );
	            $this->Model_event->add($form_data);

		        $success = 'Event is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/event');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/event/add');
		    }
            
        } else {
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_event_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no event in this id, then redirect
    	$tot = $this->Model_event->event_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/event');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('event_title', 'Event Title', 'trim|required');
			$this->form_validation->set_rules('event_content_short', 'Event Short Content', 'trim|required');
			$this->form_validation->set_rules('event_content', 'Event Content', 'trim|required');
			$this->form_validation->set_rules('event_start_date', 'Event Start Date', 'trim|required');
			$this->form_validation->set_rules('event_end_date', 'Event End Date', 'trim|required');
			$this->form_validation->set_rules('event_location', 'Event Location', 'trim|required');

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

		    $path1 = $_FILES['banner']['name'];
		    $path_tmp1 = $_FILES['banner']['tmp_name'];

		    if($path1!='') {
		        $ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
		        $file_name1 = basename( $path1, '.' . $ext1 );
		        $ext_check1 = $this->Model_common->extension_check_photo($ext1);
		        if($ext_check1 == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    }

		    if($valid == 1) 
		    {
		    	$data['event'] = $this->Model_event->getData($id);

		    	if($path == '' && $path1 == '') {
		    		$form_data = array(
						'event_title'         => $_POST['event_title'],
						'name_slag'           => strtolower(str_replace(' ', '-', $_POST['event_title'])),
						'event_content'       => $_POST['event_content'],
						'event_content_short' => $_POST['event_content_short'],
						'event_start_date'    => $_POST['event_start_date'],
						'event_end_date'      => $_POST['event_end_date'],
						'event_location'      => $_POST['event_location'],
						'event_map'           => $_POST['event_map'],
						'meta_title'          => $_POST['meta_title'],
						'meta_keyword'        => $_POST['meta_keyword'],
						'meta_description'    => $_POST['meta_description']
		            );
		            $this->Model_event->update($id,$form_data);
				}
				if($path != '' && $path1 == '') {
					//unlink('./public/uploads/'.$data['event']['photo']);

					$final_name = 'event-'.$id.'.'.$ext;
		        	$img_path = './public/uploads/'.$final_name;
			        move_uploaded_file( $path_tmp, $img_path);

			        if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($img_path,100,true);
					 if($webp_image->status==1)
					  $final_name = $webp_image->file;
					}

		        	$form_data = array(
						'event_title'         => $_POST['event_title'],
						'name_slag'           => strtolower(str_replace(' ', '-', $_POST['event_title'])),
						'event_content'       => $_POST['event_content'],
						'event_content_short' => $_POST['event_content_short'],
						'event_start_date'    => $_POST['event_start_date'],
						'event_end_date'      => $_POST['event_end_date'],
						'event_location'      => $_POST['event_location'],
						'event_map'           => $_POST['event_map'],
						'photo'               => $final_name,
						'meta_title'          => $_POST['meta_title'],
						'meta_keyword'        => $_POST['meta_keyword'],
						'meta_description'    => $_POST['meta_description']
		            );
		            $this->Model_event->update($id,$form_data);
				}
				if($path == '' && $path1 != '') {
					//unlink('./public/uploads/'.$data['event']['banner']);

					$final_name1 = 'event-banner-'.$id.'.'.$ext1;
		        	$img_path1 = './public/uploads/'.$final_name1;
			        move_uploaded_file( $path_tmp1, $img_path1);

			        if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($img_path1,100,true);
					 if($webp_image->status==1)
					  $final_name1 = $webp_image->file;
					}

		        	$form_data = array(
						'event_title'         => $_POST['event_title'],
						'name_slag'           => strtolower(str_replace(' ', '-', $_POST['event_title'])),
						'event_content'       => $_POST['event_content'],
						'event_content_short' => $_POST['event_content_short'],
						'event_start_date'    => $_POST['event_start_date'],
						'event_end_date'      => $_POST['event_end_date'],
						'event_location'      => $_POST['event_location'],
						'event_map'           => $_POST['event_map'],
						'banner'              => $final_name1,
						'meta_title'          => $_POST['meta_title'],
						'meta_keyword'        => $_POST['meta_keyword'],
						'meta_description'    => $_POST['meta_description']
		            );
		            $this->Model_event->update($id,$form_data);
				}
				if($path != '' && $path1 != '') {

					//unlink('./public/uploads/'.$data['event']['photo']);
					//unlink('./public/uploads/'.$data['event']['banner']);

		        	$final_name = 'event-'.$ai_id.'.'.$ext;
			        $img_path = './public/uploads/'.$final_name;
			        move_uploaded_file( $path_tmp, $img_path);

			        if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($img_path,100,true);
					 if($webp_image->status==1)
					  $final_name = $webp_image->file;
					}

			        $final_name1 = 'event-banner-'.$ai_id.'.'.$ext1;
			        $img_path1 = './public/uploads/'.$final_name1;
			        move_uploaded_file( $path_tmp1, $img_path1);

			        if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($img_path1,100,true);
					 if($webp_image->status==1)
					  $final_name1 = $webp_image->file;
					}

		        	$form_data = array(
						'event_title'         => $_POST['event_title'],
						'name_slag'           => strtolower(str_replace(' ', '-', $_POST['event_title'])),
						'event_content'       => $_POST['event_content'],
						'event_content_short' => $_POST['event_content_short'],
						'event_start_date'    => $_POST['event_start_date'],
						'event_end_date'      => $_POST['event_end_date'],
						'event_location'      => $_POST['event_location'],
						'event_map'           => $_POST['event_map'],
						'photo'               => $final_name,
						'banner'              => $final_name1,
						'meta_title'          => $_POST['meta_title'],
						'meta_keyword'        => $_POST['meta_keyword'],
						'meta_description'    => $_POST['meta_description']
		            );
		            $this->Model_event->update($id,$form_data);
				}

				$success = 'Event is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/event');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/event/add');
		    }
           
		} else {
			$data['event'] = $this->Model_event->getData($id);
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_event_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_event->event_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/event');
        	exit;
    	}

        $data['event'] = $this->Model_event->getData($id);
        if($data['event']) {
            unlink('./public/uploads/'.$data['event']['photo']);
            unlink('./public/uploads/'.$data['event']['banner']);
        }

        $this->Model_event->delete($id);
        $success = 'Event is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/event');
    }

 

	public function index_event_sessions($id)
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['event'] = $this->Model_event->show();
		$data['event_id'] = $id;
		$data['sessions'] = $this->Model_event->show_event_sessions($id);

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_event_sessions',$data);
		$this->load->view('admin/view_footer');
	}


	public function save_event_sessions()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';
		

			$valid = 1;

			$event_id = $_POST['event_id'];

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
				//$number = mt_rand(10000,999999);

				$next_id = $this->Model_event->get_event_sessions_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'ev-session'.$ai_id.'.'.$ext;
		        $img_path = './public/uploads/event_session/'.$final_name;

		        move_uploaded_file( $path_tmp, $img_path);
		        
		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($img_path,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

		        $form_data = array(
		        	'event_id'          => $event_id,
					'session_title'     => $_POST['session_title'],
					'start_at'          => $_POST['start_at'],
					'end_at'            => $_POST['end_at'],
					'modorator_name'    => $_POST['modorator_name'],
					'modorator_details' => $_POST['modorator_details'],
					'photo'             => $final_name
	            );
	            $this->Model_event->add_event_session($form_data);

		        $success = 'Event Session is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/event/index_event_sessions/'.$event_id);
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/event/index_event_sessions/'.$event_id);
		    }
   	}


   	public function edit_event_sessions()
	{
		$id = $_POST['id'];
		
    	$tot = $this->Model_event->get_event_session($id);
    	if(!$tot) {
    		redirect(base_url().'admin/event');
        	exit;
    	}
       	
		$error = '';
		$success = '';

		$valid = 1;

        $path = $_FILES['photo']['name'];
	    $path_tmp = $_FILES['photo']['tmp_name'];

	    if($path!='') {
	        $ext = pathinfo( $path, PATHINFO_EXTENSION );
	        $file_name = basename( $path, '.' . $ext );
	        $ext_check = $this->Model_common->extension_check_photo($ext);
	        if($ext_check == FALSE) {
	            $valid = 0;
	            $error .= 'You must have to upload jpg, jpeg, gif, png or webp file for photo<br>';
	        }
	    }

	    if($valid == 1) 
	    {
	    	$data['session'] = $this->Model_event->get_event_session($id);

	    	if($path == '') {
	    		$form_data = array(
					'event_id'          => $_POST['event_id'],
					'session_title'     => $_POST['session_title'],
					'start_at'          => $_POST['start_at'],
					'end_at'            => $_POST['end_at'],
					'modorator_name'    => $_POST['modorator_name'],
					'modorator_details' => $_POST['modorator_details']
	            );
	            $this->Model_event->update_event_session($id,$form_data);
			}
			if($path != '') {
				unlink('./public/uploads/event_session/'.$data['session']['photo']);

				$final_name = 'ev-session-'.$id.'.'.$ext;
	        	$img_path = './public/uploads/event_session/'.$final_name;

		        move_uploaded_file( $path_tmp, $img_path);

		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($img_path,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

	        	$form_data = array(
					'event_id'          => $event_id,
					'session_title'     => $_POST['session_title'],
					'start_at'          => $_POST['start_at'],
					'end_at'            => $_POST['end_at'],
					'modorator_name'    => $_POST['modorator_name'],
					'modorator_details' => $_POST['modorator_details'],
					'photo'             => $final_name
	            );
	            $this->Model_event->update_event_session($id,$form_data);
			}

			$success = 'Event Session is updated successfully';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/event');
	    }
	    else
	    {
	    	$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/event/event');
	    }

	}

   	public function delete_event_session($id) 
	{

        $data['sessions'] = $this->Model_event->exist_check_session_speakers($id);

        if($data['sessions']==TRUE) {
        	$success = 'You can not delete session when it has session speakers';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/event/index_event_sessions/'.$id);
        }

        $this->Model_event->delete_event_session($id);
        $success = 'Event Session is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/event');
    }


	public function save_sessions_speaker()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';
		
			$valid = 1;

			$event_id = $_POST['event_id'];

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
		     else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for a the speaker<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_event->get_session_speakers_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'ev-session'.$ai_id.'.'.$ext;
		        $img_path = './public/uploads/event_session/'.$final_name;

		        move_uploaded_file( $path_tmp, $img_path);

		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($img_path,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

		        $form_data = array(
		        	'event_id'          => $event_id,
					'session_id'     => $_POST['session_id'],
					'part_name'          => $_POST['part_name'],
					'title'            => $_POST['title'],
					'description'    => $_POST['description'],
					'photo'             => $final_name
	            );
	            $this->Model_event->add_session_speaker($form_data);

		        $success = 'Session Speaker is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/event/index_event_sessions/'.$event_id);
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/event/index_event_sessions/'.$event_id);
		    }
	}


   	public function edit_sessions_speaker()
	{
		$id = $_POST['part_id'];
		$event_id = $_POST['event_id'];
		
    	$tot = $this->Model_event->get_session_speakers($id);
    	if(!$tot) {
    		redirect(base_url().'admin/event');
        	exit;
    	}
       	
		$error = '';
		$success = '';

		$valid = 1;

        $path = $_FILES['photo']['name'];
	    $path_tmp = $_FILES['photo']['tmp_name'];

	    if($path!='') {
	        $ext = pathinfo( $path, PATHINFO_EXTENSION );
	        $file_name = basename( $path, '.' . $ext );
	        $ext_check = $this->Model_common->extension_check_photo($ext);
	        if($ext_check == FALSE) {
	            $valid = 0;
	            $error .= 'You must have to upload jpg, jpeg, gif, png or webp file for photo<br>';
	        }
	    }

	    if($valid == 1) 
	    {
	    	$data['session'] = $this->Model_event->get_session_speakers($id);

	    	if($path == '') {
	    		$form_data = array(
					'event_id'       => $event_id,
					'session_id'     => $_POST['session_id'],
					'part_name'      => $_POST['part_name'],
					'title'          => $_POST['title'],
					'description'    => $_POST['description'],
					'photo'          => $final_name
	            );
	            $this->Model_event->update_event_session($id,$form_data);
			}
			if($path != '') {
				unlink('./public/uploads/event_session/'.$data['session']['photo']);

				$final_name = 'ev-session-'.$id.'.'.$ext;
	        	$img_path = './public/uploads/event_session/'.$final_name;

		        move_uploaded_file( $path_tmp, $img_path);

		        if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($img_path,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

	        	$form_data = array(
					'event_id'          => $event_id,
					'session_id'     => $_POST['session_id'],
					'part_name'          => $_POST['part_name'],
					'title'            => $_POST['title'],
					'description'    => $_POST['description'],
					'photo'             => $final_name
	            );
	            $this->Model_event->update_session_speaker($id,$form_data);
			}

			$success = 'Session speaker is updated successfully';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/event/index_event_sessions/'.$event_id);
	    }
	    else
	    {
	    	$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/event/index_event_sessions/'.$event_id);
	    }

	}

	public function delete_session_speaker($id) 
	{

        $data['sessions'] = $this->Model_event->check_session_speaker($id);
        if($data['sessions']) {
            unlink('./public/uploads/event_session/'.$data['sessions']['photo']);
        }

        $this->Model_event->delete_session_speaker($id);
        $success = 'Session speaker is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/event');
    }

}

