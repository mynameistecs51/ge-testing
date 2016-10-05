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
}

/* End of file mdl_management.php */
/* Location: ./application/models/mdl_management.php */