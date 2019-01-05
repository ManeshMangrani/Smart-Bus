<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends MY_Controller {


	/**
	 * Example: DOMPDF
	 *
	 * Documentation:
	 * http://code.google.com/p/dompdf/wiki/Usage
	 *
	 */

	public function selection_ticket(){
		$this->loadView('excel/selection_ticket_excel',null,true);
	}

	public function user_selection(){
		$this->loadView('excel/selection_user_excel',null,true);
	}

	public function ticket() {

		$this->load->library('excel');

		$this->load->model('ticket_model','TicketModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$title = "Ticket Info". "   (". $this->input->post('sdate')." TO ".$this->input->post('ldate').")";
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:G1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $title);

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($top_header_style);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'Reservation ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'T_ID');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Ticket Status');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Traveller ID');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Visitor ID');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', 'Schedule ID');
	$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Issuance Time');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($style_header);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->TicketModel->getListexcel($this->input->post());
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['reservation_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['t_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['state']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['trav_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['p_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$row, $value['schedule_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$row, $value['created_at']);
		$row++;
	}

	//$filename = "Ticket Report Till". date("Y-m-d-H-i-s") ."xls";
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename=Ticket Sale.xls');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}

	public function user() {

		$this->load->library('excel');

		$this->load->model('user_model','UserModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	if($this->input->post('user') == 0){
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:L1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Users Info');

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('H1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('I1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('J1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('K1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('L1')->applyFromArray($top_header_style);


	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'User_ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Name');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Gender');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'E-mail');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Phone');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', 'CNIC');
	$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Address');
	$objPHPExcel->getActiveSheet()->setCellValue('H2', 'Role_ID');
	$objPHPExcel->getActiveSheet()->setCellValue('I2', 'IS_Valued');
	$objPHPExcel->getActiveSheet()->setCellValue('J2', 'IS_New');
	$objPHPExcel->getActiveSheet()->setCellValue('K2', 'KM(s) Travelled');
	$objPHPExcel->getActiveSheet()->setCellValue('L2', 'Registration Date');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('I2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('J2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('K2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('L2')->applyFromArray($style_header);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(40);
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);

	$row = 3;
	if($this->input->post('id')){
		$custDtaData  = $this->UserModel->getuser1($this->input->post('id'));
	}
	else{
		$custDtaData  = $this->UserModel->getList('asc');
	}
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['user_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['fname'].' '.$value['lname']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['gender']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['email']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['phone']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$row, $value['cnic']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$row, $value['address']);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$row, $value['role_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('I'.$row, $value['is_valued']);
		$objPHPExcel->getActiveSheet()->setCellValue('J'.$row, $value['is_new']);
		$objPHPExcel->getActiveSheet()->setCellValue('K'.$row, $value['km']);
		$objPHPExcel->getActiveSheet()->setCellValue('L'.$row, $value['created_at']);
		$row++;
	}

	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="Users_List.xls"');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');}
	else if($this->input->post('user') == 1){
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:F1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Visitors Info');

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($top_header_style);


	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'User_ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Name');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Gender');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'E-mail');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Phone');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', 'CNIC');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($style_header);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);

	$row = 3;
	if($this->input->post('id')){
		$custDtaData  = $this->UserModel->getListvistors($this->input->post('id'));
	}
	else{
		$custDtaData  = $this->UserModel->getListvistors('0');
	}
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['p_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['fname'].' '.$value['lname']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['gender']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['email']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['phone']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$row, $value['cnic']);
		$row++;
	}

	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="Visitors_List.xls"');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}
	}



 public function bus() {

		$this->load->library('excel');

		$this->load->model('bus_model','BusModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$title = "Buses Info Till". " ". date("Y-m-d");
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:H1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $title);

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('H1')->applyFromArray($top_header_style);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'Bus ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Registration #');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Seats');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Class');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Discription');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', 'Tracker ID');
	$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Cam IDs');
	$objPHPExcel->getActiveSheet()->setCellValue('H2', 'Induction Date');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($style_header);


	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->BusModel->getList('asc');
	foreach ($custDtaData as $value)
	{
		$cam = $value['cam_id'].",".($value['cam_id']+1);
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['bus_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['regs_no']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['seats']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['class']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['des']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$row, $value['tracker_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$row, $cam);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$row, $value['created_at']);
		$row++;
	}

	//$filename = "Ticket Report Till". date("Y-m-d-H-i-s") ."xls";
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename=Buses Info.xls');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}

	public function route() {

		$this->load->library('excel');

		$this->load->model('route_model','RouteModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$title = "Buses Info Till". " ". date("Y-m-d");
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:I1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $title);

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('H1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('I1')->applyFromArray($top_header_style);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'Route ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Source');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Destinaion');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Stops');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Departure');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', 'Arrival');
	$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Fare');
	$objPHPExcel->getActiveSheet()->setCellValue('H2', 'Kms');
	$objPHPExcel->getActiveSheet()->setCellValue('I2', 'Start Date');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('I2')->applyFromArray($style_header);


	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->RouteModel->getList('asc');
	foreach ($custDtaData as $value)
	{
		if($value['day'] == 0){
			$day = "Same Day";
		}
		else if($value['day'] == 1){
			$day = "Next Day";
		}
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['route_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['source']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['destination']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['stops']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['departure']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$row, $value['arrival']."-".$day);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$row, $value['fare']);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$row, $value['km']);
		$objPHPExcel->getActiveSheet()->setCellValue('I'.$row, $value['created_at']);
		$row++;
	}

	//$filename = "Ticket Report Till". date("Y-m-d-H-i-s") ."xls";
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename=Routes Info.xls');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}




 public function schedule() {

		$this->load->library('excel');

		$this->load->model('schedule_model','ScheduleModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$title = "Schedules Info Till". " ". date("Y-m-d");
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:D1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $title);

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'Schedule ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Bus ID');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Route ID');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Start Date');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);


	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->ScheduleModel->getList('asc');
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['schedule_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['bus_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['route_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['created_at']);
		$row++;
	}

	//$filename = "Ticket Report Till". date("Y-m-d-H-i-s") ."xls";
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename=Schedules Info.xls');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}


	public function city() {

		$this->load->library('excel');

		$this->load->model('city_model','CityModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$title = "Cities Info Till". " ". date("Y-m-d");
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:C1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $title);

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'City ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Name');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Short Code');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);


	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->CityModel->getList();
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['city_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['name']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['shortcode']);
		$row++;
	}

	//$filename = "Ticket Report Till". date("Y-m-d-H-i-s") ."xls";
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename=Cities Info.xls');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}



	public function offer() {

		$this->load->library('excel');

		$this->load->model('offer_model','OfferModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$title = "Offers Info Till". " ". date("Y-m-d");
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:H1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $title);

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('H1')->applyFromArray($top_header_style);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'Offer ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Name');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Discount %');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Applicable Class');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Validity');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', '# Seats Required');
	$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Discription');
	$objPHPExcel->getActiveSheet()->setCellValue('H2', 'Start Date');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($style_header);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->OfferModel->getList();
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['o_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['name']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['value']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['class']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['validity']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$row, $value['seat']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$row, $value['disc']);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$row, $value['created_at']);
		$row++;
	}

	//$filename = "Ticket Report Till". date("Y-m-d-H-i-s") ."xls";
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename=Offers Info.xls');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}
}
