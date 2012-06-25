<?php

class Invalid extends CI_Controller {
	
	public $data = array();
	
	public function __construct(){
		parent::__construct();
	}
	
	/*
	 * 404 Error
	 */
	public function index(){
		$this->data['content'] = 'error/invalid';
		$this->load->view('include/main', $this->data);
	}
}