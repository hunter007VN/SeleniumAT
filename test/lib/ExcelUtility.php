<?php

/**
 * Object Excel
 * @author Thang
 * @package ExcelUtility 
 */
include 'PHPExcel/IOFactory.php'; 
class ExcelUtility
{	
	const FORMAT_STRING = 0;
	const FORMAT_INT = 1;
	const FORMAT_DECIMAL = 2;
	const FORMAT_DOUBLE = 3;
	const FORMAT_DATE = 4;
	const FORMAT_DATETIME = 5;
	const FORMAT_PERCENTAGE = 6;//'0%'
	const FORMAT_PERCENTAGE_00 = 7;// '0.00%'
	const FORMAT_DATE_DMMINUS = 8;//'d-m'
	const FORMAT_DATE_XLSX16 = 9;//'d-mmm'
	const FORMAT_DATE_XLSX22 = 10;//'m/d/yy h:mm'
	const FORMAT_DATE_YYYYMMDDSLASH = 11;//'yy/mm/dd;@'
	const FORMAT_DATE_YYYYMMDD = 12;// 'yy-mm-dd'
	const FORMAT_DATE_TEMPLATE = 13;// 'use for datetime template file'
	const FORMAT_PERCENTAGE_0 = 14;	//'#,##0.0%'
	const FORMAT_PERCENTAGE_0_VALUE = '#,##0.0%';	//
	const FORMAT_DATE_XLSX15 = 15;//'d-mmm-yy'
	const FORMAT_DECIMAL_1 = 16;
	const FORMAT_DECIMAL_1_VALUE = '#,##0.0';	//
	const FORMAT_DECIMAL_10 = 17;
	const FORMAT_DECIMAL_10_VALUE = '#,##0.9876543210';	//
	
	const HORIZONTAL_CENTER = 'center';
	const HORIZONTAL_CENTER_CONTINUOUS = 'centerContinuous'; 
	const HORIZONTAL_GENERAL =  'general'; 
	const HORIZONTAL_JUSTIFY = 'justify'; 
	const HORIZONTAL_LEFT = 'left'; 
	const HORIZONTAL_RIGHT = 'right'; 
	const VERTICAL_BOTTOM = 'bottom'; 
	const VERTICAL_CENTER = 'center'; 
	const VERTICAL_JUSTIFY = 'justify'; 
	const VERTICAL_TOP = 'top';
	
	/*
	 * real file to array
	 */
	public static function readExcel2Array($file,$sheetIndex = 1)
	{
		
		try{								
			$objPHPExcel = \PHPExcel_IOFactory::load($file);			
		}
		catch(\Exception $ex)
		{			
			throw new \Exception('Error load file.');
		}
		try{			
			$arrWorksheet = $objPHPExcel->getAllSheets();//read all sheets.
			
			if($sheetIndex > 0 && $sheetIndex > count($arrWorksheet))
			{
				throw new \Exception('File data has not sheet index');
			}
			$arrData = array();
			
			if($sheetIndex != 0)
			{
				ExcelUtility::moveDataSheet2Arr($sheetIndex - 1,$arrWorksheet,$arrData);			
			}
			else//$sheetIndex = 0, get all
			{			
				for($s = 0; $s<count($arrWorksheet); $s++)
				{
					ExcelUtility::moveDataSheet2Arr($s,$arrWorksheet,$arrData);
				}
			}			
			return $arrData;
		}
		catch(\Exception $ex){
			throw new \Exception('Can not read this file.');
		}
	}
	
	//$arrTemp bat dau tu 0, nhung cac cell thi la A11, B11 lai bat dau tu 1, nen khi loop cho i=1, nen khi use i trong arrTemp phai la i-1
	public static function moveDataSheet2Arr($sheet,$arrWorksheet,&$arrData)
	{		
		$arrTemp = $arrWorksheet[$sheet]->toArray();		 
		//read row				
		for($i = 1; $i<=count($arrTemp); $i++)
		{
			$letter = 'A';
			//read column
			// echo '<br/>I='.$i.'count col:'.count($arrTemp[$i-1]);
			for($j = 0; $j<count($arrTemp[$i-1]); $j++)
			{
				// echo 'j='.$j;				
				// echo ';i='.$i;				
				$cell = $letter . $i;
				//($cell->getValue() instanceof PHPExcel_RichText) ? $cell->getValue()->getPlainText() : $cell->getValue();				
				$arrData[$sheet][$i-1][$j] = $arrWorksheet[$sheet]->getCell($cell)->getValue() instanceof \PHPExcel_RichText ? $arrWorksheet[$sheet]->getCell($cell)->getValue()->getPlainText() : $arrWorksheet[$sheet]->getCell($cell)->getValue();				
				$letter++;
			}				 
		}		
	}
	
	public static function readExcelHyperlink2Array($file,$sheetIndex = 1)
	{
		try{			
			$objPHPExcel = \PHPExcel_IOFactory::load($file);
		}
		catch(\Exception $ex)
		{
			throw new \Exception('Error load file.');
		}
		$arrWorksheet = $objPHPExcel->getAllSheets();//read all sheets.
		
		if($sheetIndex > 0 && $sheetIndex > count($arrWorksheet))
		{
			throw new \Exception('File data has not sheet index');
		}
		$arrData = array();
		
		if($sheetIndex != 0)
		{
			ExcelUtility::moveDataHyperlink2Arr($sheetIndex - 1,$arrWorksheet,$arrData);			
		}
		else//$sheetIndex = 0, get all
		{			
			for($s = 0; $s<count($arrWorksheet); $s++)
			{
				ExcelUtility::moveDataHyperlink2Arr($s,$arrWorksheet,$arrData);
			}
		}
		return $arrData;
	}
	
	public static function moveDataHyperlink2Arr($sheet,$arrWorksheet,&$arrData)
	{		
		$arrTemp = $arrWorksheet[$sheet]->toArray();		
		$arrValue = array();
		$arrHyperlink = array();				
		for($i = 0; $i<=count($arrTemp); $i++)
		{
			$letter = 'A';		
			for($j = 0; $j<count($arrTemp[$i]); $j++)
			{
				$step = $i+1;
				$cell = $letter . $step;				
				if($arrWorksheet[$sheet]->getCell($cell)->hasHyperlink())
				{
					$arrHyperlink[$i][$j] = $arrWorksheet[$sheet]->getCell($cell)->getHyperlink()->getUrl();
					$arrValue[$i][$j] = $arrWorksheet[$sheet]->getCell($cell)->getValue();
					  
				}
				else
				{
					$arrHyperlink[$i][$j] = "";
					$arrValue[$i][$j] = $arrWorksheet[$sheet]->getCell($cell)->getValue();
				}									
				$letter++;				
			}
		}		
		$arrData[$sheet] = array($arrValue,$arrHyperlink);
	}
	
	//count all header column has data
	public static function countRealColumnsHeader($arrData,$row=0)
	{
		try{		
			$countCol = 0;
			for($j = 0; $j < count($arrData[$row]); $j++)
			{
				if(trim($arrData[$row][$j]) != "")
				{
					$countCol++;
				}
				else
					break;			
			}
			return $countCol;
		}
		catch(\Exception $ex){
			throw new \Exception('Can not read column of this file.');
		}
	}
	//return real row
	//break when all columns at row is null
	public static function countRealRows($arrData,$countCol,$startrow=0,$startcol=0)
	{
		try{				
			for($i = $startrow; $i < count($arrData); $i++)
			{
				$isBreakRow = true;
				for($j = $startcol; $j < $countCol; $j++)
				{
					if(trim($arrData[$i][$j]) != '')
					{
						$isBreakRow = false;
						break;
					}
				}
				if($isBreakRow == true)
				{								
					return $i;
				}
			}		
			return $i;
		}
		catch(\Exception $ex){
			throw new \Exception('Can not read row of this file.');
		}
	}
	//check columns has header null
	//return array
	//count($arrCol) = 0 valid
	//count($arrCol) > 0 invalid, array column invalid
	public static function searchEmptyHeaderColumn($arrData,$countCol,$rowHeader = 0)
	{
		try{
		$arrCol = array();
		for($j = 0; $j<$countCol ; $j++)
		{
			if(trim($arrData[$rowHeader][$j]) == '')
			{				
				$arrCol[count($arrCol)] = $j;
			}
		}
		return $arrCol;
		}
		catch(\Exception $ex){
			throw new \Exception('Can not read header of this file.');
		}
	}
	
	//check columns has index null
	//return array
	//count($arrCol) = 0 valid
	//count($arrCol) > 0 invalid, array column invalid
	public static function searchEmptyIndexColumn($arrData,$countCol,$rowIndex = 0)
	{
		try{
		$arrCol = array();
		for($j = 0; $j<$countCol ; $j++)
		{
			if(trim($arrData[0][$j]) == '')
			{
				$arrCol[count($arrCol)] = $j;
			}
		}
		return $arrCol;
		}
		catch(\Exception $ex){
			throw new \Exception('Can not read index of this file.');
		}
	}
	/*
	 * cut array
	 */
	public static function getSubArray($arrData,$startRow,$endRow,$startCol,$endCol)
	{
		try{		
		$arrResult = array();
		for($i = $startRow; $i<$endRow; $i++)
		{
			$countRow = count($arrResult);
			$countCol = 0;
			for($j = $startCol; $j<$endCol; $j++)
			{				
				$arrResult[$countRow][$countCol] = $arrData[$i][$j];
				$countCol++;
			}
		}
		return $arrResult;
		}
		catch(\Exception $ex){
			throw new \Exception('Can not read this file.');
		}	
	}	
	
	//convert index mapExcelArrWithDataField
	public static function mapExcelArrWithDataField($arrData,$arrIndex)
	{
		try{
		$arrResult = array();
		for($i = 0; $i<count($arrData); $i++)
		{	
			for($j = 0; $j<count($arrIndex); $j++)
			{
				$arrResult[$i][$arrIndex[$j]] = $arrData[$i][$j];				
			}
		}
		return $arrResult;
		}
		catch(\Exception $ex){
			throw new \Exception('Can not read this file.');
		}	
	}
	//set properties php excel object
	public static function setProperties(&$objPHPExcel,$Creator = '', $LastModifiedBy = '', $Title = '', $Subject = '', $Description = '', $Keywords = '', $Category = '')
	{
		$Creator = $Creator == '' ? 'SMPROC3' : $Creator;
		$LastModifiedBy = $LastModifiedBy == '' ? 'SMPROC3' : $LastModifiedBy;
		$Title = $Title == '' ? 'Office 2007 XLSX Document' : $Title;
		$Subject = $Subject == '' ? 'Office 2007 XLSX Document' : $Subject;
		$Description = $Description == '' ? 'SMPROC3' : $Description;
		$Keywords = $Keywords == '' ? 'SMPROC3' : $Keywords;
		$Category = $Category == '' ? 'SMPROC3' : $Category;
		
		$objPHPExcel->getProperties()->setCreator($Creator)
										 ->setLastModifiedBy($LastModifiedBy)
										 ->setTitle($Title)
										 ->setSubject($Subject)
										 ->setDescription($Description)
										 ->setKeywords($Keywords)
										 ->setCategory($Category);
	}
		
	public static function export2Excel($objPHPExcel, $versionExcel = 'Excel2007', $fileName = '')
	{
		//2003 use 'Excel5'
		$extFile = $versionExcel == 'Excel2007' ? ".xlsx" : ".xls";
		
		if ($fileName=="") $fileName = date("yMdhis").$extFile;
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header("Content-Disposition: attachment;filename=$fileName");
		header('Cache-Control: max-age=0');
		
		$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, $versionExcel);
		$objWriter->save('php://output');
		//exit;
	}
	
	public static function export2PDF($objPHPExcel, $fileName = '')
	{
		$extFile = '.pdf';
		if ($fileName=="") $fileName = date("yMdhis").$extFile;
		
		header('Content-Type: application/pdf');
		header("Content-Disposition: attachment;filename=$fileName");
		header('Cache-Control: max-age=0');
		
		$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
		$objWriter->setSheetIndex(0);
		$objWriter->save('php://output');
	}
	
	public static function export2CSV($objPHPExcel, $fileName = '')
	{
		$extFile = '.csv';
		if ($fileName=="") $fileName = date("yMdhis").$extFile;
		
		$objWriter = new \PHPExcel_Writer_CSV($objPHPExcel);
		$objWriter->setDelimiter(',');
		$objWriter->setEnclosure('');
		$objWriter->setLineEnding("\r\n");
		$objWriter->setSheetIndex(0);
		//$objWriter->save('blah '.$currenttime.'.csv');
		
		
	   	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   	header("Content-Disposition: attachment;filename=$fileName");
	   	header('Cache-Control: max-age=0');	
		
	   	$objWriter->save('php://output');		
	}
	
	//check data before add data to sheet
	public static function isEmptyData($arrData,&$objPHPExcel,$sheet=0){
		if(count($arrData)==0){
			$cell = 'A1';
			$value = 'Data is empty';
			$objPHPExcel->getSheet($sheet)->setCellValue($cell,$value);
			return false;
		}
		return true;
	}
	//add data 2 excel object
	public static function addData2Sheet($arrData,&$objPHPExcel,$arrIndexs,$arrTypeFormats=null,$rowStart=1,$colStart='A',$sheet=0)
	{
		$countLine = $rowStart;
		$letter = $colStart;
		\PHPExcel_Cell::setValueBinder( new \PHPExcel_Cell_AdvancedValueBinder());
		//var_dump($arrData); die;
		if($arrTypeFormats != null)
		{		
			for($i = 0; $i<count($arrData); $i++)
			{
				//$worksheet = $objPHPExcel->getActiveSheet();
				$letter = $colStart;
				for($j = 0; $j<count($arrIndexs); $j++)
				{				
					$cell = $letter . $countLine;
					$value = $arrData[$i][$arrIndexs[$j]];				
					
					if(isset($arrTypeFormats[$j]) && $arrTypeFormats[$j] == ExcelUtility::FORMAT_STRING)
					{				
						$objPHPExcel->getSheet($sheet)->getCell($cell)->setValueExplicit($value, \PHPExcel_Cell_DataType::TYPE_STRING);
					}
					else if(isset($arrTypeFormats[$j]) && ($arrTypeFormats[$j] == ExcelUtility::FORMAT_DATE_TEMPLATE))
					{
						if($value != NULL && $value !="")
						{	
							$objPHPExcel->getSheet($sheet)->setCellValue($cell, \PHPExcel_Shared_Date::PHPToExcel(new DateTime(date("Y-m-d H:i:s",strtotime ($value)))));
						}
					}
					else
						$objPHPExcel->getSheet($sheet)->setCellValue($cell,$value);				
					
					$letter++;
				}			
				$countLine++;
			}
		}
		else{
			for($i = 0; $i<count($arrData); $i++)
			{
				$letter = $colStart;				
				for($j = 0; $j<count($arrIndexs); $j++)
				{				
					$cell = $letter . $countLine;
					$value = $arrData[$i][$arrIndexs[$j]];
					$objPHPExcel->getSheet($sheet)->setCellValue($cell,$value);
					$letter++;
				}
				$countLine++;
			}
		}
	}
	
	//format cell and column
	public static function formatCell(&$objPHPExcel,$cell,$typeFormat)
	{	
		PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder());
		switch ($typeFormat){
			case ExcelUtility::FORMAT_INT://int
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
				break;
			case ExcelUtility::FORMAT_STRING://string					
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_TEXT);
				break;
			case ExcelUtility::FORMAT_DECIMAL://decimal
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
				break;
			case ExcelUtility::FORMAT_DOUBLE://double	
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
				break;
			case ExcelUtility::FORMAT_DATE://date					
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDDSLASH);
				break;
			case ExcelUtility::FORMAT_DATETIME://date	time			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);
				break;
			case ExcelUtility::FORMAT_PERCENTAGE:// '0%'				
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE);
				break;
			case ExcelUtility::FORMAT_PERCENTAGE_00://'0.00%'				
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
				break;
			case ExcelUtility::FORMAT_DATE_DMMINUS://'d-m'				
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_DMMINUS);
				break;
			case ExcelUtility::FORMAT_DATE_XLSX16://'d-mmm'				
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX16);
				break;
			case ExcelUtility::FORMAT_DATE_XLSX22://'m/d/yy h:mm'			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX22);
				break;
			case ExcelUtility::FORMAT_DATE_YYYYMMDDSLASH://'yy/mm/dd;@'			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDDSLASH);
				break;
			case ExcelUtility::FORMAT_DATE_YYYYMMDD://'yy-mm-dd'			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD);
				break;
			case ExcelUtility::FORMAT_PERCENTAGE_0://'#,##0.0%'			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(ExcelUtility::FORMAT_PERCENTAGE_0_VALUE);
				break;
			case ExcelUtility::FORMAT_DATE_XLSX15:// 'd-mmm-yy'			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX15);
				break;
			case ExcelUtility::FORMAT_DECIMAL_1:// '#,##0.0'			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(ExcelUtility::FORMAT_DECIMAL_1_VALUE);
				break;
			case ExcelUtility::FORMAT_DECIMAL_10:// '#,##0.9876543210'			
				$objPHPExcel->getActiveSheet()->getStyle($cell)->getNumberFormat()->setFormatCode(ExcelUtility::FORMAT_DECIMAL_10_VALUE);
				break;	
			default:
				break;
		}	
	}
		
	public static function createSheet(&$objPHPExcel,$sheet,$sheetTitle)
	{
		$objPHPExcel->createSheet($sheet);
		$objPHPExcel->getSheet($sheet)->setTitle($sheetTitle);		
	}
	
	public static function setSheetTitle(&$objPHPExcel,$sheet,$sheetTitle)
	{
		$objPHPExcel->getSheet($sheet)->setTitle($sheetTitle);
	}
	
	
	
	//add data 2 excel object
	public static function addData2ExcelObject($arrData,&$objPHPExcel,$arrIndexs,$arrTypeFormats,$arrHeaders=null,$sheet=0,$sheetTitle=null)
	{		
		$countLine = 1;
		$letter = 'A';
		$objPHPExcel->createSheet();
		$objPHPExcel->setActiveSheetIndex($sheet);
		if($sheetTitle != null && $sheetTitle != "")
			$objPHPExcel->getActiveSheet()->setTitle($sheetTitle);
		if(isset($arrHeaders))
		{			
			for($j = 0; $j<count($arrHeaders); $j++)
			{
				$cell = $letter . $countLine;
				$objPHPExcel->setActiveSheetIndex($sheet)->setCellValue($cell, $arrHeaders[$j]);
				$letter++;
			}
			$countLine++;
			$letter = 'A';			
		}		
		\PHPExcel_Cell::setValueBinder( new \PHPExcel_Cell_AdvancedValueBinder());
		
		for($i = 0; $i<count($arrData); $i++)
		{
			$letter = 'A';
			$worksheet = $objPHPExcel->getActiveSheet();
			for($j = 0; $j<count($arrIndexs); $j++)
			{				
				$cell = $letter . $countLine;
				$value = $arrData[$i][$arrIndexs[$j]];				
				
				if($arrTypeFormats[$j] == ExcelUtility::FORMAT_STRING)				
					$worksheet->getCell($cell)->setValueExplicit($value, \PHPExcel_Cell_DataType::TYPE_STRING);
				else
					$objPHPExcel->getActiveSheet()->setCellValue($cell,$value);
				ExcelUtility::formatCell($objPHPExcel,$cell,$arrTypeFormats[$j]);
				
				$letter++;
			}
			//ExcelUtility::formatDataWithArrTypeFormat(&$objPHPExcel,'A',$countLine,$arrTypeFormats);
			$countLine++;
		}			
	}
		
		
	public static function formatColumn(&$objPHPExcel,$arrTypeFormats,$letter='A',$sheet=0)
	{
		$objPHPExcel->setActiveSheetIndex($sheet);
		\PHPExcel_Cell::setValueBinder( new \PHPExcel_Cell_AdvancedValueBinder());
				
		for($j = 0; $j<count($arrTypeFormats); $j++)
		{	
			ExcelUtility::formatCell($objPHPExcel,$letter,$arrTypeFormats[$j]);
			$letter++;
		}
	
	}
	
	//coordinates is position at worksheet
	//path is path of image
	//name is image name, that can null
	//description is image description, that can null	
	public static function insertPic2Excel(&$objPHPExcel,$coordinates,$path,$name='',$desription='',$sheet=0)
	{	
		$objPHPExcel->createSheet();
		$objPHPExcel->setActiveSheetIndex($sheet);

		//insert picture to the excel file.
		$objDrawing = new \PHPExcel_Worksheet_Drawing();
		$objDrawing->setName($name);
		$objDrawing->setDescription($description);
		$objDrawing->setPath($path);//"./images/GoogleLogo.gif"
		$objDrawing->setCoordinates($coordinates);//position
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	}
	
	//format data with range
	//col is a character
	public static function formatDataRange(&$objPHPExcel,$arrTypeFormats,$startRow,$endRow,$startLetter,$countCol,$sheet=0)
	{		
		$objPHPExcel->setActiveSheetIndex($sheet);
		PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder());
		for($i=$startRow; $i<=$endRow; $i++)
		{	
			$letter = $startLetter;
			for($j=0; $j<$countCol; $j++)
			{
				if(isset($arrTypeFormats[$j]))
				{
					$cell = $letter . $i;
					ExcelUtility::formatCell($objPHPExcel,$cell,$arrTypeFormats[$j]);
				}
				$letter++;
			}			
		}
	}
	
	//set border range	
	public static function setBorderRange(&$objPHPExcel,$range,$borderStyle,$color='000000',$sheet=0)
	{
		$objPHPExcel->setActiveSheetIndex($sheet);
		$styleArray = array(
			'borders' => array(
				'outline' => array(
					'style' => ExcelUtility::getStyleBorder($borderStyle),
					'color' => array('rgb' => $color),
				),
			),
		);
		$objPHPExcel->getActiveSheet()->getStyle($range)->applyFromArray($styleArray);
	}
	
	private static function getStyleBorder($borderStyle)
	{
		if($borderStyle == ExcelUtility::BORDER_THIN)
			return PHPExcel_Style_Border::BORDER_THIN;
		if($borderStyle == ExcelUtility::BORDER_THICK)
			return PHPExcel_Style_Border::BORDER_THICK;
		if($borderStyle == ExcelUtility::BORDER_NONE)
			return PHPExcel_Style_Border::BORDER_NONE;
		return PHPExcel_Style_Border::BORDER_THIN;
	}
	
	//set bold header
	public static function setBold(&$objPHPExcel,$countCol,$startCol='A',$startRow=1)
	{
		$objConditional1 = new \PHPExcel_Style_Conditional();
		$objConditional1->setConditionType(\PHPExcel_Style_Conditional::CONDITION_CELLIS);
		$objConditional1->setOperatorType(\PHPExcel_Style_Conditional::OPERATOR_LESSTHAN);
		$objConditional1->addCondition('0');
		$objConditional1->getStyle()->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_BLACK);
		$objConditional1->getStyle()->getFont()->setBold(true);
		
		$objConditional2 = new \PHPExcel_Style_Conditional();
		$objConditional2->setConditionType(\PHPExcel_Style_Conditional::CONDITION_CELLIS);
		$objConditional2->setOperatorType(\PHPExcel_Style_Conditional::OPERATOR_GREATERTHANOREQUAL);
		$objConditional2->addCondition('0');
		$objConditional2->getStyle()->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_BLACK);
		$objConditional2->getStyle()->getFont()->setBold(true);
		
		$conditionalStyles = $objPHPExcel->getActiveSheet()->getStyle('A1')->getConditionalStyles();
		array_push($conditionalStyles, $objConditional1);
		array_push($conditionalStyles, $objConditional2);				
		$letter = $startCol;
		for($j=0;$j<$countCol;$j++)
		{
			$cell = $letter . $startRow;
			$objPHPExcel->getActiveSheet()->getStyle($cell)->setConditionalStyles($conditionalStyles);
			$letter++;	
		}
	}
	
	public static function mergRange(&$objPHPExcel,$range,$alignHORIZONTAL = null,$alignVERTICAL = null,$sheet=0)
	{ 
		try{
                 //   var_dump($range); echo "fsd"; die;
			$objPHPExcel->setActiveSheetIndex($sheet);
			$objPHPExcel->getActiveSheet()->mergeCells($range);
			if($alignHORIZONTAL != null)
			{
				ExcelUtility::setAlignHorizontal($objPHPExcel,$range,$alignHORIZONTAL);
			}
			if($alignVERTICAL != null)
			{
				ExcelUtility::setAlignVertical($objPHPExcel,$range,$alignVERTICAL);
			}
		}
		catch(\Exception $ex)
		{
			throw new \Exception('Error merg range');	
		}
	}
	
	//range: 'A1:A5'
	public static function setAlignHorizontal(&$objPHPExcel,$range,$alignHORIZONTAL)
	{
		switch($alignHORIZONTAL)
		{
			case ExcelUtility::HORIZONTAL_CENTER:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
				break;
			case ExcelUtility::HORIZONTAL_CENTER_CONTINUOUS:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER_CONTINUOUS);
				break;
			case ExcelUtility::HORIZONTAL_GENERAL:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_GENERAL);
				break;
			case ExcelUtility::HORIZONTAL_JUSTIFY:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
				break;
			case ExcelUtility::HORIZONTAL_LEFT:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
				break;
			case ExcelUtility::HORIZONTAL_RIGHT:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
				break;
			default:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_GENERAL);
				break;
		}
	}
	
	//range: 'A1:A5'
	public static function setAlignVertical(&$objPHPExcel,$range,$alignVERTICAL)
	{
		switch($alignVERTICAL)
		{
			case ExcelUtility::VERTICAL_BOTTOM:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_BOTTOM);
				break;
			case ExcelUtility::VERTICAL_CENTER:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
				break;
			case ExcelUtility::VERTICAL_JUSTIFY:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_JUSTIFY);
				break;
			case ExcelUtility::VERTICAL_TOP:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_TOP);
				break;
			default:
				$objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
				break;
		}
	}
	
	public static function fillColorRange(&$objPHPExcel,$range,$color)
	{		
		$objPHPExcel->getActiveSheet()->getStyle($range)->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
		$objPHPExcel->getActiveSheet()->getStyle($range)->getFill()->getStartColor()->setRGB($color);
	}
		
	public static function setRowHeight(&$objPHPExcel,$height,$startRow,$endRow,$sheet = 0) 
	{
		\PHPExcel_Cell::setValueBinder( new \PHPExcel_Cell_AdvancedValueBinder());
		for($i = $startRow; $i<=$endRow; $i++)
		{	
			$objPHPExcel->setActiveSheetIndex($sheet)->getRowDimension($i)->setRowHeight($height);			
		}
	}
	
	public static function setColWidth(&$objPHPExcel,$width,$col,$sheet = 0) 
	{
		\PHPExcel_Cell::setValueBinder( new \PHPExcel_Cell_AdvancedValueBinder());
		$objPHPExcel->setActiveSheetIndex($sheet)->getColumnDimension($col)->setWidth($width);
	}
	
	//versionOffice 2003 = Excel5
	//versionOffice 2007 = Excel2007
	public static function readTemplate($path,$versionOffice = 'Excel2007')
	{		
		$objReader = \PHPExcel_IOFactory::createReader($versionOffice);
		$objPHPExcel = $objReader->load($path);
		return $objPHPExcel; 
	}
		
}

?>