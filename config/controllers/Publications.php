<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publications extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_publications');
     	$this->load->model('Model_contact');
    }

	public function index()
	{	
		$data['publicationsActive']="active";
		$data['setting'] = $this->Model_common->all_setting();
		$data['publications'] = $this->Model_publications->show_publications();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_contact'] = $this->Model_common->all_page_contact();


		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header',$data);
		$this->load->view('view_publications',$data);
		$this->load->view('view_footer',$data);
	}
}