<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_pricing');
        $this->load->model('Model_contact');
    }


	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['all_news_category'] = $this->Model_common->all_news_category();

		$data['sliders'] = $this->Model_home->all_slider();
		$data['services'] = $this->Model_home->all_service();
		$data['features'] = $this->Model_home->all_feature();
		$data['why_choose'] = $this->Model_home->all_why_choose();
		$data['team_members'] = $this->Model_home->all_team_member();
		$data['testimonials'] = $this->Model_home->all_testimonial();		
		$data['clients'] = $this->Model_home->all_client();
		$data['pricing_table'] = $this->Model_home->all_pricing_table();
		$data['home_faq'] = $this->Model_home->all_faq_home();

		$data['portfolio_category'] = $this->Model_portfolio->get_portfolio_category();
		$data['portfolio'] = $this->Model_portfolio->get_portfolio_data();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

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


		$this->load->view('home',$data);
	}

	public function send_email() {

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if(isset($_POST['form_contact'])) {

			$valid = 1;

			if($_POST['pest_control'] == 'Pest Control') {
	    		$pest_control_status = 'Yes';
	    	} else {
	    		$pest_control_status = 'No';
	    	}

	    	if($_POST['termite_control'] == 'Termite Control') {
	    		$termite_control_status = 'Yes';
	    	} else {
	    		$termite_control_status = 'No';
	    	}

	    	if($_POST['damage_repair'] == 'Damage Repair') {
	    		$damage_repair_status = 'Yes';
	    	} else {
	    		$damage_repair_status = 'No';
	    	}

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_error_delimiters('', '<br>');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            if( $pest_control_status == 'No' && $termite_control_status == 'No' && $damage_repair_status == 'No' ) {
            	$valid = 0;
                $error .= 'You must have to select at least one service.';
            }

		    if($valid == 1)
		    {
				$msg = '
            		<h3>Visitor Information</h3>
					<b>Name: </b> '.$_POST['name'].'<br><br>
					<b>Email: </b> '.$_POST['email'].'<br><br>
					<b>Phone: </b> '.$_POST['phone'].'<br><br>
					<b>City: </b> '.$_POST['city'].'<br><br>
					<b>Pest Control: </b> '.$pest_control_status.'<br><br>
					<b>Termite Control: </b> '.$termite_control_status.'<br><br>
					<b>Damage Repair: </b> '.$damage_repair_status.'
				';
            	$this->load->library('email');

				$this->email->from($data['setting']['website_email']);
				$this->email->to($data['setting']['receive_email']);

				$this->email->subject('Contact Form Email');
				$this->email->message($msg);

				$this->email->set_mailtype("html");

				$this->email->send();

		        $success = 'Thank you for sending the email. We will contact with you shortly.';
        		$this->session->set_flashdata('success',$success);

		    } 
		    else
		    {
        		$this->session->set_flashdata('error',$error);
		    }

			redirect(base_url());
            
        } else {
            
            redirect(base_url());
        }
	}
	
	public function newLoan(){
	    
	    $msg = '
            		<h3>FITSPA APPLICATION</h3>
					<b>Name: </b> '.$_POST['first_name']." ".$_POST['last_name'].'<br><br>
					<b>Email: </b> '.$_POST['email'].'<br><br>
					<b>Phone: </b> '.$_POST['phone'].'<br><br>
					<b>Address: </b> '.$_POST['address'].'<br><br>
					<b>Amount: </b> '.$_POST['amount'].'<br><br>
					<b>Message: </b> '.$_POST['message'].'<br><br>
				';
				
            	$this->load->library('email');

				$this->email->from("info@.com",'fitspa');
				//$data['setting']['website_email']
				$this->email->to("info@.com");
				$this->email->to("@gmail.com");

				$this->email->subject('Loan Application');
				$this->email->message($msg);

				$this->email->set_mailtype("html");

				$this->email->send();

		        $success = 'Thank you for your application. We will contact you shortly.';
        		$this->session->set_flashdata('success',$success);
        		
        		 redirect(base_url());
	}

	public function getTweeterFeed(){

	
	$this->load->library('tweeter');
	
	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	
	// The request method, according to the docs, is GET, not POST
	$requestMethod = 'GET';
	
	// Set up your get string, we're using my screen name here
	$getfield  = '?screen_name=BarackObama&count=5';
	
	
	$json =  $this->tweeter->setGetfield($getfield)
					 ->buildOauth($url, $requestMethod)
					 ->performRequest();
	
	// It's json, so decode it into an array
	$result = json_decode($json);
	
	foreach ($result as $entry) {?>
		  <img src="<?php echo $entry->user->profile_image_url;?>"> 
		  <?php echo $entry->text ."<br>";
	}
	
	
	print_r($result);

	}

}
