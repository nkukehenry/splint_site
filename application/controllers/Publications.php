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
		$data['types']    = publication_types();


		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header',$data);
		$this->load->view('view_publications',$data);
		$this->load->view('view_footer',$data);
	}

	public function download(){

		$this->Model_publications->save_downloader();
		$this->load->helper('download');
		force_download($this->input->post('r'), NULL);
		//redirect( site_url('publications'));
	}


	public function cron(){

		$data['downloads'] = $this->Model_publications->get_downloads();

		if( count ($data['downloads'])>0){

			$message = $this->load->view('emails/downloads_email',$data,TRUE);
			@send_mail('info@fitspa.ug',$message,'FITSPA Downloads Report');

	        $done = $this->Model_publications->mark_uploaded();

	        echo ($done)?'Finished':'Failed';

	    }else{

	    	echo 'No new downloads were found';
	    }

	}

	
}