<?php echo $header; ?>

<script type="text/javascript">
	$(document).ready(function() {
		$("[name='my-checkbox']").bootstrapSwitch({onSwitchChange:function(e,s){

			if(s){
				$.ajax({
					url: "<?php echo base_url('index.php/'.$controller.'/updateOnoff'); ?>",
					type: "POST",
					dataType: 'html',
					data: $(this).closest('form').serialize(),
				})
				.done(function() {
					alert("อัพเดทสถานะแล้ว");
				})
				.fail(function() {
					alert("ยกเลิกสถานะแล้ว");
				});
			}else{
				$.ajax({
					url: "<?php echo base_url('index.php/'.$controller.'/updateOnoff'); ?>",
					type: "POST",
					dataType: 'html',
					data: $(this).closest('form').serialize(),
				})
				.done(function() {
					alert("อัพเดทสถานะแล้ว");
				})
				.fail(function() {
					alert("ยกเลิกสถานะแล้ว");
				});
			}

		},
		onText:' เปิด',
		offText:' ปิด' ,
		labelWidth:'50px',
	});
	});
</script>
<div class="row col-sm-12">
	<div class="col-sm-2"></div>
	<div class="col-lg-8 text-center "  align="center">
		<div class="panel panel-default" >
			<div class="panel-heading">
				<h3 class="panel-title">

				</h3>
			</div>
			<div class="panel-body">
				<table border="0" align="center">
					<tbody>
						<tr>
							<td> <h2>สถานะ: </h2></td>
							<?php $check = ($status[0]['onoff_status'] == 'on')?'checked':''; ?>
							<td>
								<form>
									<input type="hidden" name="onoff_id" value="<?php echo $status[0]['onoff_id']; ?>">
									<input type="checkbox" name="my-checkbox" data-size="large" <?php echo $check; ?> >
								</form>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
<?php echo $footer; ?>