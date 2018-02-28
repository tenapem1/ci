<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modeltest extends CI_Model {

	public function members(){
		$this->db->select('*');
		$this->db->from('members');
		$this->db->where('status',1);
		$query = $this->db->get();

		if ($query->num_rows()>0) {
			$res = $query->result_array();
		}else{
			$res = [];
		}
		return $res;
	}
	public function chklogin($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('members');
		$this->db->where('u_name', $user);
		$this->db->where('u_pass', $pass);
		$query = $this->db->get();

		if ($query->num_rows()>0) {
			$res = $query->result_array();
			$this->session->set_userdata('ses_user', $res);
		}else{
			$res = [];
		}
		return $res;
	}	

	public function findmember($id){
		$this->db->select('*');
		$this->db->from('members');
		$this->db->where('u_id', $id);
		$query = $this->db->get();

		if ($query->num_rows()>0) {
			$res = $query->result_array();
		}else{
			$res = [];
		}
		return $res;
	}

}
