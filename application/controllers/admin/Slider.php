<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_slider');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['slider'] = $this->Model_slider->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_slider',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error = 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error = 'You must have to select a photo for featured photo<br>';
		    }

		    if($valid == 1) {

				$next_id = $this->Model_slider->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'slider-'.$ai_id.'.'.$ext;
		        $destination = './public/uploads/slider/'.$final_name;
				
				move_uploaded_file($path_tmp, $destination);

				if ($ext!=="webp") {
				 $webp_image = $this->towebp->convert($destination,100,true);
				 if($webp_image->status==1)
				  $final_name = $webp_image->file;
				}

		        $form_data = array(
					'photo'        => $final_name,
					'text_01'       => $_POST['text_01'],
					'text_02'       => $_POST['text_02'],
					'text_03' 		=> $_POST['text_03'],
					'text_04'  		=> $_POST['text_04'],
					'btn_text' 		=> $_POST['btn_text'],
					'btn_url' 		=> $_POST['btn_url'],
					'position'      => $_POST['position']
	            );
	            $this->Model_slider->add($form_data);

	            $success = 'Slider is added successfully!';
	            $this->session->set_flashdata('success',$success);
	            redirect(base_url().'admin/slider');
		    }
		    else {
		    	$this->session->set_flashdata('error',$error);
	            redirect(base_url().'admin/slider/add');
		    }
        } else {
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_slider_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no slider in this id, then redirect
    	$tot = $this->Model_slider->slider_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/slider');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

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
		            $data['error'] = 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    }

		    if($valid == 1) 
		    {
		    	$data['slider'] = $this->Model_slider->getData($id);

		    	if($path == '') {
		    		$form_data = array(
						'text_01'       => $_POST['text_01'],
						'text_02'       => $_POST['text_02'],
						'text_03' 		=> $_POST['text_03'],
						'text_04'  		=> $_POST['text_04'],
						'btn_text' 		=> $_POST['btn_text'],
						'btn_url' 		=> $_POST['btn_url'],
						'position'      => $_POST['position']
		            );
		            $this->Model_slider->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/slider/'.$data['slider']['photo']);

					$final_name = 'slider-'.$id.'.'.$ext;
		        	$destination = './public/uploads/slider/'.$final_name;
				
					move_uploaded_file($path_tmp, $destination);

					if ($ext!=="webp") {
					 $webp_image = $this->towebp->convert($destination,100,true);
					 if($webp_image->status==1)
					  $final_name = $webp_image->file;
					}

		        	$form_data = array(
						'photo'        => $final_name,
						'text_01'       => $_POST['text_01'],
						'text_02'       => $_POST['text_02'],
						'text_03' 		=> $_POST['text_03'],
						'text_04'  		=> $_POST['text_04'],
						'btn_text' 		=> $_POST['btn_text'],
						'btn_url' 		=> $_POST['btn_url'],
						'position'      => $_POST['position']
		            );
		            $this->Model_slider->update($id,$form_data);
				}
				
				$success = 'Slider is uploaded successfully!';
	            $this->session->set_flashdata('success',$success);
	            redirect(base_url().'admin/slider');

		    } else {
				$this->session->set_flashdata('success',$success);
	            redirect(base_url().'admin/slider/edit'.$id);
		    }
           
		} else {
			$data['slider'] = $this->Model_slider->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_slider_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}

	public function delete($id) 
	{
    	$tot = $this->Model_slider->slider_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/slider');
        	exit;
    	}

        $data['slider'] = $this->Model_slider->getData($id);
        if($data['slider']) {
            unlink('./public/uploads/slider/'.$data['slider']['photo']);
        }

        $this->Model_slider->delete($id);
        $success = 'Slider is deleted successfully!';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/slider');
    }

}