<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl = "dashboard";
	}

	public function index()
	{
		$this->load->view('index');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */