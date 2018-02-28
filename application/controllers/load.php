<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class load extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modeltest');
	}
	public function index(){
		$this->load->view('load/testload');
	}
	public function content(){
		$id['rows'] =$this->modeltest->members();
		$this->load->view('load/content', $id);
	}
	

}
