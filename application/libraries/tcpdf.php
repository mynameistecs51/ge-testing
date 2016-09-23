<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('tcpdf/tcpdf.php');
class Pdf extends TCPDF
{

	public function __construct()
	{
		parent::__construct();
	}



}

/* End of file tcpdf.php */
/* Location: ./application/libraries/tcpdf.php */
