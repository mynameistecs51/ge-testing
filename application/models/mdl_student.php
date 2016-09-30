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

	public function insertRequestion($dataRequestion)
	{
		$this->db->insert('requestion',$dataRequestion);
		$last_id = $this->db->insert_id();
		return $last_id;
	}

	public function insertReqCourse($selectCourse)
	{
		$this->db->insert('requestion_course',$selectCourse);
		// echo "<pre>";
		// print_r($selectCourse);
	}
}

/* End of file mdl_student.php */
/* Location: ./application/models/mdl_student.php */