<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_student
{
	// protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();

	}

	public function getHeader($SCREENNAME,$base_url)
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
			<link href="'.$base_url.'assets/css/bootstrap.css" rel="stylesheet">
			<link href="'.$base_url.'assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" >


			<!-- Custom CSS -->
			<link href="'.$base_url.'assets/css/portfolio-item.css" rel="stylesheet">
			<link href="'.$base_url.'assets/css/main.css" rel="stylesheet">

			<!-- jQuery -->
			<script src="'.$base_url.'assets/js/jquery.js"></script>


			<!-- Bootstrap Core JavaScript -->
			<script src="'.$base_url.'assets/js/bootstrap.min.js"></script>

			<!-- datePicker -->
			<link href="'.$base_url.'assets/datepicker/jquery-ui.css" rel="stylesheet">
			<script src="'.$base_url.'assets/datepicker/jquery-ui-1.10.3.custom.js"></script>
			<script src="'.$base_url.'assets/datepicker/jquery-ui-datepicker-th.js"></script>

			<!-- time picker -->
			<!--	<link href="'.$base_url.'assets/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
			<script src="'.$base_url.'assets/timepicker/bootstrap-timepicker.min.js"></script> -->

			<!-- datetime picker -->
			<link href="'.$base_url.'assets/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
			<script src="'.$base_url.'assets/datetimepicker/bootstrap-datetimepicker.min.js"></script>

			<!-- select picker -->
			<link href="'.$base_url.'assets/selectpicker/bootstrap-select.min.css" rel="stylesheet">
			<script src="'.$base_url.'assets/selectpicker/bootstrap-select.min.js"></script>

		</head>

		<body>
			<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand" >สำนักวิชาศึกษาทั่วไป  มหาวิทยาลัยราชภัฏอุดรธานี</a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<!-- Top Menu Items -->
					<ul class="nav navbar-right top-nav">
						'.$this->menu($base_url).'
					</ul>
				</div>
				<!-- /.container -->
			</nav>
			';
		}

		public function  getFooter($base_url)
		{
			return '
			<!-- Footer -->
			<footer>
				<!--
        <div class="row">
					<div class="col-lg-12">
						<p class="pull-right">Copyright &copy; Webdeveloper By Mr.Chaiwat Homsang</p>
					</div>
				</div>
        -->
				<!-- /.row -->
			</footer>
		</div>
		<!-- /.container -->

		<script src="'.$base_url.'assets/js/bootstrap-hover-dropdown.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$(".dropdown-toggle").dropdownHover({delay:0});	//menuhover
				$(".back-to-top").click(function(){	//buttom back to top page
					$("html,body").animate({scrollTop:0},"slow");return false;
				});
			});
		</script>
	</body>
	</html>
	';
}

public function menu($base_url)
{
//เอาลงทะเบียนออก เมื่อเสร็จแล้วให้เอามาใส่เหมือนเดิมก่อน login <li>	'.anchor('authen/regis', 'ลงทะเบียน').'	</li>
	if($this->ci->session->userdata('id_member') == null){
		return '
		<ul class="nav navbar-nav">
			<!-- <li><a href="#">คำร้องขอสอบกรณีพิเศษ</a></li> -->
			<li>
				'.anchor('/management/downloadFile/manual_staff.pdf/', 'คู่มือใช้งานเอาจารย์/จ้าหน้าที่').'
			</li>
			<li>
				'.anchor('/management/downloadFile/manual_student.pdf/', 'คู่มือใช้งานนักศึกษา').'
			</li>
			<!--
				<li>	'.anchor('authen/regis', 'ลงทะเบียน').'	</li>
				<li>'.anchor('authen', 'LOGIN', '').'</li>
			-->
	</ul>
	';
}else{
	return '
	<ul class="nav navbar-nav ">
		<li>
			<a href="#">คำร้องขอสอบกรณีพิเศษ</a>
		</li>
		<li role="presentation" class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$this->ci->session->userdata('mem_name').'<span class="caret"></span>
			</a>
			<ul class="dropdown-menu" style=" background-color:gray;">
				<li>'.anchor('#', 'แก้ไขคำร้อง', 'class="page-scroll"').'</li>
				<li>'.anchor('student/printPDF/', 'PRINT PDF', 'class="page-scroll"  target="_blank"').'</li>
				<li>'.anchor('authen/logOut/', 'Log Out').'</li>
			</ul>
		</li>
	</ul>
	';
}
}

}

/* End of file TemplateStudent.php */
/* Location: ./application/libraries/TemplateStudent.php */
