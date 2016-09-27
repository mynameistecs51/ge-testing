<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl='Student';
		$this->load->model('mdl_student');
		$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
		$this->dt_now = $now->format('Y-m-d H:i:s');
		$this->datenow =$now->format('d-m-').($now->format('Y')+543);
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
		$this->data['courseData'] = $this->mdl_student->getCourseAll();
		$this->data['today'] = $this->datenow;
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
			'req_date' =>  $this->input->post('date'),
			'req_time' =>  implode(',',$this->input->post('time')),
			'id_course' =>  implode(',',$this->input->post('courseID')),
			'req_teacher' =>  implode(',',$this->input->post('teacher')),
			'req_detail' 	=> $this->input->post('detail'),
			'req_evidence'  => implode(',',$this->input->post('evidence')),
			'id_create' => '1',
			'dt_create' => $this->dt_now ,
			'ip_create' => $_SERVER["REMOTE_ADDR"],
			);
		// $this->db->insert('requestion',$dataRequestion);
		// $this->load->view('tcpdf',$dataRequestion);
		echo "<pre>";
		print_r($dataRequestion);
	}

	public function getCourseAll()
	{
		$allCourse = $this->mdl_student->getCourseAll();

		echo  json_encode($allCourse);
	}

	public function tcpdf()
	{
		$this->load->view('tcpdf');
	}

	public function alert($massage)
	{
		echo "<meta charset='UTF-8'>
		<SCRIPT LANGUAGE='JavaScript'>
			window.alert('$massage')';
		</SCRIPT>";
	}

	public function convert_date($val_date)
	{
		$date = str_replace('/', '-',$val_date);
		$d=$date[0].$date[1];
		$m=$date[3].$date[4];
		$y=$date[6].$date[7].$date[8].$date[9];
		$y=intval($y)-543;
		$date = $y."-".$m."-".$d;
			//$date = date("Y-m-d", strtotime($date));
		return $date;
	}

}
/* End of file Studen.php */
/* Location: ./application/controllers/Studen.php */