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
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
							<ul class="dropdown-menu message-dropdown">
								<li class="message-preview">
									<a href="#">
										<div class="media">
											<span class="pull-left">
												<img class="media-object" src="http://placehold.it/50x50" alt="">
											</span>
											<div class="media-body">
												<h5 class="media-heading"><strong>John Smith</strong>
												</h5>
												<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
												<p>Lorem ipsum dolor sit amet, consectetur...</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</li>
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
				<div class="row">
					<div class="col-lg-12">
						<p class="pull-right">Copyright &copy; Webdeveloper By Mr.Chaiwat Homsang</p>
					</div>
				</div>
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
	if($this->ci->session->userdata('id_member') == null){
		return '
		<ul class="nav navbar-nav">
			<!-- <li><a href="#">คำร้องขอสอบกรณีพิเศษ</a></li> -->
			<li>
				'.anchor('authen/regis', 'ลงทะเบียน').'
			</li>
			<li>'.anchor('authen', 'LOGIN', '').'</li>
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
