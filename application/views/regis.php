<?php echo $header; ?>
<style type="text/css">
	.form_input p.required{
		width:99%;
		height: 5px;
		margin-top: -10px;
		text-align:right;
		font-size: 15px;
		color:#FF0000;
	}
	input{
		margin-bottom: 20px;
	}
</style>
<div class="col-sm-12" style="padding-top:2%;">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align:left;"><b>สมัครสมาชิก</b></div>
			<div class="panel-body">
				<div class="form_input  col-sm-12">
					<div class="containner">
						<?php echo form_open('Authen/insertRegis'); ?>
						<div class="form-group">
							<div class="text-header"><b style="color:#000;"><h3>.::LOGIN::.</h3></b></div>
							<div class="col-sm-4">
								<label> EMIL
									<p class="required">*</p>
									<input type="text" name="email" class="form-control" placeholder="YOUR EMIL@mail.com" required="" autofocus>
								</label>
							</div>
							<div class="col-sm-4">
								<label> PASSWORD
									<p class="required">*</p>
									<input type="password" name="password" class="form-control" placeholder="YOUR PASSWORD" required="">
								</label>
							</div>
						</div>
						<hr class="col-sm-12">
						<div class="col-sm-12"></div>
						<div class="col-sm-4" >
							<label>คำนำหน้าชื่อ
								<p class="required">*</p>
								<label class="radio-inline"><input type="radio" name="prename" value="1" checked >นาย</label>
								<label class="radio-inline"><input type="radio" name="prename" value="2">นาง</label>
								<label class="radio-inline"><input type="radio" name="prename" value="3">นางสาว</label>
							</label>
						</div>
						<div class="col-sm-4">
							<label>ชื่อ
								<p class="required">*</p>
								<input type="text" class="form-control" name='name' required="" >
							</label>
						</div>
						<div class="col-sm-4" >
							<label>นามสกุล
								<p class="required">*</p>
								<input type="text" name="lastname" class="form-control" required="">
							</label>
						</div>
						<div class="col-sm-4">
							<label> รหัสนักศึกษา
								<p class="required">*</p>
								<input type="text" name="stdID" class="form-control" required="">
							</label>
						</div>
						<div class="col-sm-4">
							<label> เบอร์โทรที่ติดต่อได้สะดวก
								<p class="required">*</p>
								<input type="text" name="tel" class="form-control" required="">
							</label>
						</div>
						<div class="col-sm-12"><br></div>
						<div class="col-sm-12 well " align="center">
							<button type="submit" id="save" class="btn btn-primary">
								<span class="   glyphicon glyphicon-floppy-saved"> บันทึก</span>
							</button>
							<button type="reset" class="btn btn-warning" >
								<span class="   glyphicon glyphicon-floppy-remove"> ยกเลิก</span>
							</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $footer; ?>