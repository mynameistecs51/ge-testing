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
		$this->datenow =$now->format('d/m/').($now->format('Y')+543);
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
		$this->data['name'] = $this->session->userdata('mem_name');
		$this->data['lastname'] = $this->session->userdata('mem_lastname');
		$this->data['mem_id'] = $this->session->userdata('mem_id');
		$this->data['mem_tel'] = $this->session->userdata('mem_tel');
		$this->data['preName'] = $this->session->userdata('mem_preName');
		$this->data['id_member'] = $this->session->userdata('id_member');
		$this->data['mem_email'] = $this->session->userdata('mem_email');
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
			'req_detail' 	=> $this->input->post('detail'),
			'req_evidence'  => implode(',',$this->input->post('evidence')),
			'id_create' =>$this->session->userdata('id_member'),
			'dt_create' => $this->dt_now ,
			'ip_create' => $_SERVER["REMOTE_ADDR"],
			);
		$id_req = $this->mdl_student->insertRequestion($dataRequestion);
		// $this->db->insert('requestion',$dataRequestion);

		// echo "<pre>";
		// print_r($dataRequestion);
		$countCourse = count($this->input->post('courseID'));
		$courseID = $this->input->post('courseID');
		$dateSelect = $this->convert_date($this->input->post('date'));
		$timeSelect = $this->input->post('time');
		$teacherSelect = $this->input->post('teacher');
		$selectCourse = array();
		for($i = 0; $i < $countCourse; $i++){
			$selectCourse[$i] = array(
				'id_reqCourse' => '',
				'id_req' => $id_req,
				'id_member' => $this->session->userdata('id_member'),
				'id_course' => $courseID[$i],
				'rc_teacher' => $teacherSelect[$i],
				'rc_date' => $dateSelect[$i],
				'rc_time' => $timeSelect[$i],
				'dt_create' => $this->dt_now,
				);
			$this->mdl_student->insertReqCourse($selectCourse[$i]);
		}
		echo "<pre>";
		// print_r($selectCourse);
		$dataDetail = array_merge($dataRequestion,array('selectCourse' => $selectCourse));
		print_r($dataDetail);
		// print_r($dataRequestion);echo "<br>";
		// print_r($selectCourse);
		// $this->load->view('tcpdf',$dataDetail);
		// redirect($this->ctl.'/management','refresh');
	}

	public function getCourseAll()
	{
		$allCourse = $this->mdl_student->getCourseAll();

		echo  json_encode($allCourse);
	}

	public function management()
	{
		$data_array = array();
		//SSL = StudentSelectDetail
		foreach ($this->mdl_student->studentSelect_course($this->session->userdata('id_member')) as $key => $row_SSD) {
			if(isset($data_array[$row_SSD->id_member])){
				array_push($data_array[$row_SSD->id_member]['course'],
					array(
						'course_id' => $row_SSD->course_id,
						'course_name' => $row_SSD->course_name,
						'rc_date' => $row_SSD->rc_date,
						'rc_time' => $row_SSD->rc_time,
						'rc_teacher' => $row_SSD->rc_teacher,
						)
					);
				continue;
			}
			if(!isset($data_array[$row_SSD->id_member])){
				$data_array[$row_SSD->id_member] = array(
					'id_member' => $row_SSD->id_member,
					'studentName' => $row_SSD->studentName,
					'mem_tel' => $row_SSD->mem_tel,
					'mem_email' => $row_SSD->mem_email,
					'mem_id' => $row_SSD->mem_id,
					'req_branch' => $row_SSD->req_branch,
					'req_classNum' => $row_SSD->req_classNum,
					'req_pak' => $row_SSD->req_pak,
					'req_class' => $row_SSD->req_class,
					'req_term' => $row_SSD->req_term,
					'req_year' => $row_SSD->req_year,
					'course' => array(
						$key => array(
							'course_id' => $row_SSD->course_id,
							'course_name' => $row_SSD->course_name,
							'rc_date' => $row_SSD->rc_date,
							'rc_time' => $row_SSD->rc_time,
							'rc_teacher' => $row_SSD->rc_teacher,
							)
						)
					);
			}
		}
		$SCREENNAME = "จัดการข้อมูล";
		$PAGE = "management";
		$this->data['controller'] = $this->ctl;
		$this->data['reqDetail'] = $data_array;
		$this->mainPage($SCREENNAME);
		// $this->data['studentDetail'] = $this->mdl_student->studentSelect_course($this->session->userdata('id_member'));
		// $this->load->view($PAGE,$this->data);
		$this->load->view('tcpdf',$this->data);
	}

	public function tcpdf()
	{
		$this->load->view('tcpdf');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function convert_date($val_date )
	{
		 // $dateArr	=array();
		$date = str_replace('/', '-',$val_date);
		for($i = 0;$i <count($val_date); $i ++){
			$d=$date[$i][0].$date[$i][1];
			$m=$date[$i][3].$date[$i][4];
			$y=$date[$i][6].$date[$i][7].$date[$i][8].$date[$i][9];
			$y=intval($y)-543;
			$date[$i] = $y."-".$m."-".$d;
		}
		return $date;
	}

	public function alert($massage, $url)
	{
		echo "<meta charset='UTF-8'>
		<SCRIPT LANGUAGE='JavaScript'>
			window.alert('$massage')
			window.location.href='".site_url($url)."';
		</SCRIPT>";
	}


}
/* End of file Studen.php */
/* Location: ./application/controllers/Studen.php */