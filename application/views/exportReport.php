<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('รายชื่อ นักศึกษา');
$pdf->SetTitle('รายชื่อ นักศึกษา');
$pdf->SetSubject('รายชื่อ นักศึกษา');
$pdf->SetKeywords('รายชื่อ นักศึกษา');

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
$pdf->SetFont('THSarabun','',13);

// $pdf->Write(0, '*** นึกศึกษาสามารถยื่นคำร้องของสอบ ภายใน ๒ สัปดาห์แรกของการเปิดภาคเรียน', '', 0, 'L', true, 0, false, false, 0); //ตำแหน่งซ้ายขวา L,R
$pdf->writeHTML('<div>รายชื่อ นักศึกษา ที่ขอสอบกรณีพิเศษ <u>'.$courseName = (isset($getDataCourse[0]['course_name'] ))?$getDataCourse[0]['course_name']:''.'</u></div>');
$pdf->writeHTML("<hr>");

$pdf->Ln(1);  //ความก้างของบรรทัด


// ob_start();

			// HTML text with soft hyphens (&shy;)

// $couse = "";

$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
// --------------------------------//

$html = '
<table width="100%"  border="1">
	<thead>
		<tr  style="background-color:#D8D8D8;text-align:center;">
			<th class="col-sm-1 text-center" style="width: 20px;">ที่</th>
			<th class="text-center" style="width: 20%;">ชื่อ - สกุล</th>
			<th class="text-center"  style="width: 18%;">คณะ</th>
			<th class="text-center"  style="width: 20%;">สาขา</th>
			<th class="col-sm-1 text-center col-sm" style="width: 30px;text-align:center;">หมู่ที่</th>
			<th class="col-sm-1 text-center" style="width: 60px;">ปีการศึกษา</th>
			<th class="col-sm-1 text-center" style="width: 70px;">ว / ด / ป</th>
			<th class="col-sm-1 text-center"  style="width: 60px;">เวลา</th>
			<th class="col-sm-1 text-center " style="width: 60px;">หมายเหตุ</th>
		</tr>
	</thead>
	<tbody>';
		$num = count($getDataCourse);
		foreach ($getDataCourse as $key => $rowDataCourse):

			$html.='<tr style="text-align:center;">';
		$html.='<td style="width: 20px;text-align:center;">'.$num++.'</td>';
		$html.='<td style="width: 20%;">'.$rowDataCourse['studentName'].'</td>';
		$html.='<td  style="width: 18%;">'.$rowDataCourse['mem_faculty'].'</td>';
		$html.='<td style="width: 20%;">'.$rowDataCourse['mem_branch'].'</td>';
		$html.='<td style="width: 30px;text-align:center;">'.$rowDataCourse['rc_group'].'</td>';
		$html.='<td style="width: 60px;">'.$rowDataCourse['req_year'].'</td>';
		$html.='<td style="width: 70px;">'.$rowDataCourse['rc_date'].'</td>';
		$html.='<td style="width: 60px;text-align:center;">'.$rowDataCourse['rc_time'].'</td>';
		$html.='<td  style="width: 60px;"></td>';
		$html.='</tr>';

		endforeach;
		$html.='
	</tbody>
</table>
';
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
