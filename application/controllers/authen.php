<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl = 'authen/';
		$this->load->model('mdl_authen','',TRUE);
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata("id_member")==""){
			$SCREENNAME="LOGIN";
			$PAGE = "login";
			$this->data['controller'] = $this->ctl;
			$this->mainPage($SCREENNAME);
			$this->load->view($PAGE,$this->data);
		}else{
			$session_data = $this->session->userdata('mem_status');
			switch ($session_data) {
				case '1':
				redirect('management/management','refresh');
				break;
				case '2':
				redirect('management/headGroup','refresh');
				break;
				case '3':
				redirect('management/admin','refresh');
				default:
				redirect('student','refresh');
				break;
			}
		}
	}

	public function endRegis()
	{
		$SCREENNAME = "ปิดให้ลงทะเบียน";
		$PAGE = "_end";
		$this->data['controller'] = $this->ctl;
		$this->mainPage($SCREENNAME);
		$this->load->view($PAGE,$this->data);
	}

	public function regis()
	{
		$SCREENNAME="สมัครสมาชิก";
		$PAGE = 'regis';
		$this->data['controller'] = $this->ctl;
		$this->mainPage($SCREENNAME);
		$this->load->view($PAGE,$this->data);
	}

	public function insertRegis()
	{
		$dataRegis  = array(
			'id_member' => '',
			'mem_email' => $this->input->post('email'),
			'mem_passwd' => md5($this->input->post('password')),
			'mem_preName' => $this->input->post('prename'),
			'mem_name' => $this->input->post('name'),
			'mem_lastname' => $this->input->post('lastname'),
			'mem_id' => $this->input->post('stdID'),
			'mem_faculty' => $this->input->post('faculty'),
			'mem_branch' => $this->input->post('branch'),
			'mem_tel' => $this->input->post('tel'),
			);

		$this->mdl_authen->insertRegis($dataRegis);
		$massage = 'สมัครสมาชิกสำเร็จ';
		$url = 'authen/';
		$this->alert($massage,$url);
		exit();
	}

	public function checkLogin()
	{
		$this->form_validation->set_rules('loginEmail', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('loginPassword', 'Password', 'trim|required|xss_clean|callback_check_database');
		if($this->form_validation->run() === FALSE){
			$massage = "ลงชื่อเข้าใช้ระบบผิดพลาด !!";
			$url = "authen/";
			$this->alert($massage,$url);
			exit();
		}else{
			$session_data = $this->session->userdata('mem_status');
			switch ($session_data) {
				case '1':
				redirect('management/management','refresh');
				break;
				case '2':
				redirect('management/headGroup','refresh');
				break;
				case '3':
				redirect('management/admin','refresh');
				default:
				redirect('student','refresh');
				break;
			}
		}
	}

	public function check_database()
	{
		$email = $this->input->post('loginEmail');
		$password = md5($this->input->post('loginPassword'));

		$result = $this->mdl_authen->getMember($email,$password);
		if($result){
			foreach ($result as $rowResult) {
				$sess_array = array(
					'id_member' => $rowResult->id_member,
					'mem_id' =>  $rowResult->mem_id,
					'mem_preName' =>  $rowResult->mem_preName,
					'mem_name' =>  $rowResult->mem_name,
					'mem_lastname' =>  $rowResult->mem_lastname,
					'mem_status' =>  $rowResult->mem_status,
					'mem_email' => $rowResult->mem_email,
					'mem_faculty' => $rowResult->mem_faculty,
					'mem_branch' => $rowResult->mem_branch,
					'mem_tel' => $rowResult->mem_tel,
					);
				$this->session->set_userdata($sess_array);
			}
		}else{
			$massage = "อีเมลล์ หรือ รหัสผ่าน ผิดพลาด !!";
			$url = '/authen/';
			$this->alert($massage,$url);
			exit();
		}
	}

	public function mainPage($SCREENNAME)
	{
		$this->data['header'] = $this->template_student->getHeader($SCREENNAME,base_url());
		$this->data['footer'] = $this->template_student->getFooter(base_url());
	}

	public function logOut()
	{
		$this->session->unset_userdata('id_member');
		$this->session->unset_userdata('mem_id');
		$this->session->unset_userdata('mem_preName');
		$this->session->unset_userdata('mem_name' );
		$this->session->unset_userdata('mem_lastname' );
		$this->session->unset_userdata('mem_stus');
		$this->session->sess_destroy();

		redirect('authen','refresh');
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

/* End of file authen.php */
/* Location: ./application/controllers/authen.php */
