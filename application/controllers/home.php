<?php

class Home extends CI_Controller {
	
	public $data = array();
	
	public function __construct(){
		parent::__construct();
		
	}
	
	public function index(){
		$this->data['content'] = 'pages/home';
		$this->load->view('include/main', $this->data);
	}
}