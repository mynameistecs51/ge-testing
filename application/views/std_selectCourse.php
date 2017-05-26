<?php echo $header;?>
<div class="row">
	<div class="col-sm-12">
		<table id="example" class="display" width="100%" cellspacing="0" style="background-color:#D8D8D8;">
			<thead>
				<tr>
					<th class='col-sm-1 text-center' style="width: 10px;">ที่</th>
					<th class='text-center'>ชื่อ - สกุล</th>
					<th class='text-center'>คณะ</th>
					<th class='text-center'>สาขาวิชา</th>
					<th class='text-center'>วิชาที่ขอสอบ</th>
				</tr>
			</thead>
			<tbody >
				<?php
				$numRow = count($std_selectCourse);
				foreach ($std_selectCourse as $key => $value) :
					?>

				<tr>
					<td> <?php echo $numRow--;?></td>
					<td> <?php echo $value['mem_name'];?></td>
					<td><?php echo $value['mem_faculty'] ?></td>
					<td><?php echo $value['mem_branch'] ?></td>
					<td>
						<?php
						$numCourse = count($value['course']);
						for($i=0;$i < $numCourse ;$i++){
							echo $value['course'][$i]['course_name'],", ";
						}
						?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
</div><!-- /.  End row -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>

<?php echo $footer;?>