<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_contact');
        $this->load->model('Model_portfolio');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_contact'] = $this->Model_common->all_page_contact();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_contact->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header',$data);
		$this->load->view('view_contact',$data);
		$this->load->view('view_footer',$data);
	}

	public function send_email() 
	{

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if(isset($_POST['form_contact'])) {

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

					$valid = 1;

					$this->form_validation->set_rules('name', 'Name', 'trim|required');
					$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
					$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
					$this->form_validation->set_rules('message', 'Message', 'trim|required');
					$this->form_validation->set_error_delimiters('', '<br>');

					if($this->form_validation->run() == FALSE) {
						$valid = 0;
		                $error .= validation_errors();
		            }

				    if($valid == 1)
				    {
						$msg = '
		            		<h3>Sender Information</h3>
							<b>Name: </b> '.$_POST['name'].'<br><br>
							<b>Phone: </b> '.$_POST['phone'].'<br><br>
							<b>Email: </b> '.$_POST['email'].'<br><br>
							<b>Subject: </b> '.$_POST['subject'].'<br><br>
							<b>Message: </b> '.$_POST['message'].'
						';
		            	$this->load->library('email');

						$this->email->from($data['setting']['send_email_from']);
						$this->email->to($data['setting']['receive_email_to']);
						$this->email->reply_to($_POST['email'], $_POST['name']);

						$this->email->subject('FITSPA Webiste Contact Form Email');
						$this->email->message($msg);

						$this->email->set_mailtype("html");

						$this->email->send();

				        $success = 'Thank you for sending the email. We will contact you shortly.';
		        		$this->session->set_flashdata('success',$success);

				    } 
				    else
				    {
		        		$this->session->set_flashdata('error',$error);
				    }

					redirect(base_url().'contact');

		        } else {
		            $this->session->set_flashdata('error','reCAPTCHA Validation error occured');
		            redirect(base_url().'contact');
		        }
			}else{
				$this->session->set_flashdata('error','reCAPTCHA Validation. Prove that you are not a robot');
		        redirect(base_url().'contact');
			}
		}
	}
	
}