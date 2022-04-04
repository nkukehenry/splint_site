<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exhibition extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_exhibition');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_contact');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_exhibition'] = $this->Model_common->all_page_exhibition();

		$data['exhibitions'] = $this->Model_exhibition->all_exhibition();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header',$data);
		$this->load->view('view_exhibitions',$data);
		$this->load->view('view_footer',$data);
	}

	public function view($id)
	{
		if( !isset($id) ) { //|| !is_numeric($id) 
			redirect(base_url());
		} 

		$tot = $this->Model_exhibition->exhibition_check($id);
		if(!$tot) {
			redirect(base_url());
		} 

		$data['setting'] = $this->Model_common->all_setting();
		$data['page_service'] = $this->Model_common->all_page_service();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_exhibition'] = $this->Model_common->all_page_exhibition();

		$data['exhibitions'] = $this->Model_exhibition->all_exhibition();
		$data['exhibition'] = $this->Model_exhibition->exhibition_detail($id);

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['id'] = $id;

		$this->load->view('view_header',$data);
		$this->load->view('view_exhibitions_detail',$data);
		$this->load->view('view_footer');
	}



}