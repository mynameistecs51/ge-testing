<?php echo $header;?>

<div class="container " style="text-align:left; margin-top:30px" > <!--  End div containner อยู่footer -->

	<!-- Portfolio Item Heading -->
	<div class="row ">
		<div class="col-lg-12 text-center">
			<h1 class="page-header">จัดการข้อมูล
				<!-- <small>Item Subheading</small> -->
			</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Portfolio Item Row -->
	<div class="row">
		<div class="col-xs-6 col-md-3 text-center">
			<a href="#" class="thumbnail">
				<!-- <img src="..." alt="..."> -->
				<i class="fa fa-file-pdf-o fa-5x"></i>
				<div class="caption">
					<h3>PRINT PDF</h3>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-md-3 text-center">
			<a href="#" class="thumbnail">
				<!-- <img src="..." alt="..."> -->
				<i class="fa fa-pencil-square-o fa-5x"></i>
				<div class="caption">
					<h3>จัดการข้อมูล</h3>
				</div>
			</a>
		</div>
	</div>
	<div class="row">
	<?php echo "<pre>"; ?>
		<?php print_r($reqDetail);?>
	</div>
</div>
<?php echo $footer; ?>
