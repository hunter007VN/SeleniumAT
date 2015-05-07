<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

/**
 * Description of ExportExcelTest
 *
 * @author luu.nguyen
 */
class ExportExcelTest extends PHPUnit_Extensions_SeleniumTestCase {

    function setUp() {
        $this->setBrowser("*firefox");
        $this->setBrowserUrl("http://localhost/");
    }

    function testMyTestCase() {
        $this->open("/");
    }
    
     public function exportWeeklyReportToExcelAction(){
            try{
                require_once '../src/Smproc3/Core/DataBundle/Lib/PHPExcel.php';
		require_once '../src/Smproc3/Core/DataBundle/Lib/PHPExcel/IOFactory.php';
                $request 	= $this->get('request');
                 $searchparam	= array();
                 if($request->query->get('cbWeeklyWebsite')) {
			$searchparam['cbWebsite']	= $request->query->get('cbWeeklyWebsite');
                  }
                  if($request->query->get('weekly_fromdate')) {
			$fromdate	= substr($request->query->get('weekly_fromdate'), 0, 10);
		  }
                  if($request->query->get('weekly_todate')) {
			$todate         = substr($request->query->get('weekly_todate'), 0, 10);
		  }
		  if($request->query->get('cbWeeklyShowBy')) {
			$searchparam['cbWeeklyShowBy']	= $request->query->get('cbWeeklyShowBy');
		  }
                   if($request->query->get('sort')) {
                            $sortdata	= json_decode($request->query->get('sort'));
                            $searchparam['sort']	= $sortdata[0];
                    }
                   if(isset($fromdate) || isset ($todate)){
                       if(isset($fromdate))
                            $searchparam["fromdate"]    = DateTimeUtility::convertDatetime($fromdate." 00:00:00", $this->get('request')->getSession()->get(AuthenticationProvider::CLIENT_TIMEZONE), date('O'));
                       if(isset ($todate))
                            $searchparam['todate']      = DateTimeUtility::convertDatetime($todate." 23:59:59", $this->get('request')->getSession()->get(AuthenticationProvider::CLIENT_TIMEZONE), date('O'));
                    }
                    else{
                        $clientTime = DateTimeUtility::convertDatetime(date('Y-m-d H:i:s'), date('O'), $this->get('request')->getSession()->get(AuthenticationProvider::CLIENT_TIMEZONE));
                        $clientDate = substr($clientTime, 0, 10);
                        $weekDate = UtilityBiz::getWeekDate($clientDate);
                        $searchparam["fromdate"]    = DateTimeUtility::convertDatetime($weekDate['startdate'].' 00:00:00', $this->get('request')->getSession()->get(AuthenticationProvider::CLIENT_TIMEZONE), date('O'));;
                        $searchparam['todate']      = DateTimeUtility::convertDatetime($weekDate['enddate'].' 23.59.59', $this->get('request')->getSession()->get(AuthenticationProvider::CLIENT_TIMEZONE), date('O'));
                    }
                    $minuteTimeZone = DateTimeUtility::getMinutesBetweenTimeZones($this->get('request')->getSession()->get(AuthenticationProvider::CLIENT_TIMEZONE), date('O'));
                    $searchparam['minutedistance'] = (integer)$minuteTimeZone;
                  DataUtility::setEntityManager($this->get('doctrine.orm.entity_manager'));
                  if(isset($searchparam['cbWeeklyShowBy']) && $searchparam['cbWeeklyShowBy'] ==2){
                      $data	=	ReportBiz::getWeeklyReportQuantity($searchparam, $export = true);
			$objPHPExcel = new \PHPExcel();
			//set header title
                        $arrTitle = array(0=>array('title'=>"WEEKLY REPORT"));
                        $arrIndexTitle = array('title');
                        ExcelUtility::addData2Sheet($arrTitle, $objPHPExcel, $arrIndexTitle, null, 1, 'A', 0);

                        //array index column
                        $arrHeader = array(0=>array('period'=>'Period','percent'=>'Percent', 'quantity'=> 'Quantity', 'totalamount'=>'Total'));
                        $arrIndexs = array('period', 'percent', 'quantity', 'totalamount');
			ExcelUtility::addData2Sheet($arrHeader, $objPHPExcel, $arrIndexs, null, 3, 'A', 0);

			$arrTypeFormats = array(ExcelUtility::FORMAT_STRING, ExcelUtility::FORMAT_STRING, ExcelUtility::FORMAT_INT, ExcelUtility::FORMAT_DOUBLE);
			ExcelUtility::addData2Sheet($data, $objPHPExcel, $arrIndexs, $arrTypeFormats, 4, 'A', 0);

			$objPHPExcel->setActiveSheetIndex(0);
                        ExcelUtility::mergRange($objPHPExcel, 'A1:D1', ExcelUtility::HORIZONTAL_CENTER, ExcelUtility::VERTICAL_CENTER);
                        ExcelUtility::setBold($objPHPExcel, 4, 'A', 3);
                        for($i = 'A'; $i <= 'D'; $i++){
                             ExcelUtility::setColWidth($objPHPExcel, 20, $i);
                        }
			//export file excel to client
			ExcelUtility::export2Excel($objPHPExcel, 'Excel2007','Weekly_Report_'.date("yMdhis").'.xlsx');//if excel 2003, we use 'Excel5'
			return new Response('');
                  }else{
                      $data	=	ReportBiz::getWeeklyReport($searchparam,$export = true);
                      $objPHPExcel = new \PHPExcel();
			// set Title
                        $arrTitle = array(0=>array('title'=>"WEEKLY REPORT"));
                        $arrIndexTitle = array('title');
                        ExcelUtility::addData2Sheet($arrTitle, $objPHPExcel, $arrIndexTitle, null, 1, 'A', 0);

			//array index column
                        $arrHeader = array(0=>array('period'=>'Period','orders'=>'Number of Orders','items'=>'Items Ordered', 'subtotal'=> 'Subtotal', 'taxamount'=>'Tax', 'shipamount'=>'Shipping cost', 'totalamount'=>'Total amount'));
			$arrIndexs = array('period', 'orders', 'items', 'subtotal', 'taxamount', 'shipamount', 'totalamount');
			ExcelUtility::addData2Sheet($arrHeader, $objPHPExcel, $arrIndexs, null, 3, 'A', 0);

			$arrTypeFormats = array(ExcelUtility::FORMAT_STRING, ExcelUtility::FORMAT_INT, ExcelUtility::FORMAT_DOUBLE, ExcelUtility::FORMAT_DOUBLE, ExcelUtility::FORMAT_DOUBLE, ExcelUtility::FORMAT_DOUBLE);
			ExcelUtility::addData2Sheet($data, $objPHPExcel, $arrIndexs, $arrTypeFormats, 4, 'A', 0);
                        ExcelUtility::mergRange($objPHPExcel, 'A1:G1', ExcelUtility::HORIZONTAL_CENTER, ExcelUtility::VERTICAL_CENTER);
                        ExcelUtility::setBold($objPHPExcel, 7, 'A', 3);
                        for($i = 'A'; $i <= 'G'; $i++){
                             ExcelUtility::setColWidth($objPHPExcel, 20, $i);
                        }
			$objPHPExcel->setActiveSheetIndex(0);
			//export file excel to client
			ExcelUtility::export2Excel($objPHPExcel, 'Excel2007','Weekly_Report_'.date("yMdhis").'.xlsx');//if excel 2003, we use 'Excel5'
			return new Response('');
                  }
            }catch (\Exception $ex){
                $resp = new ServerResponse();
                $resp->addErrorInfo("System", array("key"=>$ex->getMessage()));
       //         $resp->addErrorInfo("System", $ex->getMessage());
                return new Response(json_encode($resp));
            }
        }

}

?>