<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_management extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function getCourse()
	{
		$sql = '
		SELECT
		`course`.`course_id`,
		`course`.`course_name`,
		`groupcourse`.`group_name`,
		`course`.`id_course`,
		`groupcourse`.`id_group`
		FROM
		`course`
		INNER JOIN `groupcourse` ON `course`.`id_group` = `groupcourse`.`id_group`
		';
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	public function getGroup()
	{
		$query = $this->db->get('groupcourse')->result_array();
		return $query;
	}

	public function getDataCourse($id_course)
	{
		$sql = "
		SELECT
		requestion.id_req,
		CONCAT((CASE member.mem_preName
		WHEN 1 THEN 'นาย'
		WHEN 2 THEN 'นาง'
		WHEN 3 THEN 'นางสาว'
		END),' ',member.mem_name,' ',member.mem_lastname) AS studentName,
		member.id_member,
		member.mem_tel,
		member.mem_email,
		member.mem_id,
		member.mem_faculty,
		member.mem_branch,
		requestion.req_classNum,
		(CASE requestion.req_pak
		WHEN 1 THEN 'ปกติ'
		WHEN 2 THEN 'พิเศษ'
		WHEN 3 THEN 'อื่น ๆ'
		END )AS pak,
		(CASE requestion.req_class
		WHEN 1 THEN 'ปริญาตรี'
		WHEN 2 THEN 'ปริญญาโท'
		WHEN 3 THEN 'อื่น ๆ'
		END) AS class,
		requestion.req_term,
		requestion.req_year,
		requestion.req_group,
		requestion.req_detail,
		requestion.req_evidence,
		requestion_course.rc_group,
		requestion_course.rc_teacher,
		CONCAT(DATE_FORMAT(requestion_course.rc_date,'%d'),'/',DATE_FORMAT(requestion_course.rc_date,'%m'),'/',DATE_FORMAT(requestion_course.rc_date,'%Y')+543) AS rc_date,
		requestion_course.rc_time,
		course.id_course,
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
		WHERE requestion_course.id_course = '".$id_course."'
		";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	public function memberStatus()
	{
		$sql = "
		SELECT
		id_member,
		CONCAT((CASE mem_preName
		WHEN 1 THEN 'นาย'
		WHEN 2 THEN 'นาง'
		WHEN 3 THEN 'นางสาว'
		END),' ',mem_name,' ',mem_lastname) AS mem_name,
		mem_faculty,
		mem_branch,
		mem_status
		FROM
			member
		";
		$dataMember = $this->db->query($sql)->result_array();
		return $dataMember;
	}

	public function updateMemberStatus($status)
	{
		$id_member = $this->input->post('id_member');

		$updateStatus = $this->db->query('UPDATE member SET mem_status ="'.$status.'" WHERE id_member ="'.$id_member.'" ');
		return true;
	}

}

/* End of file mdl_management.php */
/* Location: ./application/models/mdl_management.php */