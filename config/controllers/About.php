<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_contact');
        $this->load->model('admin/Model_Activities');
    }


	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_about'] = $this->Model_common->all_page_about();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_contact'] = $this->Model_common->all_page_contact();

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
		
		$data['activity'] = $this->Model_Activities->show();

		$this->load->view('view_header',$data);
		$this->load->view('view_about',$data);
		$this->load->view('view_footer',$data);
	}
}