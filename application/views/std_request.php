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
<div class="container form_input" style="text-align:left; margin-top:30px" > <!--  End div containner อยู่footer -->

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
		<?php echo form_open('student/insertRequestion'); ?>
		<div class="form-group">
			<label>เรียน ผู้อำนวยการสำนักวิชาศึกษาทั่วไป</label>
		</div>

		<!-- <div class="form-group"> -->
		<div class="col-sm-3" >
			<label>คำนำหน้าชื่อ
				<p class="required">*</p>
				<label class="radio-inline"><input type="radio" name="prename" value="1" <?php echo $checkPrename =($preName == 1)?'checked':''; ?> >นาย</label>
				<?php $checkPrename =($preName == 2)?'checked':'false'; ?>
				<label class="radio-inline"><input type="radio" name="prename" value="2" <?php echo $checkPrename =($preName == 2)?'checked':''; ?> >นาง</label>
				<label class="radio-inline"><input type="radio" name="prename" value="3" <?php echo $checkPrename =($preName == 3)?'checked':'false'; ?> >นางสาว</label>
			</label>
		</div>
		<div class="col-sm-2">
			<label>ชื่อ
				<p class="required">*</p>
				<input type="text" class="form-control" name='name' required="" value="<?php echo $name;?>" autofocus>
			</label>
		</div>
		<div class="col-sm-2" >
			<label>นามสกุล
				<p class="required">*</p>
				<input type="text" name="lastname" class="form-control" required="" value="<?php echo $lastname; ?>">
			</label>
		</div>
		<div class="col-sm-2">
			<label> รหัสนักศึกษา
				<p class="required">*</p>
				<input type="text" name="stdID" class="form-control" required="" value="<?php echo $mem_id; ?>">
			</label>
		</div>
		<div class="col-sm-3">
			<label>คณะ</label>
			<p class="required">*</p>
			<input type="text" name="faculty" class="form-control" value="<?php echo $mem_faculty; ?>" required="">
		</div>
		<div class="col-sm-3">
			<label>สาขาวิชา</label>
			<p class="required">*</p>
			<input type="text" name="branch" class="form-control" value="<?php echo $mem_branch; ?>" required="">
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
			<input type="text" name="tel" class="form-control" required="" value="<?php echo $mem_tel; ?>">
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
			<label class="radio-inline pak"><input type="radio" name="pak" id='pak1' value="1" checked=""> ปกติ</label>
			<label class="radio-inline pak"><input type="radio" name="pak" id='pak2'  value="2" > รุปแบบพิเศษ</label>
			<label class="radio-inline pak">	<input type="radio" name="pak" id='pak3'  value="3" > อื่น ๆ..... </label>
			<div class="col-sm-6 pull-right"><input type="text" name="aboutPak" class="form-control " id='aboutPak' disabled=""></div>
		</div>
		<div class="col-sm-6">
			<label>ระดับ</label>
			<p class="required">*</p>
			<label class="radio-inline class"><input type="radio" name="class" id='class1' value="1" checked=""> ปริญญาตรี</label>
			<label class="radio-inline class"><input type="radio" name="class" id='class2' value="2" > ปริญญาตรี(ต่อเนื่อ)</label>
			<label class="radio-inline class"><input type="radio" name="class" id='class3' value="3" > อื่น ๆ.....</label>
			<div class="col-sm-5 pull-right"><input type="text" name="aboutClass" class="form-control " id='aboutClass' disabled=''></div>
		</div>
		<div class="col-sm-3">
			<label>ปีการศึกษา</label>
			<p class="required">*</p>
			<input type="text" name="year" class="form-control">
		</div>
		<div class="col-sm-12"></div>
		<div class="col-sm-4">
			<label>ซึ่งเป็นการสอบในรายวิชา</label>
			<p class="required">*</p>
			<select name="courseID[]" class="selectpicker show-tick form-control courseID"  data-live-search="true" title="........กรุณาเลือกรายวิชาที่ขาดสอบ.......">
				<?php foreach ($courseData as $rowCourse): ?>
					<option value="<?php echo $rowCourse['id_course'] ?>"><?php echo $rowCourse['course_id'].' '.$rowCourse['course_name']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="col-sm-1">
			<label>หมู่เรียนที่</label>
			<p class="required">*</p>
			<input type="number" min='1' max="10" name="group[]" class="form-control">
		</div>
		<div class="col-sm-2">
			<label>ในวันที่/เดือน/พ.ศ.</label>
			<p class="required">*</p>
			<input type="text" id='date' name="date[]" class="form-control date" value="<?php echo $today ?>"/>
		</div>
		<div class="col-sm-2">
			<label>เวลา</label>
			<p class="required">*</p>
			<div id="time" class="input-group input-append time ">
				<input name='time[]'  data-time-icon="icon-time" data-format="hh:mm" type="text" class='form-control '/>
				<span class="input-group-addon add-on">
					<span class="glyphicon glyphicon-time"></span>
				</span>
			</div>
		</div>
		<div class="col-sm-2">
			<label>ชื่ออาจารย์ประจำวิชา</label>
			<p class="required">*</p>
			<input type="text" name="teacher[]" class="form-control">
		</div>
		<div class="col-sm-1">
			<p>&nbsp;</p>
			<i class="btn btn-primary addCourse" id="addCourse" > <span class="glyphicon glyphicon-plus"></span></i>
		</div>
		<div class="add_Course">
			<!-- add Course  -->
		</div>
		<div class="col-sm-12">
			<label>ข้าพเจ้าจึงมีความประสงค์จะขอสอบกรณีพิเศษ ทั้งนี้เนื่องจาก</label>
			<p class="required">*</p>
			<textarea name="detail" class="form-control" rows='3'></textarea>
		</div>
		<div class="col-sm-5">
			<p >โดยมีหลักฐานดังนี้ 1.)</p>
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
			//  ---- javasript custom ---//
			addEvidence();
			check_aboutPak();
			check_aboutClass();
			addCourse();

			// --- core javascript ---//
			$('.date').datepicker({
				format:'dd/MM/YY',
			});
			$('.selectpicker').selectpicker();

			$('.time').datetimepicker({
				pick24HourFormat: true,
				pickSeconds: false,
				pickDate: false,
			});
		});
		// --manage Evidence --//
		function countEvidence(){
			var  countEvid=$('.evidence').length;
			for(i= 0 ; i <countEvid ; i++){
				delEvidence(i);
			}
		}
		function addEvidence(){			//add Evidence //
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
				var chk =  confirm('คุณต้องการลบใช่หรือไม่ ?');
				if(chk==true){
					$('#add_evidence'+num).remove();
				}else{
					return false;
				}
			});
		}
		// --- end manage  Evidence -- //
		// ---manage Course ---//
		function countCourse(){
			var numCourse = $('.courseID').length;
			for(var Course = 0 ;Course < numCourse ; Course++){
				delCourse(numCourse);
			}
		}
		function  addCourse(){
			$('#addCourse').click(function(){
				var  numCourse = $('.del_Course').length+1;
				var html = '<div id="add_Course'+numCourse+'">';
				html +='<div class="col-sm-4">';
				html +='<label>ซึ่งเป็นการสอบในรายวิชา</label>';
				html +='<p class="required">*</p>';
				html +='<select name="courseID[]" id="courseID'+numCourse+'" class="selectpicker show-tick form-control courseID"  data-live-search="true" title="........กรุณาเลือกรายวิชาที่ขาดสอบ.......">';
				html +='</select>';
				html +='</div>';
				html +='<div class="col-sm-1">';
				html +='<label>หมู่เรียนที่</label>';
				html +='<p class="required">*</p>';
				html +='<input type="number" min="1" max="10" name="group[]" class="form-control">';
				html +='</div>';
				html +='<div class="col-sm-2">';
				html +='<label>ในวันที่/เดือน/พ.ศ.</label>';
				html +='<p class="required">*</p>';
				html +='<input type="text" id="date'+numCourse+'" name="date[]" class="form-control date" value="<?php echo $today ?>"/>';
				html +='</div>';
				html +='<div class="col-sm-2">';
				html +='<label>เวลา</label>';
				html +='<p class="required">*</p>';
				html +='<div id="time" class="input-group input-append time ">';
				html +='<input name="time[]""  data-time-icon="icon-time" data-format="hh:mm" type="text" class="form-control "/>';
				html +='<span class="input-group-addon add-on">';
				html +='<span class="glyphicon glyphicon-time"></span>';
				html +='</span>';
				html +='</div>';
				html +='</div>';
				html +='<div class="col-sm-2">';
				html +='<label>ชื่ออาจารย์ประจำวิชา</label>';
				html +='<p class="required">*</p>';
				html +='<input type="text" name="teacher[]" class="form-control">';
				html +='</div>';
				html += '<div class="col-sm-1">';
				html += '<p>&nbsp;</p>';
				html += '<i class="btn btn-danger del_Course" id="del_Course'+numCourse+'" > <span class="glyphicon glyphicon glyphicon-minus"></span></i>';
				html += '</div>';
				html += '</div>';
				$('.add_Course').append(html);

				$('#date'+numCourse).datepicker({
					format:'dd/MM/YY',
				});
				$('#time'+numCourse).datetimepicker({
					pick24HourFormat: true,
					pickSeconds: false,
					pickDate: false,
				});
				delCourse(numCourse);
				// getCourse on select
				$.ajax({
					url:'<?php echo base_url().'index.php/'.$controller;?>/getCourseAll/',
					dataType: 'JSON',
					success:function(resp){
						var selected ="";
						$.each(resp, function( indexCourse, valueCourse ) {
							selected +="<option value='"+valueCourse['id_course']+"'>"+valueCourse['course_id']+" "+valueCourse['course_name']+"</option>";
						});
					// console.log(selected);
					$('#courseID'+numCourse).html(selected).selectpicker('refresh');

				},
				error:function(err){
					alert(err+"error");
				}
			});
			});
			countCourse();
		}
		function delCourse(numCourse) {
			$('#del_Course'+numCourse).click(function(){
				var delCourse_cfr = confirm("คุณต้องการลบใช่หรือไม่ ?");
				if(delCourse_cfr == true){
					$('#add_Course'+numCourse).remove()
				}else{
					return false;
				}
			});
		}
		//---end manage Course --//
		function check_aboutPak() {
			$('.pak').on('click',function(){
				if($('#pak3').is(':checked')  ){
					$('#aboutPak').removeAttr('disabled');
				}else{
					$('#aboutPak').attr('disabled','disabled');
					$('#aboutPak').attr('value','');
				}
			});
		}
		function check_aboutClass(){
			$('.class').click(function(){
				if($('#class3').is(':checked')){
					$('#aboutClass').removeAttr('disabled');
				}else{
					$('#aboutClass').attr('disabled','disabled');
					$('#aboutClass').attr('value','');
				}
			});
		}
	</script>
	<?php echo $footer; ?>
