<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_admin
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function getHeader($SCREENNAME)
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

			<title>'.$SCREENNAME.'</title>

			<!-- Bootstrap Core CSS -->
			<link href="'.base_url().'assets/css/bootstrap.min.css" rel="stylesheet">
			<link href="'.base_url().'assets/bootstrap-table/jquery.dataTables.min.css" rel="stylesheet">
			<link href="'.base_url().'assets/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
			<!-- Custom CSS -->
			<link href="'.base_url().'assets/css/sb-admin.css" rel="stylesheet">

			<!-- Custom Fonts -->
			<link href="'.base_url().'assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

			<!-- jQuery -->
			<script src="'.base_url().'assets/js/jquery.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="'.base_url().'assets/js/bootstrap.min.js"></script>
			<script src="'.base_url().'assets/bootstrap-table/jquery.dataTables.min.js"></script>
			<script src="'.base_url().'assets/bootstrap-switch/bootstrap-switch.min.js"></script>


			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
			<!-- [if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->

		</head>

		<body>

			<div id="wrapper">

				<!-- Navigation -->
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="'.base_url().'">ge-testing</a>
					</div>
					<!-- Top Menu Items -->
					<ul class="nav navbar-right top-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>'.$this->ci->session->userdata('mem_name').'<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
								</li>
								<li class="divider"></li>
								<li>'.anchor('authen/logOut/', '<i class="fa fa-fw fa-power-off"></i> Log Out').'</li>
							</ul>
						</li>
					</ul>
					<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
					<div class="collapse navbar-collapse navbar-ex1-collapse " >
						<ul class="nav navbar-nav side-nav " style="background-color:#F2F2F2;">
							<li class="">
								'.anchor('management', '<i class="fa fa-fw fa-dashboard"></i>  ทั่วไป').'
							</li>
							<li>
								'.anchor('management/mnm_user/','<i class="fa fa-fw fa-user"></i> จัดการ User').'
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>

				<div id="page-wrapper">

					<div class="container-fluid">

						<!-- Page Heading -->
						<div class="row">
							<div class="col-sm-12">
								<h1 class="page-header">
									'.$SCREENNAME.'<!-- <small>ของผู้ยื่นคำร้องขอสอบ</small> -->
								</h1>
							</div>
						</div>
						<!-- /.row -->
						';
					}

					public function getFooter()
					{
						return'
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /#page-wrapper -->
			</div>
			<!-- /#wrapper -->

		</body>

		</html>
		';
	}

}

/* End of file template_admin.php */
/* Location: ./application/libraries/template_admin.php */
