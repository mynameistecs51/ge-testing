<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl='student';
		$this->load->model('mdl_student');
		$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
		$this->dt_now = $now->format('Y-m-d H:i:s');
		$this->datenow =$now->format('d/m/').($now->format('Y')+543);
		if($this->session->userdata('id_member') == ''){
			redirect('Authen/','refresh');
		}
	}
	public function   index()
	{
		$getMember = $this->getSelectCourse($this->session->userdata('id_member'));

		if( isset($getMember[$this->session->userdata('id_member')]['req_create'])){
			$SCREENNAME = "แก้ไข คำร้องขอสอบกรณีพิเศษ";
			$PAGE = "std_requestUpdate";
			$this->data['SCREENNAME'] =  "แก้ไข คำร้องขอสอบกรณีพิเศษ";
			$this->data['controller'] = $this->ctl;
			$this->data['dataRequestion'] = $getMember;
			$this->mainPage($SCREENNAME);
			$this->load->view($PAGE,$this->data);
		}else{
			$SCREENNAME = "คำร้องขอสอบกรณีพิเศษ";
			$PAGE = "std_request";
			$this->data['controller'] = $this->ctl;
			$this->mainPage($SCREENNAME);
			$this->load->view($PAGE,$this->data);
		// print_r($getMember);
		}
	}

	public function mainPage($SCREENNAME)
	{
		$this->data['courseData'] = $this->mdl_student->getCourseAll();
		$this->data['preName'] = $this->session->userdata('mem_preName');
		$this->data['name'] = $this->session->userdata('mem_name');
		$this->data['lastname'] = $this->session->userdata('mem_lastname');
		$this->data['mem_id'] = $this->session->userdata('mem_id');
		$this->data['mem_tel'] = $this->session->userdata('mem_tel');
		$this->data['id_member'] = $this->session->userdata('id_member');
		$this->data['mem_email'] = $this->session->userdata('mem_email');
		$this->data['mem_faculty'] = $this->session->userdata('mem_faculty');
		$this->data['mem_branch'] = $this->session->userdata('mem_branch');
		$this->data['today'] = $this->datenow;
		$this->data['header'] = $this->template_student->getHeader($SCREENNAME,base_url());
		$this->data['footer'] = $this->template_student->getFooter(base_url());
	}

	public function insertRequestion()
	{
		$dataRequestion = array(
			'id_req' => '',
			'req_prename' =>  $this->input->post('prename'),
			'req_name' =>  $this->input->post('name'),
			'req_lastname' =>  $this->input->post('lastname'),
			'req_stdID' =>  $this->input->post('stdID'),
			'req_classNum' =>  $this->input->post('classNumber'),
			'req_tel' =>  $this->input->post('tel'),
			'req_term' =>  $this->input->post('term'),
			'req_pak' =>  $this->input->post('pak'),
			'req_class' =>  $this->input->post('class'),
			'req_year' =>  $this->input->post('year'),
			'req_detail' 	=> $this->input->post('detail'),
			'req_evidence'  => implode('  ,  ',$this->input->post('evidence')),
			'id_create' =>$this->session->userdata('id_member'),
			'dt_create' => $this->dt_now ,
			'ip_create' => $_SERVER["REMOTE_ADDR"],
			);
		$id_req = $this->mdl_student->insertRequestion($dataRequestion);
		// $this->db->insert('requestion',$dataRequestion);

		// print_r($dataRequestion);
		$countCourse = count($this->input->post('courseID'));
		$courseID = $this->input->post('courseID');
		$dateSelect = $this->convert_date($this->input->post('date'));
		$timeSelect = $this->input->post('time');
		$group = $this->input->post('group');
		$teacherSelect = $this->input->post('teacher');
		$selectCourse = array();
		for($i = 0; $i < $countCourse; $i++){
			$selectCourse[$i] = array(
				'id_reqCourse' => '',
				'id_req' => $id_req,
				'id_member' => $this->session->userdata('id_member'),
				'id_course' => $courseID[$i],
				'rc_group' => $group[$i],
				'rc_teacher' => $teacherSelect[$i],
				'rc_date' => $dateSelect[$i],
				'rc_time' => $timeSelect[$i],
				'dt_create' => $this->dt_now,
				);
			$this->mdl_student->insertReqCourse($selectCourse[$i]);
		}
		$dataDetail = array_merge($dataRequestion,array('selectCourse' => $selectCourse));

		redirect($this->ctl.'/printPDF','refresh');
	}

	public function updateRequestion()
	{
		$id_member = $this->input->post('id_member');

		$dataRequestion = array(
			'id_req' => '',
			'req_prename' =>  $this->input->post('prename'),
			'req_name' =>  $this->input->post('name'),
			'req_lastname' =>  $this->input->post('lastname'),
			'req_stdID' =>  $this->input->post('stdID'),
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
		$id_req = $this->mdl_student->updateRequestion($dataRequestion,$id_member);

		$this->db->delete('requestion_course',array('id_member' => $id_member));
		$countCourse = count($this->input->post('courseID'));
		$courseID = $this->input->post('courseID');
		$dateSelect = $this->convert_date($this->input->post('date'));
		$timeSelect = $this->input->post('time');
		$group = $this->input->post('group');
		$teacherSelect = $this->input->post('teacher');
		$selectCourse = array();
		for($i = 0; $i < $countCourse; $i++){
			$selectCourse[$i] = array(
				'id_reqCourse' => '',
				'id_req' =>$id_req,
				'id_member' => $this->input->post('id_member'),
				'id_course' => $courseID[$i],
				'rc_group' => $group[$i],
				'rc_teacher' => $teacherSelect[$i],
				'rc_date' => $dateSelect[$i],
				'rc_time' => $timeSelect[$i],
				'dt_create' => $this->dt_now,
				);
			$this->mdl_student->updateReqCourse($selectCourse[$i]);
		}

		redirect('student','refresh');

	}

	public function getCourseAll()
	{
		$allCourse = $this->mdl_student->getCourseAll();

		echo  json_encode($allCourse);
	}

	public function printPDF()
	{
		$data_array = $this->getSelectCourse($this->session->userdata('id_member'));
		$SCREENNAME = "จัดการข้อมูล";
		$PAGE = "printPDF";
		$this->data['controller'] = $this->ctl;
		$this->data['reqDetail'] = $data_array;
		$this->mainPage($SCREENNAME);
		$this->load->view('tcpdf',$this->data);
		// echo "<pre>";
		// print_r($data_array);
	}
	public function getSelectCourse($id_member)  //เรียกดูว่า user  ลงทะเบียนขอสอบวิชาอะไรบ้าง
	{
		$data_array = array();
		//SSD = StudentSelectDetail
		foreach ($this->mdl_student->studentSelect_course($id_member) as $key => $row_SSD) {
			if(isset($data_array[$row_SSD['id_member']])){
				array_push($data_array[$row_SSD['id_member']]['course'],
					array(
						'id_course' => $row_SSD['id_course'],
						'course_id' => $row_SSD['course_id'],
						'course_name' => $row_SSD['course_name'],
						'rc_group' => $row_SSD['rc_group'],
						'rc_date' => $row_SSD['rc_date'],
						'rc_time' => $row_SSD['rc_time'],
						'rc_teacher' => $row_SSD['rc_teacher'],
						)
					);
				continue;
			}
			if(!isset($data_array[$row_SSD['id_member']])){
				$data_array[$row_SSD['id_member']] = array(
					'id_req' => $row_SSD['id_req'],
					'id_member' => $row_SSD['id_member'],
					'studentName' => $row_SSD['studentName'],
					'mem_tel' => $row_SSD['mem_tel'],
					'mem_email' => $row_SSD['mem_email'] ,
					'mem_id' => $row_SSD['mem_id'],
					'mem_faculty' => $row_SSD['mem_faculty'],
					'mem_branch' => $row_SSD['mem_branch'],
					'req_classNum' => $row_SSD['req_classNum'],
					'req_pak' => $row_SSD['pak'],
					'req_class' => $row_SSD['class'],
					'req_term' => $row_SSD['req_term'],
					'req_year' => $row_SSD['req_year'],
					'req_detail' => $row_SSD['req_detail'],
					'req_evidence' => $row_SSD['req_evidence'],
					'req_create' => $row_SSD['id_create'],
					'course' => array(
						$key => array(
							'id_course' => $row_SSD['id_course'],
							'course_id' => $row_SSD['course_id'],
							'course_name' => $row_SSD['course_name'],
							'rc_group' => $row_SSD['rc_group'],
							'rc_date' => $row_SSD['rc_date'],
							'rc_time' => $row_SSD['rc_time'],
							'rc_teacher' => $row_SSD['rc_teacher'],
							)
						)
					);
			}
		}
		return $data_array;
	}
	public function tcpdf()  //ปริ๊นหน้าคำร้องขอสอบ
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
