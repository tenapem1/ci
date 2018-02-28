<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modeltest');
	}

	public function index()
	{
		$this->load->model('modeltest');
		$data['row'] = $this->modeltest->members();
		$this->load->view("user/register", $data);
	}
	public function ten()
	{
		echo "ten";
	}
	public function insert()
	{
		$input = $this->input->post();

		$insert = array('u_name' => $input['name'] ,
						'u_pass' => $input['pass'] ,
						'status' => '1' 
			 );
		$boolen = $this->db->insert('members',$insert);
		redirect('user','refresh');

	}
	public function ajextest(){
		$input = $this->input->post();
		$insert = array('u_name' => $input['u_name'] ,
						'u_pass' => $input['u_pass'] 
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
	public function form_edit($id)
	{
		$data['rows'] = $this->modeltest->findmember($id);
		$this->load->view('user/form_edit', $data);
	}
	public function action_edit($id)
	{
		$input = $this->input->post();

		$update = array('u_name' => $input['name'] ,
						'u_pass' => $input['pass'] 
			 );
		$this->db->where('u_id',$id);
		$boolen = $this->db->update('members',$update);
		echo $boolen;
		// redirect('user','refresh');
	}
	public function edit()
	{
		$input = $this->input->post();
		// var_dump($input);
		$insert = array('u_name' => $input['name'] ,
						'u_pass' => $input['pass'] 
			 );

		$boolen = $this->db->insert('members',$insert);
		redirect('user','refresh');
	}
	public function delete($id)
	{
		$delete = array(
				'status' => 2
		);
		$this->db->where('u_id',$id);
		$boolen = $this->db->update('members',$delete);
		redirect('user');
	}
}
