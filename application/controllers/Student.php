<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl='Student';
	}
	public function   index()
	{
		$SCREENNAME = "คำร้องขอสอบกรณีพิเศษ";
		$PAGE = "std_request";
		$this->data['controller'] = $this->ctl;
		$this->mainPage($SCREENNAME);
		$this->load->view($PAGE,$this->data);
	}

	public function mainPage($SCREENNAME)
	{
		$this->data['header'] = $this->template_student->getHeader($SCREENNAME);
		$this->data['footer'] = $this->template_student->getFooter();
	}

	public function insertRequestion()
	{
		$dataRequestion = array(
			'id_req' => '',
			'req_prename' =>  $this->input->post('prename'),
			'req_name' =>  $this->input->post('name'),
			'req_lastname' =>  $this->input->post('lastname'),
			'req_stdID' =>  $this->input->post('stdID'),
			'req_faculty' =>  $this->input->post('faculty'),
			'req_branch' =>  $this->input->post('branch'),
			'req_classNum' =>  $this->input->post('classNumber'),
			'req_tel' =>  $this->input->post('tel'),
			'req_term' =>  $this->input->post('term'),
			'req_pak' =>  $this->input->post('pak'),
			'req_class' =>  $this->input->post('class'),
			'req_year' =>  $this->input->post('year'),
			'req_group' =>  $this->input->post('group'),
			'req_date' =>  $this->input->post('date'),
			'req_time' =>  $this->input->post('time'),
			'req_course' =>  $this->input->post('course'),
			'req_courseID' =>  $this->input->post('courseID'),
			'req_teacher' =>  $this->input->post('teacher'),
			'req_evidence'  => implode(',',$this->input->post('evidence')),
			);
		$this->db->insert('requestion',$dataRequestion);
	}
}
/* End of file Studen.php */
/* Location: ./application/controllers/Studen.php */