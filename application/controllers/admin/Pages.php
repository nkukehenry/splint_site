<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_pages');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['pages'] = $this->Model_pages->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_pages',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('page_title', 'Page Title', 'trim|required');
			// $this->form_validation->set_rules('page_content_short', 'Page Short Content', 'trim|required');
			$this->form_validation->set_rules('page_content', 'pages Content', 'trim|required');
			$this->form_validation->set_rules('category_id', 'Category', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

          
		    //Banner

		    $path     = $_FILES['banner']['name'];
		    $path_tmp = $_FILES['banner']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);

		    if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for the banner<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_pages->get_auto_increment_id();
				
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'pages-'.$ai_id.'.'.$ext;
		        $destination = './public/uploads/'.$final_name;
				
				move_uploaded_file($path_tmp, $destination);

				if ($ext!=="webp") {

					$webp_image = $this->towebp->convert($destination,100,true);
					if($webp_image->status==1)
					$final_name = $webp_image->file;
				}


		        $form_data = array(
					'page_title'         => $_POST['page_title'],
					'page_slag'          => make_slug($_POST['page_title']),
					'page_content'       => $_POST['page_content'],
					'page_content_short' => '',
					'publication_date'   => $_POST['page_date'],
					'photo'              => '',
					'banner'             => $final_name,
					'page_category_id'   => $_POST['category_id'],
					'comment'            => $_POST['comment'],
					'meta_title'         => (isset($_POST['meta_title']))?$_POST['meta_title']:$_POST['page_title'],
					'meta_keyword'       => $_POST['meta_keyword'],
					'meta_description'   => (isset($_POST['meta_description']))?$_POST['meta_description']:truncate($_POST['page_content'],200),
					'is_published'       => $_POST['is_published']
	            );

	            $this->Model_pages->add($form_data);

		        $success = 'Page  added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/pages');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/pages/add');
		    }
            
        } else {
            $data['all_category'] = $this->Model_pages->get_category();
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_page_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no pages in this id, then redirect
    	$page = $this->Model_pages->pages_check($id);

    	if(!$page) {
    		redirect(base_url().'admin/pages');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('page_title', 'Page Title', 'trim|required');
			//$this->form_validation->set_rules('pages_content_short', 'pages Short Content', 'trim|required');
			$this->form_validation->set_rules('page_content', 'Page Content', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            //Banner

		    $path = $_FILES['banner']['name'];
		    $path_tmp = $_FILES['banner']['tmp_name'];

		    if($path!='') {

		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);

		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    }

		    if($valid == 1) 
		    {
		    	    $data['page'] = $this->Model_pages->getData($id);

		    		$form_data = array(
						'page_title'         => $_POST['page_title'],
						'page_slag'          => make_slug($_POST['page_title']),
						'page_content'       => $_POST['page_content'],
						'page_content_short' => '',
						'publication_date'   => $_POST['page_date'],
						'page_category_id'   => $_POST['category_id'],
						'comment'            => $_POST['comment'],
						'meta_title'         => (isset($_POST['meta_title']))?$_POST['meta_title']:$_POST['page_title'],
						'meta_keyword'       => $_POST['meta_keyword'],
						'meta_description'   => (isset($_POST['meta_description']))?$_POST['meta_description']:truncate($_POST['page_content'],200),
						'is_published'       => $_POST['is_published']
		            );
				

				if($path !== '') {

					unlink('./public/uploads/'.$data['page']['banner']);

					$final_name = 'page-banner-'.$id.'.'.$ext;
		        	$destination = './public/uploads/'.$final_name;
				
					move_uploaded_file($path_tmp, $destination);

					if ($ext!=="webp") {
						 $webp_image = $this->towebp->convert($destination,100,true);
						 if($webp_image->status==1)
						  $final_name = $webp_image->file;
					}

		        	$form_data['banner'] = $final_name;
				}

				$this->Model_pages->update($id,$form_data);

				$success = 'Page updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/pages');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/pages/edit/'.$id);
		    }
           
		} else {

			$data['page'] = $this->Model_pages->getData($id);
			$data['all_category'] = $this->Model_pages->get_category();
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_page_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_pages->pages_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/pages');
        	exit;
    	}

        $data['pages'] = $this->Model_pages->getData($id);
        if($data['pages']) {
            unlink('./public/uploads/'.$data['pages']['photo']);
            unlink('./public/uploads/'.$data['pages']['banner']);
        }

        $this->Model_pages->delete($id);
        $success = 'pages is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/pages');
    }

 
}