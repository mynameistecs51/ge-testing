<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateStudent
{
	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function getHeader()
	{
		return '
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title><?php echo "คำร้องขอสอบกรณีพิเศษ";?></title>

			<!-- Bootstrap Core CSS -->
			<link href="'.base_url().'assets/css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom CSS -->
			<link href="'.base_url().'assets/css/portfolio-item.css" rel="stylesheet">
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

		public function getFooter()
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

		<!-- jQuery -->
		<script src="<?php echo base_url();?>assets/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

	</body>

	</html>
	';
}

}

/* End of file template.php */
/* Location: ./application/libraries/template.php */
