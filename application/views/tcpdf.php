<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('แบบคำร้องขอสอบในกรณีพิเศษ');
$pdf->SetTitle('แบบคำร้องขอสอบในกรณีพิเศษ');
$pdf->SetSubject('แบบคำร้องขอสอบในกรณีพิเศษ');
$pdf->SetKeywords('แบบคำร้องขอสอบในกรณีพิเศษ');

/*
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 046', PDF_HEADER_STRING);
*/
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setPrintHeader(false);
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// $pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------


// add a page
$pdf->AddPage();
// set font

$pdf->AddFont('THSarabun','','THSarabun.php');
$pdf->SetFont('THSarabun','',14);

// $pdf->Write(0, '*** นึกศึกษาสามารถยื่นคำร้องของสอบ ภายใน ๒ สัปดาห์แรกของการเปิดภาคเรียน', '', 0, 'L', true, 0, false, false, 0); //ตำแหน่งซ้ายขวา L,R
$pdf->writeHTML('<div>***นักศึกษาสามารถยื่นคำร้องของสอบ ภายใน ๒ สัปดาห์แรกของการเปิดภาคเรียน  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  ส่วนของเจ้าหน้าที่</div>');
$pdf->writeHTML("<hr>");

$pdf->Ln(1);  //ความก้างของบรรทัด


// ob_start();

			// HTML text with soft hyphens (&shy;)

// $couse = "";

$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
// --------------------------------//

$html ='';
foreach ($reqDetail as $key => $row_SSD):
	$name = $row_SSD['studentName'];
endforeach;
$html .= '<<<EOD
<table width="100%" cellspacing="5" >
	<tr>
		<td align="center"><h2> คำร้องขอสอบกรณีพิเศษ </h2></td>
	</tr>
	<tr>
		<td align="right" colspan="2">
			<b style="text-align:left;">เรียน  ผู้อำนวยการสำนักวิชาศึกษาทั่วไป</b>
		</td>
	</tr>
	<tr >
		<td  align="justify"   width="100%">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยข้าพเจ้า <u> '.$a="".' </u>  รหัสนักศึกษา <u>  '.$a="".'  </u> คณะ  <u>  '.$a="".'  </u>  สาขาวิชา <u> '.$a="".'  </u>  ชั้นปีที่ <u>  '.$a="".'  </u> หมายเลขที่ติดต่อได้สะดวก  <u>  '.$a="".'  </u> 	ภาค  <u> '.$a="".'  </u>	ระดับ  <u>  '.$a="".'  </u> ได้ขาดสอบปลายภาคเรียนที่  <u>  '.$a="".'  </u> ปีการศึกษา <u>  '.$a="".'  </u> ซึ่งเป็นการสอบในรายวิชา <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> '.$a="".' </u> รัหสวิชา <u> '.$a="".'  </u> หมู่เรียน <u> '.$a="".' </u> ในวันที่ <u> '.$a="".' </u>  เวลา <u> '.$a="".' </u> น.  โดยมีอาจารย์ <u> '.$a="".' </u> เป็นผู้สอน  <br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ข้าพเจ้าจึงมีความประสงค์จะขอสอบกรณีพิเศษ ทั้งนี้เนื่องจาก  <u>  '.$a="".'  </u>  โดยมีหลักฐาน 1.) <u>  '.$a="".'  </u>  2.)  <u> ฝาขวดเหล้า </u>
		</td>
	</tr>
	<tr>
		<td width="100%">
			เป็นหลักฐานประกอบการพิจารณาซึ่งได้แนบมาพร้อมกับใบคำร้องนี้
		</td>
	</tr>
	<tr>
		<td width="70%;">&nbsp;</td>
		<td width="30%;"  align="left" >
			<div align="center">
				(ลงชื่อ)................................................<br>
				(<u>   '.$a="".'  </u>)<br>
				วันที่<u>   '.$a="".'   </u>
			</div>
		</td>
	</tr>
	<tr >
		<td border="1" width="50%">
			<div align="center"><b>&nbsp;</b></div>
			&nbsp;<u><b>ความคิดเห็นอาจารย์ประจำวิชา</b></u><br><br>

			.......................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................<br>
			<div align="center">
				(ลงชื่อ)..........................................................<br>
				(....................................................................)<br>
				วันที่...................................................................
			</div>
		</td>
		<td border="1" width="50%">
			<div align="center"><b>ผลการพิจารณาคำร้องขอสอบกรณีพิเศษ</b></div>
			&nbsp;&nbsp;<u><b>ความคิดเห็นหัวหน้ากลุ่มวิชา</b></u><br>
			<div align="center">
				<label><input type="checkbox" name="check" value="ไม่อนุญาต" disabled="">ไม่อนุญาต</label>
				<label><input type="checkbox" name="check" value="อนุญาต" disabled="">อนุญาต</label>
			</div><br>
			เหตุผลประกอบ  ...............................................................................................................................................................................................................................................................<br>
			<div align="center">
				(ลงชื่อ)..........................................................<br>
				(....................................................................)<br>
				วันที่...................................................................
			</div>
		</td>
	</tr>
	<tr>
		<td width="100%">
			<hr>
			<div align="right">ส่วนของนักศึกษา <br>***ฉีกและเก็บไว้เป็นหลักฐานเพื่อใช้เข้าสอบกรณีพิเศษ</div>
			<div align="left">ข้าพเจ้า<u>  '.$a="".'   </u> รหัสนักศึกษา<u>  '.$a="".'  </u>  คณะ <u>  '.$a="".'  </u>  สาขาวิขา <u>  '.$a="".'  </u>  ชั้นปีที่ <u>  '.$a="".'  </u>  หมายเขตที่ติดต่อได้สะดวก <u>  '.$a="".'  </u> ได้ยื่นคำร้องขอสอบกรณีพิเศษรายวิชาศึกษาทั่วไป  รายวิชา <u>'.$a="".' </u> รหัสวิชา <u> '.$a="".'  </u>  หมู่เรียนที่ <u>  '.$a="".'  </u> โดยมีอาจารย์ <u>  '.$a="".'  </u>  เป็นผู้สอน </div>
			<i align="right">
				..........................................................................<br>
				(วันที่รับคำร้อง....................................................)<br>
				นางสาวนุชรี  วุฒิเบญจรัศมี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				เจ้าหน้าที่ผู้รับคำร้อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</i>
			<div align="left">
				<br><br>
				***นักศึกษาสามารถติดต่อข่าวสาร  ผลการพิจารณาคำร้องขอสอบกรณีพิเศษ ได้ที่หน้าห้อง <br>
				สำนักงาน  สำนักศึกษาทั่วไป  ชั้นใต้ดิน  อาคารเฉลิมพระเกียรติ โทร. 042-211040 ต่อ 1888 และ <br>
				Facebook Page ฝ่ายวิชาการ  สำนักศึกษาทั่วไป มรภ.อุดรธานี  URL : https://www.facebook.com/GE.Soc.Udru/
			</div>
		</td>
	</tr>
</table>
EOD'; // End forearch

// $pdf->AddFont('THSarabun','','THSarabun.php');
// $pdf->SetFont('THSarabun','',14);
// $pdf->SetDrawColor(255,0,0);
// $pdf->SetTextColor(0,63,300);

// print a cell
// สร้างเนื้อหาจาก  HTML code
$pdf->writeHTML($html, true, 0, true, 0);
$pdf->Output('student request.pdf','I');
// ---------------------------------------------------------

//Close and output PDF document

	//$pdf->Output('register_success.pdf','I');	//load document แสดง pdf

//============================================================+
// END OF FILE
//============================================================+
//======= SEND EMAIL ==========\\
	//$pdf->Output("folder/filename.pdf", "F"); //save the pdf to a folder


//header('Content-type: application/pdf');
?>
