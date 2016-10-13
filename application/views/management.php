<?php echo $header; ?>
<style type="text/css">
	table th{
		font-size: 12px;
	}
	table td{
		font-size: 12px;
	}
</style>
<div class="row">
	<div class="container col-sm-11">
		<?php $groupNum = count($getGroup); ?>
		<?php foreach ($getGroup as $key => $rowGroup): ?>
			<div class="col-sm-<?php echo 12/$groupNum ; ?>" >
				<div class="dropdown ">
					<button class="btn btn-info dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style='display: block;'>
						<?php echo $rowGroup['group_name']; ?>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<?php foreach ($getCourse as $key => $rowCourse): ?>

							<?php if ($rowGroup['id_group'] == $rowCourse['id_group']): ?>
								<?php echo '<li>'. anchor('management/getCourse/'.$rowCourse['id_course'], $rowCourse['course_name']).'</li>'; ?>
							<?php endif; ?>

						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<br>
<div class="row col-sm-12"><br></div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<label><i class="fa fa-user pull-left"></i> จำนวนนักศึกษาที่ขอสอบกรณีพิเศษวิชา
						<u><?php echo $courseName = (isset($getDataCourse[0]['course_name'] ))?$getDataCourse[0]['course_name']:''; ?></u>
					</label>
					<?php echo anchor('management/exportReport/'.$courseName = (isset($getDataCourse[0]['id_course'] ))?$getDataCourse[0]['id_course']:'', '<i class="fa fa-file-pdf-o"></i>  Eport PDF', 'class="btn btn-info pull-right btn-sm" target="_blank"'); ?>
					<!-- <button > exportPDF</button> -->
				</h3>
			</div>
			<div class="panel-body">
				<table id="example" class="display" width="100%" cellspacing="0" style="background-color:#D8D8D8;">
					<thead>
						<tr>
							<th class='col-sm-1 text-center' style="width: 10px;">ที่</th>
							<th class='text-center'>ชื่อ - สกุล</th>
							<th class='text-center'>คณะ</th>
							<th class='text-center'>สาขา</th>
							<th class='col-sm-1 text-center col-sm'>หมู่ที่</th>
							<th class='col-sm-2 text-center'>ปีการศึกษา</th>
							<th class='col-sm-1 text-center'>ว / ด / ป</th>
							<th class='col-sm-1 text-center'>เวลา</th>
							<th class='col-sm-1 text-center'>หมายเหตุ</th>
						</tr>
					</thead>
					<tbody >
						<?php $num = count($getDataCourse); ?>
						<?php foreach ($getDataCourse as $key => $rowDataCourse): ?>

							<tr >
								<td><?php echo $num++; ?></td>
								<td ><?php echo $rowDataCourse['studentName']; ?></td>
								<td><?php echo $rowDataCourse['mem_faculty']; ?></td>
								<td><?php echo $rowDataCourse['mem_branch']; ?></td>
								<td class=' text-center'><?php echo $rowDataCourse['rc_group']; ?></td>
								<td class=' text-center'><?php echo $rowDataCourse['req_year']; ?></td>
								<td><?php echo $rowDataCourse['rc_date']; ?></td>
								<td><?php echo $rowDataCourse['rc_time']; ?></td>
								<td></td>
							</tr>

						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
		// var table = $('#example').DataTable();
		// table.on( 'search.dt', function () {
		// 	$('#filterInfo').html( 'Currently applied global search: '+table.search() );
		// } );
	} );
</script>
<?php echo $footer; ?>