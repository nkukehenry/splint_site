<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('admin/Model_pages');
    }


	public function index($slug='')
	{
		if(empty($slug) ) { // || !is_numeric($id)
			redirect(base_url()."admin");
		}

		$page = $this->Model_pages->page_by_slug($slug);

		if(!$page) {
			redirect(base_url());
		}
		
		$data['setting']      = $this->Model_common->all_setting();
		$data['page_home']    = $this->Model_common->all_page_home();
		$data['comment']      = $this->Model_common->all_comment();
		$data['social']       = $this->Model_common->all_social();
		$data['page_contact'] = $this->Model_common->all_page_contact();
		$data['page_detail']  = $page;
		
		$this->load->view('view_header',$data);
		$this->load->view('view_page_detail',$data);
		$this->load->view('view_footer',$data);
	}

}