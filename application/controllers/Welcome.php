<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('modeltest');
	}

	public function index()
	{
		$this->resource();
		$this->load->view('index');
	}

	public function resource()
	{
		$this->load->view('resource');
	}

	public function login()
	{	
		$input = $this->input->post();
		// var_dump($input);die();
		$this->db->select('*');
		$this->db->from('members');
		$this->db->where('u_name', $input['user']);
		$this->db->where('u_pass', $input['pass']);
		$query = $this->db->get();
		// var_dump($query);die();
		$res = array();
		if ($query->num_rows()>0) {
			$res['status'] = true;
			$res['massage'] = "สำเร็จ !!";
			$ses = $query->result_array();
			$this->session->set_userdata('ses_user', $ses);

		}else{
			$res['status'] = false;
			$res['massage'] = "ไม่สำเร็จ กรอกใหม่!!";
		}
		echo json_encode($res);

		// if ($input['user']) {
		// 	# code...
		// }
	}
	public function main()
	{
		$this->resource();
		$this->load->view('main');
	}
	public function mastermain()
	{
		$this->resource();
		$this->load->view('master/main_master');
	}
	public function mastermembers()
	{
		$this->resource();
		$this->load->view('master/members_master');
	}
}
