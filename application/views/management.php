<?php echo $header; ?>
<div class="row">
	<?php $groupNum = count($getGroup); ?>
	<?php foreach ($getGroup as $key => $rowGroup): ?>
		<div class="col-sm-<?php echo 12/$groupNum ; ?>">
			<div class="dropdown ">
				<button class="btn btn-info dropdown-toggle col-sm-12" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<?php echo $rowGroup['group_name']; ?>
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<?php foreach ($getCourse as $key => $rowCourse): ?>
						<?php if ($rowGroup['id_group'] == $rowCourse['id_group']): ?>

							<?php echo '<li><a href="'.$controller.'/getCourse/'.$rowCourse["id_course"].'">'.$rowCourse["course_name"].'</a></li>'; ?>
							<!-- <li><a href="#">ภาษาอังกฤษเพื่อการสื่อสาร</a></li>
							<li><a href="#">การอ่านและการเขียนภาษาอังกฤษเพื่อวัตถุประสงค์ทั่วไป</a></li> -->

						<?php endif; ?>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<!-- <div class="row">
	<div class="col-sm-3">
		<div class="dropdown ">
			<button class="btn btn-primary dropdown-toggle col-sm-12" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				กลุ่มวิชาภาษาศาสตร์
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><a href="#"> ภาษาไทยเพื่อการสื่อสาร</a></li>
				<li><a href="#">ภาษาอังกฤษเพื่อการสื่อสาร</a></li>
				<li><a href="#">การอ่านและการเขียนภาษาอังกฤษเพื่อวัตถุประสงค์ทั่วไป</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="dropdown">
			<button class="btn btn-warning dropdown-toggle col-sm-12" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				กลุ่มวิชาสังคมศาสตร์
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
				<li><a href="#">จริยธรรมกับชีวิต</a></li>
				<li><a href="#">สุนทรียภาพเพื่อชีวิต</a></li>
				<li><a href="#">พฤติกรรมมนุษย์กับการพัฒนาตน</a></li>
				<li><a href="#">การรู้สารสนเทศ</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="dropdown">
			<button class="btn btn-success dropdown-toggle col-sm-12" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				กลุ่มวิชามนุษย์ศาสตร์
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
				<li><a href="#">สังคมวัฒนธรรมไทยและภูมิปัญญาท้องถิ่น</a></li>
				<li><a href="#">วิถีโลก </a></li>
				<li><a href="#">กฎหมายเพื่อชีวิตและสิทธิมนุษยชน</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="dropdown">
			<button class="btn btn-danger dropdown-toggle col-sm-12" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				กุล่มวิชาวิทยาศาสตร์และเทคโนโลยี
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
				<li><a href="#">ชีวิตกับสิ่งแวดล้อม</a></li>
				<li><a href="#">วิทยาศาสตร์เพื่อคุณภาพชีวิต</a></li>
				<li><a href="#">การคิดและการตัดสินใจ</a></li>
				<li><a href="#">เทคโนโลยีสารสนเทศเพื่อการเรียนรู้</a></li>
			</ul>
		</div>
	</div>
</div> -->
<div class="col-sm-12"><br></div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><label><i class="fa fa-user pull-left"></i> จำนวนนักศึกษาที่ขอสอบกรณีพิเศษ</label><button class="btn btn-info pull-right"><i class="fa fa-file-pdf-o"></i>  exportPDF</button></h3>
			</div>
			<div class="panel-body">
				<table id="example" class="display" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class='col-sm-1 text-center' style="width: 10px;">ที่</th>
							<th class='text-center'>ชื่อ - สกุล</th>
							<th class='text-center'>คณะ</th>
							<th class='text-center'>สาขา</th>
							<th class='text-center col-sm'>หมู่ที่</th>
							<th class='col-sm-1 text-center'>ว / ด / ป</th>
							<th class='col-sm-1 text-center'>เวลา</th>
							<th class='col-sm-1 text-center'>หมายเหตุ</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center">1</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td></td>
							<td>2011/04/25</td>
							<td>2011/04/25</td>
							<td></td>
						</tr>
						<tr>
							<td align="center">2</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>63</td>
							<td></td>
							<td>2011/07/25</td>
							<td>2011/04/25</td>
							<td></td>
						</tr>
						<tr>
							<td align="center">3</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>66</td>
							<td></td>
							<td>2009/01/12</td>
							<td>2011/04/25</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
<script type="text/javascript">
	$(document).ready(function() {
		// $('#example').DataTable();
		var table = $('#example').DataTable();

		table.on( 'search.dt', function () {
			$('#filterInfo').html( 'Currently applied global search: '+table.search() );
		} );
	} );
</script>
<?php echo $footer; ?>