<?php echo $header; ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
      "language": {
        "zeroRecords": "==========> ไม่พบข้อมูลที่ต้องการ <========== "
      },
      "lengthMenu": [ 25,50, 100, "All"],
      responsive: true,
    });

		$("[name='my-checkbox']").bootstrapSwitch({onSwitchChange:function(e,s){

			if(s){
				$.ajax({
					// url: "<?php echo site_url('/manage_status');?>",
					url: "<?php echo base_url('index.php/'.$controller.'/updateStatus'); ?>",
					type: "POST",
					data: $(this).closest('form').serialize(),
				}).success(function(data){
					alert("อัพเดทสถานะแล้ว");
					//alert(data);
				});
			}else{
				$.ajax({
					// url: "<?php echo site_url('/manage_status');?>",
					url: "<?php echo base_url('index.php/'.$controller.'/updateStatus'); ?>",
					type: "POST",
					data: $(this).closest('form').serialize(),
				}).success(function(data){
					alert("ยกเลิกสถานะแล้ว");
					// alert(data);
				});
			}

		},
		onText:'อาจารย์',
		offText:'นักศึกษา.',
		labelWidth:'1px'
	});
	} );
</script>
<div class="row">
  <div class="col-sm-12 well">
    <form action="delUser" method="post" accept-charset="utf-8" class="pull-right">
      <div class="col-sm-12  form-inline ">
        <div class="form-group col-6 ">
          <label>ลบข้อมูลจาก :
            <label class="radio-inline">
              <input type="radio" name="delFor" value="1" checked >รหัสนักศึกษา
            </label>
            <label class="radio-inline">
              <input type="radio" name="delFor" value="2">ปีการศึกษา ::
            </label>
          </label>
          <input type="text" name="search" placeholder="กรอกข้อมูล" class="form-control">
          <button type="submit" class="btn btn-primary">ตกลง</button>
        </div>
        <!-- /.col-sm-4 ลบข้อมูลเก่าของ นศ.ปีที่ผ่านมา -->
      </div>
      <!-- /.form-group -->
    </form>
  </div>
  <!-- /.col-sm-12 -->
  <div class="col-sm-12">
    <table id="example" class="display" width="100%" cellspacing="0" style="background-color:#D8D8D8;">
     <thead>
      <tr>
       <th class='col-sm-1 text-center' style="width: 10px;">ที่</th>
       <th class='text-center'>รหัสนักศึกษา</th>
       <th class='text-center'>ชื่อ - สกุล</th>
       <th class='text-center'>กลุ่มวิชา</th>
       <th class='text-center'>วิชา</th>
       <th class='text-center'>ปีการศึกษา</th>
       <th class='text-center col-sm-2'>สถานะ</th>
     </tr>
   </thead>
   <tbody >
    <?php $num = count($dataMember); ?>
    <?php foreach ($dataMember as $key => $rowMember): ?>
     <tr>
      <td><?php echo $num--; ?></td>
      <td><?php echo $rowMember['mem_id']; ?></td>
      <td><?php echo $rowMember['mem_name']; ?></td>
      <td><?php echo $rowMember['mem_faculty']; ?></td>
      <td><?php echo $rowMember['mem_branch']; ?></td>
      <td><?php echo $rowMember['req_year']; ?></td>
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

<?php echo $footer;?>

