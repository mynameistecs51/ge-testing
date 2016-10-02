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

	public function studentSelect_course($id_member)
	{
		$sql = "
		SELECT	requestion.id_req,
		CONCAT((CASE member.mem_preName
		WHEN 1 THEN 'นาย'
		WHEN 2 THEN 'นาง'
		WHEN 3 THEN 'นางสาว'
		END),' ',member.mem_name,' ',member.mem_lastname) AS studentName,
		member.id_member,
		member.mem_tel,
		member.mem_email,
		member.mem_id,
		requestion.req_branch,
		requestion.req_classNum,
		requestion.req_pak,
		requestion.req_class,
		requestion.req_term,
		requestion.req_year,
		requestion_course.rc_teacher,
		requestion_course.rc_date,
		requestion_course.rc_time,
		course.course_id,
		course.course_name,
		groupcourse.group_name
		FROM
		course
		INNER JOIN groupcourse ON course.id_group = groupcourse.id_group
		INNER JOIN requestion_course ON requestion_course.id_course =
		course.id_course
		INNER JOIN requestion
		ON requestion.id_req = requestion_course.id_req
		INNER JOIN member ON member.id_member = requestion.id_create
		WHERE member.id_member='6'
		";
		$query = $this->db->query($sql)->result();
		return $query;
	}
}

/* End of file mdl_student.php */
/* Location: ./application/models/mdl_student.php */