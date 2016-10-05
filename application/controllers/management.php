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
		$this->load->view($PAGE,$this->data);
	}

public function mainPage($SCREENNAME)
{
	$this->data['controller'] = $this->ctl;
	$this->data['header'] = $this->template_admin->getHeader($SCREENNAME);
	$this->data['footer'] = $this->template_admin->getFooter();
}



}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */