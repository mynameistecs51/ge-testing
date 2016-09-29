<?php echo $header; ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบยื่นคำร้องขอสอบกรณีพิเศษ</title>

    Bootstrap
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body align='center'>-->
	<div class="col-sm-12" style="padding-top:10%;">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align:left;">ระบบยื่นคำร้องขอสอบกรณีพิเศษ</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<?php echo form_open('#', 'class="form-horizontal"'); ?>
						<!-- <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/teacher/"> -->
						<div class="form-group">
							<label for="userName" class="col-sm-4 control-label">อีเมลล์</label>
							<div class="col-sm-8">
							<input type="text" class="form-control col-sm-12" id="userName" name="userName" placeholder="test@yourmail.com" autofocus="true">
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-4 control-label">รหัสผ่าน</label>
							<div class="col-sm-8">
								<input type="password" class="form-control col-sm-12" id="password" name="password" value="......">
							</div>
						</div>
						<div class="col-sm-12  " >
							<button type="submit" class="btn btn-primary pull-right col-sm-4">เข้าสู่ระบบ</button>
							<!--   <button type="regis" class="btn btn-info  pull-left col-sm-4"> สมัครสมาชิก</button> -->
							<?php echo anchor('#', 'สมัครสมาชิก', 'class="btn btn-info pull-left col-sm-4"'); ?>
						</div>
						<!-- </form> -->
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div>   <!-- // end div container opent tag form header -->
</body>
</html>