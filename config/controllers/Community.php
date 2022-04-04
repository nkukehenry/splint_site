<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_photo_gallery');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_community');
        $this->load->model('Model_pricing');
        $this->load->model('Model_contact');
        $this->load->model('Model_feature');
        
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_photo_gallery'] = $this->Model_common->all_page_photo_gallery();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		
		$data['photo_gallery'] = $this->Model_photo_gallery->all_photo();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['partners'] = $this->Model_community->get_all_partners();
		$data['cty_gold'] = $this->Model_community->get_our_community_gold();
		$data['cty_silver'] = $this->Model_community->get_our_community_silver();
		$data['cty_bronze'] = $this->Model_community->get_our_community_bronze();
		$data['cty_basic'] = $this->Model_community->get_our_community_basic();
		$data['page_contact'] = $this->Model_common->all_page_contact();

		$data['page_community'] = $this->Model_common->all_page_community();

		$data['partners'] = $this->Model_common->all_pertners();

		$this->load->view('view_header',$data);
		$this->load->view('view_community',$data);
		$this->load->view('view_footer',$data);
	}

	public function member_packages()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_photo_gallery'] = $this->Model_common->all_page_photo_gallery();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		
		$data['photo_gallery'] = $this->Model_photo_gallery->all_photo();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['cty_gold'] = $this->Model_community->get_all_partners();
		$data['cty_gold'] = $this->Model_community->get_our_community_gold();
		$data['cty_silver'] = $this->Model_community->get_our_community_silver();
		$data['cty_bronze'] = $this->Model_community->get_our_community_bronze();
		$data['cty_basic'] = $this->Model_community->get_our_community_basic();

		$data['pricing_one'] = $this->Model_pricing->show_pricing_item_one();
		$data['pricing_two'] = $this->Model_pricing->show_pricing_item_two();
		$data['pricing_three'] = $this->Model_pricing->show_pricing_item_three();
		$data['pricing_four'] = $this->Model_pricing->show_pricing_item_four();

		$data['pr_one'] = $this->Model_pricing->show_all_pricing_one();
		$data['pr_two'] = $this->Model_pricing->show_all_pricing_two();
		$data['pr_three'] = $this->Model_pricing->show_all_pricing_three();
		$data['pr_four'] = $this->Model_pricing->show_all_pricing_four();
		$data['page_contact'] = $this->Model_common->all_page_contact();

		$data['items'] = $this->Model_pricing->all_pricing_items();
		$data['ones']  = $this->Model_pricing->packageArray(1);
		$data['twos']  = $this->Model_pricing->packageArray(2);
		$data['threes']  = $this->Model_pricing->packageArray(3);
		$data['fours']  = $this->Model_pricing->packageArray(4);
		$data['pricing']  = $this->Model_pricing->get_all_pricing(); 

		$data['partner_items'] = $this->Model_pricing->show_partner_items();
		$data['encouraging_items'] = $this->Model_feature->all_features();
		$data['page_community'] = $this->Model_common->all_page_community();

		$this->load->view('view_header',$data);
		$this->load->view('view_membership',$data);
		$this->load->view('view_footer',$data);
	}

	public function registration($id)
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_photo_gallery'] = $this->Model_common->all_page_photo_gallery();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		
		$data['title'] = $id;
		$data['photo_gallery'] = $this->Model_photo_gallery->all_photo();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
		$data['page_contact'] = $this->Model_common->all_page_contact();
		$data['page_community'] = $this->Model_common->all_page_community();
	
		$this->load->view('view_header',$data);
		$this->load->view('view_registration_form',$data);
		$this->load->view('view_footer',$data);
	}


	public function save_registration()
	{
		//$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';
		
		$captcha_response = trim($_POST['g-recaptcha-response']);

		if($captcha_response != '')
		{
			$keySecret = '6LcqpjcdAAAAAHbfz7N90__CeX1l01CtAghLYIOU';

			$check = array(
				'secret'		=>	$keySecret,
				'response'		=>	$_POST['g-recaptcha-response']
			);

			$startProcess = curl_init();

			curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

			curl_setopt($startProcess, CURLOPT_POST, true);

			curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

			curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

			curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

			$receiveData = curl_exec($startProcess);

			$finalResponse = json_decode($receiveData, true);

			if($finalResponse['success'])
			{
			
        
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
        
        	       $final_name = $_POST['attachment']."_".date('Y-m-d-H-i-s').".".$ext;
        
        	    } else {
        
        	    	$valid = 1;
        	        $final_name ="";
        	    }
        
        	    if (isset($_POST['form_register'])) {
        
        	    	$package =	$_POST['package_name'];
        	  
        				$next_id = $this->Model_community->get_auto_increment_id();
        				foreach ($next_id as $row) {
        		            $ai_id = $row['Auto_increment'];
        		        }
        
        		        $final_name = 'registration-'.$ai_id.'.'.$ext;
        		        move_uploaded_file( $path_tmp, './public/uploads/registration/'.$final_name );
        
        		        $form_data = array(
        		        	'company'  => $_POST['company'],
        					'email'   => $_POST['email'],
        					'subs_email'   => $_POST['email'],
        					'subs_date'   => date('Y-m-d-H-i-s'),
        					'designation'  => $_POST['designation'],
        					'phone'   => $_POST['phone'],
        					'blockchain'  => $_POST['blockchain'],
        					'cybersec'   => $_POST['cybersec'],
        					'digital_pymt_sln'  => $_POST['digital_pymt_sln'],
        					'cross_bdr_mymts'   => $_POST['cross_bdr_mymts'],
        					'big_data_analytics'  => $_POST['big_data_analytics'],
        					'insur_tech'   => $_POST['insur_tech'],
        					'e_commerce'  => $_POST['e_commerce'],
        					'artifical_int'   => $_POST['artifical_int'],
        					'mobile_banking'  => $_POST['mobile_banking'],
        					'micro_credit'   => $_POST['micro_credit'],
        					'regulation'  => $_POST['regulation'],
        					'digital_economy'   => $_POST['digital_economy'],
        					'financial_literacy'  => $_POST['financial_literacy'],
        					'digital_identification'   => $_POST['digital_identification'],
        					'wealth_management'  => $_POST['wealth_management'],
        					'digital_savings'   => $_POST['digital_savings'],
        					'women_in_fintech'   => $_POST['women_in_fintech'],
        					'banking'   => $_POST['banking'],
        					'fintech_enthusiast'   => $_POST['fintech_enthusiast'],
        					'package_name'   => $_POST['package_name'],
        					'fist_name'   => $_POST['fist_name'],
        					'last_name'   => $_POST['last_name'],
        					'busines_type'   => $_POST['busines_type'],
        					'monthly_turn_over'   => $_POST['monthly_turn_over'],
        					'female_employee_no'   => $_POST['female_employee_no'],
        					'programmes_and_vents'   => $_POST['programmes_and_vents'],
        					'promotion_and_advocacy'   => $_POST['promotion_and_advocacy'],
        					'policy_and_regulation'   => $_POST['policy_and_regulation'],
        					'capital_and_funding'   => $_POST['capital_and_funding'],
        					'scaling_and_international'   => $_POST['scaling_and_international'],
        					'message'   => $_POST['message'],
        					'attachment' => $final_name
        	            );
        	            
        	            $this->Model_community->save_registration($form_data);
        
        		        $success = 'Registration is added successfully!';
        		        $this->session->set_flashdata('success',$success);
        				redirect(base_url().'membership-registration/'.$package);
        		}
			}
			else
			{
				$this->session->set_flashdata('error', 'Validation Fail Try Again');
				redirect(base_url().'membership-registration/'.$package);
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Validation Fail Try Again');
			redirect(base_url().'membership-registration/'.$package);
		}
         
	}


}