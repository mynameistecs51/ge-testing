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
	label {
		/*margin-bottom: 19px;*/
	}
	input{
		margin-bottom: 20px;

	}
</style>
<!-- Page Content -->
<div class="container form_input" style="text-align:left; margin-top:30px"> <!--  End div containner อยู่footer -->

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
		<!-- <form accept="insertRequestion" method="post"> -->
		<?php echo form_open('Student/insertRequestion'); ?>
		<div class="form-group">
			<label>เรียน ผู้อำนวยการสำนักวิชาศึกษาทั่วไป</label>
		</div>

		<!-- <div class="form-group"> -->
		<div class="col-sm-3" >
			<label>คำนำหน้าชื่อ
				<p class="required">*</p>
				<label class="radio-inline"><input type="radio" name="prename" value="1" checked >นาย</label>
				<label class="radio-inline"><input type="radio" name="prename" value="2">นาง</label>
				<label class="radio-inline"><input type="radio" name="prename" value="3">นางสาว</label>
			</label>
		</div>
		<div class="col-sm-2">
			<label>ชื่อ
				<p class="required">*</p>
				<input type="text" class="form-control" name='name' required="" autofocus>
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
		<div class="col-sm-2">
			<label>ชั้นปี</label>
			<p class="required">*</p>
			<select class="form-control" name='classNumber'>
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
		<div class="col-sm-4">
			<label>หมายเลขโทรศัพท์ที่ติดต่อได้สะดวก</label>
			<p class="required">*</p>
			<input type="tel" name="tel" class="form-control" required="">
		</div>
		<!-- </div> -->

		<div class="col-sm-3">
			<label>ได้ขาดสอบปลายภาคเรียนที่</label>
			<p class="required" >*</p>
			<select class="form-control" name='term' style="width:40%;">
				<option value='1' >1</option>
				<option value='2' >2</option>
				<option value='3' >3</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label>ภาค</label>
			<p class="required">*</p>
			<label class="radio-inline"><input type="radio" name="pak" id='pak1' value="1" checked=""> ปกติ</label>
			<label class="radio-inline"><input type="radio" name="pak" id='pak2'  value="2" > รุปแบบพิเศษ</label>
			<label class="radio-inline">	<input type="radio" name="pak" id='pak3'  value="3" > อื่น ๆ </label>
			<div class="col-sm-7 pull-right"><input type="text" name="aboutPak" class="form-control " id='aboutPak' disabled=""></div>
		</div>
		<div class="col-sm-6">
			<label>ระดับ</label>
			<p class="required">*</p>
			<label class="radio-inline"><input type="radio" name="class" value="1" checked=""> ปริญญาตรี</label>
			<label class="radio-inline"><input type="radio" name="class" value="2" > ปริญญาตรี(ต่อเนื่อ)</label>
			<label class="radio-inline"><input type="radio" name="class" value="3" > อื่น ๆ</label>
			<div class="col-sm-5 pull-right"><input type="text" name="aboutClass" class="form-control " id='aboutClass' disabled=""></div>
		</div>
		<div class="col-sm-2">
			<label>ปีการศึกษา</label>
			<p class="required">*</p>
			<input type="text" name="year" class="form-control">
		</div>
		<div class="col-sm-2">
			<label>หมู่เรียนที่</label>
			<p class="required">*</p>
			<input type="number" min='1' max="10" name="group" class="form-control">
		</div>
		<div class="col-sm-3">
			<label>ในวันที่/เดือน/พ.ศ.</label>
			<p class="required">*</p>
			<input type="date" name="date" class="form-control" format='YYYY-MM-DD '>
		</div>
		<div class="col-sm-2">
			<label>เวลา</label>
			<p class="required">*</p>
			<input type='time' name='time' class="form-control">
		</div>
		<div class="col-sm-3">
			<label>ซึ่งเป็นการสอบในรายวิชา</label>
			<p class="required">*</p>
			<input type="text" name="course" class="form-control">
		</div>
		<div class="col-sm-3">
			<label>รหัสวิชา</label>
			<p class="required">*</p>
			<input type="text" name="courseID" class="form-control">
		</div>
		<div class="col-sm-4">
			<label>ชื่ออาจารย์ประจำวิชา</label>
			<p class="required">*</p>
			<input type="text" name="teacher" class="form-control">
		</div>
		<div class="col-sm-8">
			<label>ข้าพเจ้าจึงมีความประสงค์จะขอสอบกรณีพิเศษ ทั้งนี้เนื่องจาก</label>
			<p class="required">*</p>
			<textarea name="detail" class="form-control" rows='3'></textarea>
		</div>
		<div class="col-sm-5">
			<p >โดยมีหลังฐานดังนี้ 1.)</p>
			<input type="text" class="form-control evidence" id='evidence'  name="evidence[]"/>
		</div>
		<div class="col-sm-1">
			<p>&nbsp;</p>
			<i class="btn btn-primary addEvidence" id="addEvidence" > <span class="glyphicon glyphicon-plus"></span></i>
		</div>
		<div class="add_evidence">
			<!-- show ddata add origin -->
		</div>
		<div class="col-sm-12"><br></div>
		<div class="modal-footer col-sm-12" style="text-align:center; background:#A9F5F2;">
			<button type="submit" id="save" class="btn btn-modal">
				<span class="   glyphicon glyphicon-floppy-saved"> บันทึก</span>
			</button>
			<button type="reset" class="btn btn-modal" data-dismiss="modal">
				<span class="   glyphicon glyphicon-floppy-remove"> ยกเลิก</span>
			</button>
		</div>
		<!-- </form> -->
		<?php echo form_close(); ?>
	</div>
	<!-- /.row -->

	<hr>
	<script type="text/javascript">
		$(function(){
			addEvidence();
			check_aboutPak();
		});
		function countEvidence(){
			var  countEvid=$('.evidence').length;
			for(i= 0 ; i <countEvid ; i++){
				delEvidence(i);
			}
		}
		function addEvidence(){
			$('#addEvidence').click(function(){
				var numEvid = $('.delEvidence').length+1;
				var html = '<div  id="add_evidence'+numEvid+'" >';
				html += '<div class="col-sm-5 " >';
				html += '<p >โดยมีหลังฐานดังนี้  '+(numEvid+1)+'.)</p>'
				html += '<input type="text" class="form-control evidence"  name="evidence[]">';
				html += '</div>';
				html += '<div class="col-sm-1">';
				html += '<p>&nbsp;</p>';
				html += '<i class="btn btn-danger delEvidence" id="delEvidence'+numEvid+'" > <span class="glyphicon glyphicon-minus"></span></i>';
				html += '</div>';
				html += "</div>";

				$('.add_evidence').append(html);
				delEvidence(numEvid);
			});

			countEvidence();
		};
		function delEvidence(num)
		{
			$('#delEvidence'+num ).click(function(){
				var chk =  confirm('คุณต้องการย้อนกลับ ใช่หรือไม่ ?');
				if(chk==true){
					$('#add_evidence'+num).remove();
				}else{
					return false;
				}
			});
		}
		function check_aboutPak() {
			$('#pak3').checked(function() {
				// $('#aboutPak').removeAttr("disabled");
				alert('ok');
			});
		}
	</script>
	<?php echo $footer; ?>
