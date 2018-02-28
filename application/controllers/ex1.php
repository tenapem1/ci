<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ex1 extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modeltest');
	}
	public function index(){
		$data['rows'] = $this->modeltest->members();
		$this->load->view('ex1/viewEx1',$data);
	}
	public function insert(){
		$input = $this->input->post();
		$insert = array('u_name' => $input['u_name'] ,
						'u_pass' => $input['u_pass'] ,
						'status' => '1'
			 );
		$boolen = $this->db->insert('members',$insert);
		$response = array();
		if ($boolen) {
			$response['status'] = true; 
			$response['message'] = "สำเร็จ";
		}else{
			$response['status'] = false; 
			$response['message'] = "ไม่สำเร็จ";
		}
		echo json_encode($response);
		// var_dump($input);
	}
	public function contentModal($id){
		$data['rows'] = $this->modeltest->findmember($id);
		$this->load->view('ex1/formEdit',$data);
	}
	public function editac(){
		$input = $this->input->post();
		// var_dump($input);
		$update = array('u_name' => $input['u_name'] ,
						'u_pass' => $input['u_pass'] 
			 );
		$this->db->where('u_id',$input['u_id']);
		$boolen = $this->db->update('members',$update);
		$response = array();
		if ($boolen) {
			$response['status'] = true; 
			$response['message'] = "สำเร็จ";
		}else{
			$response['status'] = false; 
			$response['message'] = "ไม่สำเร็จ";
		}
		echo json_encode($response);
	}
	public function delete($id)
	{
		$delete = array(
				'status' => 2
		);
		$this->db->where('u_id',$id);
		$boolen = $this->db->update('members',$delete);
		$response = array();
		if ($boolen) {
			$response['status'] = true; 
			$response['message'] = "สำเร็จ";
		}else{
			$response['status'] = false; 
			$response['message'] = "ไม่สำเร็จ";
		}
		echo json_encode($response);
	}
	
}
