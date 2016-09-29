<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl = 'Authen';
	}

	public function index()
	{
		$SCREENNAME="LOGIN";
		$PAGE = "login";
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
	public function mainPage($SCREENNAME)
	{
		$this->data['header'] = $this->template_student->getHeader($SCREENNAME);
		$this->data['footer'] = $this->template_student->getFooter();
	}

}

/* End of file authen.php */
/* Location: ./application/controllers/authen.php */