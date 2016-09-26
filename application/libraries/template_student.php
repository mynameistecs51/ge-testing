<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_student
{
	// protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function getHeader($SCREENNAME)
	{
		return'
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>'.$SCREENNAME.'</title>

			<!-- Bootstrap Core CSS -->
			<link href="'.base_url().'assets/css/bootstrap.css" rel="stylesheet">

			<!-- Custom CSS -->
			<link href="'.base_url().'assets/css/portfolio-item.css" rel="stylesheet">
			<link href="'.base_url().'assets/css/main.css" rel="stylesheet">

			<!-- jQuery -->
			<script src="'.base_url().'assets/js/jquery.js"></script>


			<!-- Bootstrap Core JavaScript -->
			<script src="'.base_url().'assets/js/bootstrap.min.js"></script>

			<!-- datePicker -->
			<!--  <link href="'.base_url().'assets/datepicker/jquery-ui.css" rel="stylesheet">
			<script src="'.base_url().'assets/datepicker/jquery-ui-1.10.3.custom.js"></script>
			<script src="'.base_url().'assets/datepicker/jquery-ui-datepicker-th.js"></script> -->

			<!-- time picker -->
		<!--	<link href="'.base_url().'assets/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
			<script src="'.base_url().'assets/timepicker/bootstrap-timepicker.min.js"></script> -->

			<!-- datetime picker -->
			<link href="'.base_url().'assets/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
			<script src="'.base_url().'assets/datetimepicker/bootstrap-datetimepicker.min.js"></script>

		</head>

		<body>
			<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">สำนักวิชาการศึกษาทั่วไป</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a href="#">คำร้องขอสอบกรณีพิเศษ</a>
							</li>
							<li>
								<a href="#">Services</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>
			';
		}

		public function  getFooter()
		{
			return '
			<!-- Footer -->
			<footer>
				<div class="row">
					<div class="col-lg-12">
						<p class="pull-right">Copyright &copy; Webdeveloper By Mr.Chaiwat Homsang</p>
					</div>
				</div>
				<!-- /.row -->
			</footer>
		</div>
		<!-- /.container -->

	</body>
	</html>
	';
}

}

/* End of file TemplateStudent.php */
/* Location: ./application/libraries/TemplateStudent.php */
