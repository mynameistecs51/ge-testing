<?php echo $header; ?>
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
							<th class='col-sm-1 text-center'>ที่</th>
							<th class='text-center'>ชื่อ - สกุล</th>
							<th class='text-center'>คณะ</th>
							<th class='text-center'>สาขา</th>
							<th class='text-center col-sm'>หมู่ที่</th>
							<th class='col-sm-1 text-center'>ว / ด / ป</th>
							<th class='col-sm-1 text-center'>เวลา</th>
							<th class='col-sm-1 text-center'>หมายเหตุ</th>
						</tr>
					</thead>
					<!-- <tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</tfoot> -->
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