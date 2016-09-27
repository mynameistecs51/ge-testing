<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_student extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function getCourseAll()
	{
		$data = $this->db->get('course');
		return $data->result_array();
	}
}

/* End of file mdl_student.php */
/* Location: ./application/models/mdl_student.php */