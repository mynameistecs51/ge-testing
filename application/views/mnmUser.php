<?php echo $header; ?>
<div class="row">
	<div class="col-sm-12">
		<table id="example" class="display" width="100%" cellspacing="0" style="background-color:#D8D8D8;">
			<thead>
				<tr>
					<th class='col-sm-1 text-center' style="width: 10px;">ที่</th>
					<th class='text-center'>ชื่อ - สกุล</th>
					<th class='text-center'>กลุ่มวิชา</th>
					<th class='text-center'>วิชา</th>
					<th class='text-center col-sm-2'>สถานะ</th>
				</tr>
			</thead>
			<tbody >
				<?php $num = count($dataMember); ?>
				<?php foreach ($dataMember as $key => $rowMember): ?>
					<tr>
						<td><?php echo $num--; ?></td>
						<td><?php echo $rowMember['mem_name']; ?></td>
						<td><?php echo $rowMember['mem_faculty']; ?></td>
						<td><?php echo $rowMember['mem_branch']; ?></td>
						<?php $check = ($rowMember['mem_status'] == '0')?'':'checked'; ?>
						<td>
							<form>
								<input type="hidden" name="id_member" value="<?php echo $rowMember['id_member']; ?>">
								<input type="checkbox" name="my-checkbox" <?php echo $check; ?> >
							</form>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div><!-- /.  End row -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
		// var table = $('#example').DataTable();
		// table.on( 'search.dt', function () {
		// 	$('#filterInfo').html( 'Currently applied global search: '+table.search() );
		// } );

		$("[name='my-checkbox']").bootstrapSwitch({onSwitchChange:function(e,s){

			if(s){
				$.ajax({
					// url: "<?php echo site_url('/manage_status');?>",
					url: "<?php echo base_url('management/updateStatus'); ?>",
					type: "POST",
					data: $(this).closest('form').serialize(),
				}).success(function(data){
					alert("อัพเดทสถานะแล้ว");
					//alert(data);
				});
			}else{
				$.ajax({
					// url: "<?php echo site_url('/manage_status');?>",
					url: "<?php echo base_url('management/updateStatus'); ?>",
					type: "POST",
					data: $(this).closest('form').serialize(),
				}).success(function(data){
					alert("ยกเลิกสถานะแล้ว");
					// alert(data);
				});
			}

		},
		onText:'อาจารย์',
		offText:'ทั่วไป',
		labelWidth:'1px'
	});
	} );
</script>
<?php echo $footer;?>