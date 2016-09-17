<?php echo $header;?>
<!-- Page Content -->
<div class="container">  <!--  End div containner อยู่footer -->

	<!-- Portfolio Item Heading -->
	<div class="row">
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
			<div class="form-group col-sm-12">
				<div class="col-sm-3" >
					<p >เพศ</p>
					<!-- <p class="required">*</p> -->
					<label class="radio-inline"><input type="radio" name="customer" value="1" checked>ลูกค้าใหม่</label>
					<label class="radio-inline"><input type="radio" name="customer" value="2">ลูกค้าเก่า</label>
				</div>
				<div class="col-sm-4">
					<p>ชนิดลูกค้า</p>
					<label class="radio-inline"><input type="radio" name="is_type" value="3" checked>ลูกค้าทั่วไป</label>
					<label class="radio-inline"><input type="radio" name="is_type" value="1" >ลูกค้า VIP</label>
					<label class="radio-inline"><input type="radio" name="is_type" value="2">ลูกค้าจงรักภักดี</label>
				</div>
				<div class="col-sm-3" >
					<p >ประเภท</p>
					<!-- <p class="required">*</p> -->
					<label class="radio-inline"><input type="radio" name="is_company" value="1" checked>บุคคล</label>
					<label class="radio-inline"><input type="radio" name="is_company" value="2">บริษัท</label>
				</div>
			</div>
		</form>
	</div>
	<!-- /.row -->

	<hr>
	<?php echo $footer; ?>
