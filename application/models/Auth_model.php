<?php
/**
 * 
 */
class Auth_model extends CI_Model
{
	
	public function insert_account ($email,$password,$account_type,$created_by) {
		$encrypt_password = password_hash($password,PASSWORD_DEFAULT);
		$data = array(
			'email' => "$email",
			'password' => "$encrypt_password",
			'account_type' => "$account_type",
			//'date_created' => "$date_created",
			'created_by' => "$created_by"
			);
		$this->load->database();
		return $this->db->insert('auth', $data);
	}

	public function display_accounts() {
		$this->load->database();
		//$this->db->order_by('id','DESC');
		$sql = $this->db->get('auth');
		return $sql->result();
	}

	public function delete_account($id) {
		$this->load->database();
		$this->db->where('id',$id);
		$del = $this->db->delete('auth');
		return $del;
	}

	public function login($email) {
		$this->load->database();
		$sql = $this->db->where('email',$email)
						->get('auth');
	 	return $row = $sql->row();
	}
}