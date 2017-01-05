<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_management');
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
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */