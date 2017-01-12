<?php echo $header;?>
<?php
echo "<pre>";
// print_r($std_selectCourse);
foreach ($std_selectCourse as $key => $value) {
	print_r($value);
	// echo $value['mem_name'],'<br>';
	// $numCourse = count($value['course']);
	// for($i=0;$i < $numCourse ;$i++){
	// 	echo $value['course'][$i]['course_name']."<br>";
	// 	echo "<hr>";
	// }

}
?>
<?php echo $footer;?>