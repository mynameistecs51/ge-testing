<?php echo $header;?>
<style type="text/css">
	.form_input p.required{
		width:99%;
		height: 5px;
		margin-top: -10px;
		text-align:right;
		font-size: 15px;
		color:#FF0000;
	}
</style>
<!-- Page Content -->
<div class="container form_input">  <!--  End div containner อยู่footer -->

	<!-- Portfolio Item Heading -->
	<div class="row ">
		<div class="col-lg-12">
			<h1 class="page-header">แบบคำร้องขอสอบในกรณีพิเศษ
				<!-- <small>Item Subheading</small> -->
			</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Portfolio Item Row -->
	<div class="row">
		<form>
			<label>เรียน ผู้อำนวยการสำนักวิชาศึกษาทั่วไป</label>
			<div class="form-group">
				<div class="col-sm-3" >
					<label>คำนำหน้าชื่อ
						<p class="required">*</p>
						<label class="radio-inline"><input type="radio" name="gender" value="1" checked >นาย</label>
						<label class="radio-inline"><input type="radio" name="gender" value="2">นาง</label>
						<label class="radio-inline"><input type="radio" name="gender" value="3">นางสาว</label>
					</label>
				</div>
				<div class="col-sm-2">
					<label>ชื่อ
						<p class="required">*</p>
						<input type="text" class="form-control" name required="" autofocus>
					</label>
				</div>
				<div class="col-sm-2	" >
					<label>นามสกุล
						<p class="required">*</p>
						<input type="text" name="lastname" class="form-control" required="">
					</label>
				</div>
				<div class="col-sm-2" >
					<label>นามสกุล
						<p class="required">*</p>
						<input type="text" name="lastname" class="form-control" required="">
					</label>
				</div>
				<div class="col-sm-2">
					<label> รหัสนักศึกษา
						<p class="required">*</p>
						<input type="text" name="stdID" class="form-control" required="">
					</label>
				</div>
				<div class="col-sm-3">
					<label>คณะ</label>
					<p class="required">*</p>
					<input type="text" name="faculty" class="form-control" required="">
				</div>
				<div class="col-sm-3">
					<label>สาขาวิขา</label>
					<p class="required">*</p>
					<input type="text" name="branch" class="form-control" required="">
				</div>
				<div class="col-sm-1">
					<label>ชั้นปี</label>
					<p class="required">*</p>
					<select class="form-control" name='class'>
						<option value='1' >1</option>
						<option value='2' >2</option>
						<option value='3' >3</option>
						<option value='4' >4</option>
						<option value='5' >5</option>
						<option value='6' >6</option>
						<option value='7' >7</option>
						<option value='8' >8</option>
					</select>
				</div>
				<div class="col-sm-3">
					<label>หมายเลขโทรศัพท์ที่ติดต่อได้สะดวก</label>
					<p class="required">*</p>
					<input type="tel" name="tel" class="form-control" required="">
				</div>
			</div>
			<div class="col-sm-3">
				<label>ภาค</label>
				<p class="required">*</p>
				<label class="radio-inline"><input type="radio" name="park" value="0" > ปกติ</label>
				<label class="radio-inline"><input type="radio" name="park" value="1" > รุปแบบพิเศษ</label>
				<label class="radio-inline"><input type="radio" name="park" value="2" > อื่น ๆ........</label>
			</div>
		</form>
	</div>
	<!-- /.row -->

	<hr>
	<?php echo $footer; ?>
