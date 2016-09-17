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
		// $this->data['footer'] = $this->template>getFooter();
	}
}
/* End of file Studen.php */
/* Location: ./application/controllers/Studen.php */