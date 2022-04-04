<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_service');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_contact');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_service'] = $this->Model_common->all_page_service();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_contact'] = $this->Model_common->all_page_contact();

		$data['services'] = $this->Model_service->all_service();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header',$data);
		$this->load->view('view_service',$data);
		$this->load->view('view_footer',$data);
	}

	public function view($id)
	{
		if( !isset($id) ) { //|| !is_numeric($id) 
			redirect(base_url());
		} 

		$tot = $this->Model_service->service_check($id);
		if(!$tot) {
			redirect(base_url());
		} 

		$data['setting'] = $this->Model_common->all_setting();
		$data['page_service'] = $this->Model_common->all_page_service();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_contact'] = $this->Model_common->all_page_contact();

		$data['services'] = $this->Model_service->all_service();
		$data['service'] = $this->Model_service->service_detail($id);

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['id'] = $id;

		$this->load->view('view_header',$data);
		$this->load->view('view_service_detail',$data);
		$this->load->view('view_footer');
	}



	public function opportunities()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_service'] = $this->Model_common->all_page_service();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_contact'] = $this->Model_common->all_page_contact();

		$data['opportunities'] = $this->Model_service->all_opportunities();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header',$data);
		$this->load->view('view_opportunity',$data);
		$this->load->view('view_footer',$data);
	}


	public function opportunities_details($id=0)
	{
		if( !isset($id) ) { //|| !is_numeric($id) 
			redirect(base_url());
		}

		$tot = $this->Model_service->service_check($id);
		if(!$tot) {
			redirect(base_url());
		}

		$data['setting'] = $this->Model_common->all_setting();
		$data['page_service'] = $this->Model_common->all_page_service();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_contact'] = $this->Model_common->all_page_contact();

		$data['opportunities'] = $this->Model_service->all_service();
		$data['opportunity'] = $this->Model_service->service_detail($id);

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['id'] = $id;

		$this->load->view('view_header',$data);
		$this->load->view('view_opportunity_detail',$data);
		$this->load->view('view_footer');
	}


}