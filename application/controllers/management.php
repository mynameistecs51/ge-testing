<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_management');
		$this->load->model('mdl_onoff');
		$this->ctl = "management";
	}

	public function index()
	{
		$SCREENNAME = 'ข้อมูลทั่วไป';
		$PAGE = 'management';
		$this->mainPage($SCREENNAME);
		$this->data['getCourse'] = $this->mdl_management->getCourse();
		$this->data['getGroup'] = $this->mdl_management->getGroup();
		$this->data['getDataCourse'] = $this->mdl_management->getDataCourse($this->data['getCourse'][0]['id_course']);
		$this->load->view($PAGE,$this->data);
	}

	public function mainPage($SCREENNAME)
	{
		$this->data['controller'] = $this->ctl;
		$this->data['preName'] = $this->session->userdata('mem_preName');
		$this->data['name'] = $this->session->userdata('mem_name');
		$this->data['lastname'] = $this->session->userdata('mem_lastname');
		$this->data['header'] = $this->template_admin->getHeader($SCREENNAME);
		$this->data['footer'] = $this->template_admin->getFooter();
	}

	public function getCourse($id_course)
	{
		$SCREENNAME = 'ข้อมูลทั่วไป';
		$PAGE = 'management';
		$this->mainPage($SCREENNAME);
		$this->data['getCourse'] = $this->mdl_management->getCourse();
		$this->data['getGroup'] = $this->mdl_management->getGroup();
		$this->data['getDataCourse'] = $this->mdl_management->getDataCourse($id_course);
		$this->load->view($PAGE,$this->data);
	}

	public function mnm_user($value='')
	{
		$SCREENNAME = "จัดการข้อมูล ผู้ใช้";
		$PAGE = 'mnmUser';
		$this->mainPage($SCREENNAME);
		$this->data['dataMember'] = $this->mdl_management->memberStatus();
		$this->load->view($PAGE,$this->data);
	}

	public function std_selectCourse()
	{
		$stdSelect = array();
		foreach ($this->mdl_management->std_selectCourse() as $keyStd => $rowStd){

			if( !isset($stdSelect[$rowStd->mem_id])){
				$stdSelect[$rowStd->mem_id] = array(
					'mem_name'=>$rowStd->mem_name,
					'mem_faculty' => $rowStd->mem_faculty,
					'mem_branch' => $rowStd->mem_branch,
					'course' => array(
						// 'course_name' => $rowStd->course_name
					)
				);
			}
			array_push($stdSelect[$rowStd->mem_id]['course'],array('course_name' => $rowStd->course_name));
			 //แสดงชื่อกรรมการที่ตรวจโครงงาน

		}

		$SCREENNAME = "นักศึกษาที่ขอสอบแต่ล่ะวิชา";
		$PAGE = 'std_selectCourse';
		$this->mainPage($SCREENNAME);
		$this->data['std_selectCourse'] = $stdSelect;
		$this->load->view($PAGE,$this->data);
	}

	public function updateStatus()
	{
		// $id_member = $this->input->post('id_member');
		$my_status = $this->input->post('my-checkbox');
		if($my_status === "on"){
			$update_status = $this->mdl_management->updateMemberStatus($status = "1");
			// echo  $update_status;
			// print_r($update_status);
		}else{
			$update_status = $this->mdl_management->updateMemberStatus($status = "0");
			// echo  $update_status;
		}
	}

	public function exportReport($id_course)
	{
		$this->data['getDataCourse'] = $this->mdl_management->getDataCourse($id_course);
		$this->load->view('exportReport',$this->data);
	}

	public function downloadFile($file_name)
	{
		//echo $file_name;
		$data = file_get_contents('./assets/files/'.$file_name);
		$name = $file_name;
		echo force_download($name,$data);
		redirect('authen/','refresh');
	}

	public function onOff()
	{
		$SCREENNAME = 'กำหนดรับคำร้อง';
		$PAGE = 'onoff';
		$this->mainPage($SCREENNAME);
		$this->data['status'] = $this->mdl_onoff->getStatus();
		$this->load->view($PAGE,$this->data);
	}

	public function updateOnoff()
	{
		$my_status = $this->input->post('my-checkbox');

		if($my_status === "on"){
			$update_status = $this->mdl_onoff->update_status(array('onoff_status' => "on",'id_create' =>  $this->session->userdata('mem_id')));
		}else{
			$update_onoff_status = $this->mdl_onoff->update_status(array('onoff_status' => "off" ,'id_create' => $this->session->userdata('mem_id')));
		}

		return true;
	}

  public function delUser()
  {
    $for = $this->input->post('delFor');
    $value = $this->input->post('search');

    if(!empty($value)){

      $delfor = $this->mdl_management->delFor($for,$value);
      if($delfor == true){
        $this->alert('ลบข้อมูลเรียบร้อย','management/mnm_user');
      }
    }else{
      $this->alert('กรุณากรอกข้อมูลที่ต้องการลบ !!','management/mnm_user');
    }

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

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
