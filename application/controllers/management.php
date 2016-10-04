<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$SCREENNAME = 'ข้อมูลทั่วไป';
		$PAGE = 'management';
		$this->mainPage();
		$this->load->view($PAGE,$this->data);
	}

public function mainPage()
{
	$this->data['header'] = $this->template_admin->getHeader();
	$this->data['footer'] = $this->template_admin->getFooter();
}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */