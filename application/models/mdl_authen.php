<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_authen extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	public function insertRegis($dataRegis)
	{
		$this->db->insert('member',$dataRegis);
	}

	public function getMember($email,$password)
	{
		$sql = "SELECT * FROM member WHERE mem_email ='".$email."' AND mem_passwd ='".$password."' ";
		$query = $this->db->query($sql)->result();
		return  $query;
	}

}

/* End of file mdl_authen.php */
/* Location: ./application/models/mdl_authen.php */