<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('แบบคำร้องขอสอบในกรณีพิเศษ');
$pdf->SetTitle('แบบคำร้องขอสอบในกรณีพิเศษ');
$pdf->SetSubject('แบบคำร้องขอสอบในกรณีพิเศษ');
$pdf->SetKeywords('แบบคำร้องขอสอบในกรณีพิเศษ');


// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' test', PDF_HEADER_STRING);
$pdf->setFooterData(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));


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
// set cell padding
$pdf->setCellPaddings(0, 0, 0, 0);
// set cell margins
$pdf->setCellMargins(0, 0, 0, 0);

// $pdf->SetMargins(PDF_MARGIN_HEADER,'5');
// $pdf->SetMargins(PDF_MARGIN_FOOTER,'0.5');
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

$pdf->AddFont('thsarabun','','thsarabun.php');
$pdf->SetFont('thsarabun','',12,true);

// $pdf->Write(0, '*** นึกศึกษาสามารถยื่นคำร้องของสอบ ภายใน ๒ สัปดาห์แรกของการเปิดภาคเรียน', '', 0, 'L', true, 0, false, false, 0); //ตำแหน่งซ้ายขวา L,R
$pdf->writeHTML('<div style="font-weight: bold;">***นักศึกษาสามารถยื่นคำร้องขอสอบ ภายใน 2 สัปดาห์แรกของการเปิดภาคเรียน  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <u> ส่วนของเจ้าหน้าที่</u></div>');
$pdf->writeHTML("<hr>");

$pdf->Ln(1);  //ความก้างของบรรทัด


// ob_start();

			// HTML text with soft hyphens (&shy;)

// $couse = "";

$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
// --------------------------------//
foreach ($reqDetail as $key => $row_SSD) :
	$html = '
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
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยข้าพเจ้า <u> '.$row_SSD["studentName"].' </u>  รหัสนักศึกษา <u>  '.$row_SSD["mem_id"].'  </u> คณะ  <u>  '.$row_SSD["mem_faculty"].'  </u>  สาขาวิชา <u> '.$row_SSD["mem_branch"].'  </u>  ชั้นปีที่ <u>  '.$row_SSD["req_classNum"].'  </u>  <br> ภาค  <u> '.$row_SSD["req_pak"].'  </u>	ระดับ  <u>  '.$row_SSD["req_class"].'  </u> หมายเลขที่ติดต่อได้สะดวก  <u>  '.$row_SSD["mem_tel"].'  </u> <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ได้ขาดสอบปลายภาคเรียนที่  <u>  '.$row_SSD["req_term"].'  </u> ปีการศึกษา <u>  '.$row_SSD["req_year"].'  </u>  ซึ่งเป็นการสอบในรายวิชา  ดังต่อไปนี้ <br>';
			for($i=0;$i < count($row_SSD['course']); $i++){
				$html.= $i+intval(1).".)  วิชา <u> ".$row_SSD['course'][$i]['course_name']."</u> รหัส <u>".$row_SSD['course'][$i]['course_id']. "</u> หมู่เรียนที่ <u> ".$row_SSD['course'][$i]['rc_group']. " </u> ในวันที่ <u> ".$row_SSD['course'][$i]['rc_date']."</u>  เวลา <u> ".$row_SSD['course'][$i]['rc_time']." </u> น.    โดยมีอาจารย์ <u>".$row_SSD['course'][$i]['rc_teacher']."</u> เป็นผู้สอน   <br>";
			}
			$html.='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้าจึงมีความประสงค์จะขอสอบกรณีพิเศษ ทั้งนี้เนื่องจาก  <u>  '.$row_SSD["req_detail"].'  </u>  โดยมีหลักฐาน <u> '.$row_SSD["req_evidence"].' </u>
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
				(<u>   '.$row_SSD["studentName"].'  </u>)<br>
				วันที่<u>   '.$now->format('d/m/').($now->format('Y')+543).'   </u>
			</div>
		</td>
	</tr>
	<tr >
		<td border="1" width="50%">
			<div align="center"><b>&nbsp;</b></div>
			&nbsp;<u><b>&nbsp;&nbsp;ความคิดเห็นอาจารย์ประจำวิชา&nbsp;&nbsp;</b></u><br><br>

			.......................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................<br>
			<div align="center">
				(ลงชื่อ)..........................................................<br>
				(....................................................................)<br>
				วันที่...................................................................
			</div>
		</td>
		<td border="1" width="50%">
			<div align="center"><b>ผลการพิจารณาคำร้องขอสอบกรณีพิเศษ</b></div>
			&nbsp;&nbsp;<u>&nbsp;&nbsp;<b>ความคิดเห็นหัวหน้ากลุ่มวิชา&nbsp;&nbsp;</b></u><br>
			<div align="center">
				<label><input type="checkbox" name="check" value="ไม่อนุญาต" disabled="">ไม่อนุญาต</label>
				<label><input type="checkbox" name="check" value="อนุญาต" disabled="">อนุญาต</label>
			</div><br>&nbsp;&nbsp;
			เหตุผลประกอบ  ..................................................................................................................................................................................................................................................................................................................................<br>
			<div align="center">
				(ลงชื่อ)..........................................................<br>
				(....................................................................)<br>
				วันที่...................................................................
			</div>
		</td>
	</tr>
	<tr>
		<td width="100%">
			<!--  <hr style="border:2px dashed "> -->
			<div align="right">
				--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
				<i style="font-weight: bold;">***ฉีกและเก็บไว้เป็นหลักฐานเพื่อใช้เข้าสอบกรณีพิเศษ  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <u> ส่วนของนักศึกษา</u></i></div>
				<div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้า<u> '.$row_SSD["studentName"].' </u> รหัสนักศึกษา<u> '.$row_SSD["mem_id"].' </u>  คณะ <u> '.$row_SSD["mem_faculty"].' </u>  สาขาวิชา <u> '.$row_SSD["mem_branch"].' </u> ชั้นปีที่ <u> '.$row_SSD["req_classNum"].' </u>  หมายเลขที่ติดต่อได้สะดวก <u> '.$row_SSD["mem_tel"].'  </u>ได้ยื่นคำร้องขอสอบกรณีพิเศษรายวิชาศึกษาทั่วไป  รายวิชาดังต่อไปนี้<br>';
					for($i=0;$i < count($row_SSD['course']); $i++){
						$html.= $i+intval(1).".)  วิชา <u> ".$row_SSD['course'][$i]['course_name']."</u> รหัส <u>".$row_SSD['course'][$i]['course_id']. "</u> หมู่เรียนที่ <u>".$row_SSD['course'][$i]['rc_group']. "</u> ในวันที่ <u> ".$row_SSD['course'][$i]['rc_date']."</u>  เวลา <u> ".$row_SSD['course'][$i]['rc_time']." </u> น.    โดยมีอาจารย์ <u>".$row_SSD['course'][$i]['rc_teacher']."</u> เป็นผู้สอน  <br>  ";
					}
					$html.='</div><i align="right">	..........................................................................<br>
					(วันที่รับคำร้อง....................................................)<br>
					นางสาวนุชรี  วุฒิเบญจรัศมี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
					เจ้าหน้าที่ผู้รับคำร้อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</i>
				<div align="left" style="font-size:8ppt;">
					***นักศึกษาสามารถติดตามข่าวสาร  ผลการพิจารณาคำร้องขอสอบกรณีพิเศษ ได้ที่หน้าห้อง
					สำนักงาน  สำนักวิชาศึกษาทั่วไป  ชั้นใต้ดิน  อาคารเฉลิมพระเกียรติ โทร. 042-211040 ต่อ 1888 <br> และ
					Facebook Page ฝ่ายวิชาการ  สำนักวิชาศึกษาทั่วไป มรภ.อุดรธานี  URL : https://www.facebook.com/GE.Soc.Udru/
				</div>
			</td>
		</tr>
	</table>
	';
	endforeach;
// $pdf->AddFont('THSarabun','','THSarabun.php');
// $pdf->SetFont('THSarabun','',14);
// $pdf->SetDrawColor(255,0,0);
// $pdf->SetTextColor(0,63,300);

// print a cell
// สร้างเนื้อหาจาก  HTML code
// $pdf->writeHTML($html, true, 0, true, 0);
	$pdf->writeHTML($html, true, false, true, false, '');
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
