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
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
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
$pdf->SetFont('THSarabun','',16);

// $pdf->Write(0, '*** นึกศึกษาสามารถยื่นคำร้องของสอบ ภายใน ๒ สัปดาห์แรกของการเปิดภาคเรียน', '', 0, 'L', true, 0, false, false, 0); //ตำแหน่งซ้ายขวา L,R
$pdf->writeHTML('<div>***นึกศึกษาสามารถยื่นคำร้องของสอบ ภายใน ๒ สัปดาห์แรกของการเปิดภาคเรียน  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  ส่วนของเจ้าหน้าที่</div>');
$pdf->writeHTML("<hr>");

$pdf->Ln(1);  //ความก้างของบรรทัด


// ob_start();

			// HTML text with soft hyphens (&shy;)
$html = '
<table width="100%" cellspacing="5" >
	<tr>
		<td align="center" colspan="2" valign="top"><h2> คำร้องขอสอบกรณีพิเศษ </h2></td>
	</tr>
	<tr>
		<td align="right" colspan="2">
			<b style="text-align:left;">เรียน  ผู้อำนวยการสำนักวิชาศึกษาทั่วไป</b>
		</td>
	</tr>
	<tr >
		<td  align="justify"   width="100%">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยข้าพเจ้า <u> (นาย) ไชยวัฒน์  หอมแสง </u>  รหัสนักศึกษา <u> 59040249201  </u> คณะ  <u>วิทยาศาสตร์  </u>  สาขาวิขา <u> วิทยาการคอมพิวเตอร์  </u>  ชั้นปีที่ <u> 4  </u> หมายเขตที่ติดต่อได้สะดวก  <u> 1111111111 </u> 	ภาค  <u>ปกติ</u>	ระดับ  <u>ปริญญาตรี</u> <br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ได้ขาดสอบปลายภาคเรียนที่  <u>1</u> ปีการศึกษา <u>2559 </u> ในวันที่ 23 กรกฏาคม 2559  เวลา <u>13.00 - 15.00 </u> น. ซึ่งเป็นการสอบในรายวิชา <u> เครื่อข่าย </u> รัหสวิชา <u> 1234 </u> หมู่เรียน <u> 2 </u> โดยมีอาจารย์ <u>ปณวรรต </u> เป็นผู้สอน   <br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ข้าพเจ้าจึงมีความประสงค์จะขอสอบกรณีพิเศษ ทั้งนี้เนื่องจาก  <u> ข้าพเจ้า เมามาสอบไม่ได้</u>  โดยมีหลักฐาน 1.) <u> ฝากโซดา  </u>  2.)  <u> ฝาขวดเหล้า </u>
		</td>
	</tr>
	<tr>
		<td width="100%">
			เป็นหลักฐานประกอบการพิจารณาซึ่งได้แนบมาพร้อมกับใบคำร้องนี้
		</td>
	</tr>
	<tr>
		<td width="100%" align="right">
			(ลงชื่อ)................................................<br>
			(<u>  นายไชยวัฒน์   หอมแสง  </u>)<br>
			วันที่<u>  23 กันยาตุลาคม 2559  </u>
		</td>
	</tr>
	<tr>
		<td  width="100%"> <hr></td>
	</tr>
	<tr >
		<td border="1" width="50%">
			<u><b>ความคิดเห็นอาจารย์ประจำวิชา</b></u>
		</td>
		<td border="1" width="50%">test</td>
	</tr>
</table>
';

// $pdf->AddFont('THSarabun','','THSarabun.php');
// $pdf->SetFont('THSarabun','',14);
// $pdf->SetDrawColor(255,0,0);
// $pdf->SetTextColor(0,63,300);

// print a cell
// สร้างเนื้อหาจาก  HTML code
$pdf->writeHTML($html, true, 0, true, 0);
$pdf->Output('register_success.pdf','I');
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
