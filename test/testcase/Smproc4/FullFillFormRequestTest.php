<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once __DIR__ . '/../../lib/ExcelUtility.php';

/**
 * Description of SeleneseTestExcel
 *
 * @author luu.nguyen
 */
class ExcelTest extends PHPUnit_Extensions_SeleniumTestCase {

    protected $object;

    function setUp() {

        $this->setBrowser(TEST_BROWSER);
        $this->setBrowserUrl(TEST_URL_SM4);
        $this->object = new ExcelUtility();
    }

    function testMyTestCase() {

        ini_set('memory_limit', '-1');
        $arrExcelData = $this->object->readExcel2Array(TEST_EXCEL_FILE_PATH3);
        $arrData = $arrExcelData[0];
        $countRealCol = ExcelUtility::countRealColumnsHeader($arrData);
        $countRealRow = ExcelUtility::countRealRows($arrData, $countRealCol);
        $arrSubArr = ExcelUtility::getSubArray($arrData, 1, $countRealRow, 0, $countRealCol);
////        $arrIndex = $arrData[0];
////        convert index to array			
//        $arrResult = ExcelUtility::mapExcelArrWithDataField($arrSubArr, $arrIndex);
        for ($j = 0; $j < $countRealRow - 1; $j++) {
            $actual0[] = $arrSubArr[$j][0];
            $actual1[] = $arrSubArr[$j][1];
            $actual2[] = $arrSubArr[$j][2];
            $actual3[] = $arrSubArr[$j][3];
            $actual4[] = $arrSubArr[$j][4];
            $actual5[] = $arrSubArr[$j][5];
            $actual6[] = $arrSubArr[$j][6];
            $actual7[] = $arrSubArr[$j][7];
            $actual8[] = $arrSubArr[$j][8];
            $actual9[] = $arrSubArr[$j][9];
            $actual10[] = $arrSubArr[$j][10];
            $actual11[] = $arrSubArr[$j][11];
            $actual12[] = $arrSubArr[$j][12];
            $actual13[] = $arrSubArr[$j][13];
            $actual14[] = $arrSubArr[$j][14];
            $actual15[] = $arrSubArr[$j][15];
            $actual16[] = $arrSubArr[$j][16];
            $actual17[] = $arrSubArr[$j][17];
            $actual18[] = $arrSubArr[$j][18];
            $actual19[] = $arrSubArr[$j][19];
            $actual20[] = $arrSubArr[$j][20];
            $actual21[] = $arrSubArr[$j][21];
            $actual22[] = $arrSubArr[$j][22];
            $actual23[] = $arrSubArr[$j][23];
            $actual24[] = $arrSubArr[$j][24];
        }



//        $temp = array_unique($actual);
//        $arrtemp = array_values($temp);
//         var_dump($arrtemp);
//        $this->click("id=mnuNsgWipDirectOrderView-btnEl");
//
//        for ($j = 0; $j < count($arrtemp); $j++) {
//            $value = $arrtemp[$j];
//
//        }
//        $this->open("/index.html");
//        sleep(2);
//        $this->type("id=textfield-1009-inputEl", "admin");
//        $this->type("id=textfield-1010-inputEl", "password");
//        $this->click("id=sm3button-1014-btnIconEl");
//        sleep(4);
//        $this->click("id=tab-1026-btnInnerEl");
//        $this->click("id=mnuRMAListView-btnInnerEl");
//        sleep(3);
//        $this->click("//span[contains(text(),'Add')]");
//
//        for ($j = 0; $j < 50; $j++) {
//            $this->click("//span[contains(text(),'Add')]");
//            $this->type("name=Tagsn", "5TG17DF6");
//            $this->type("name=Cciso", "CCIS-O000001");
//            $this->type("name=Model", "MODEL-M");
//            $this->type("name=Partno", "9GE14D-070");
//            $this->type("name=Ibmfru", "field replaceable unit");
//            $this->type("name=Ibmmachine", "PC-IBM");
//            $this->type("name=Ccitechname", "HIGH-IBM");
//            $this->type("name=Createddate", "04/20/13");
//            $this->type("name=Requestdate", "04/21/13");
//            $this->type("name=Ccipor", "POR-0001");
//            $this->type("name=Vendor", "IBM");
//            $this->type("name=Orgpo", "PO-0001");
//            $this->type("name=Partdesc", "DESC-0001");
//            $this->type("name=Supplierorder", "SUPPLY-0001");
//            $this->type("name=Rmano", "PRGD00000016283");
//            $this->type("name=Srvdps", "DPS-0001");
//            $this->type("name=Replacementno", "REP-0001");
//            $this->type("name=Trackingno", "TRACK-0001");
//            $this->type("name=Replacementsn", "5TG17DF7");
//            $this->type("name=Closeddate", "04/22/13");
//            $this->type("name=Addtnotes", "NOTES-0001");
//            $this->type("name=Problistdetail", "DESC-005");
//            $this->type("name=Troublelistdetail", "TROUBLLE-0001");
//            $this->type("name=Cosmeticlistdetail", "DETAIL-0001");
//            $this->type("name=Cosmeticnotes", "NOTES-0005");
//        sleep(1);
//        $this->click("//span[contains(text(),'Save')]");
//        sleep(1);
//        $this->click("//span[contains(text(),'OK')]");
//        }
//    }            

        $this->open("/");
        sleep(2);
        $this->type("id=textfield-1009-inputEl", "admin");
        $this->type("id=textfield-1010-inputEl", "password");
        $this->click("id=sm3button-1014-btnIconEl");
        sleep(8);
        $this->click("//span[contains(text(),'CCI RMA')]");
        $this->click("//span[contains(text(),'Listing')]");
        sleep(3);
        
        for ($j = 0; $j < count($actual0); $j++) {
//        for ($j = 0; $j < 2; $j++) {
            $this->click("//span[contains(text(),'Add')]");
            $Tagsn = $actual0[$j];
            $Cciso = $actual1[$j];
            $Model = $actual2[$j];
            $Partno = $actual3[$j];
            $Ibmfru = $actual4[$j];
            $Ibmmachine = $actual5[$j];
            $Ccitechname = $actual6[$j];
            $Createddate = $actual7[$j];
            $Requestdate = $actual8[$j];
            $Ccipor = $actual9[$j];
            $Vendor = $actual10[$j];
            $Orgpo = $actual11[$j];
            $Partdesc = $actual12[$j];
            $Supplierorder = $actual13[$j];
            $Rmano = $actual14[$j];
            $Srvdps = $actual15[$j];
            $Replacementno = $actual16[$j];
            $Trackingno = $actual17[$j];
            $Replacementsn = $actual18[$j];
            $Closeddate = $actual19[$j];
            $Addtnotes = $actual20[$j];
            $Problistdetail = $actual21[$j];
            $Troublelistdetail = $actual22[$j];
            $Cosmeticlistdetail = $actual23[$j];
            $Cosmeticnotes = $actual24[$j];
            $this->type("name=Tagsn", $Tagsn);
            $this->type("name=Cciso", $Cciso);
            $this->type("name=Model", $Model);
            $this->type("name=Partno", $Partno);
            $this->type("name=Ibmfru", $Ibmfru);
            $this->type("name=Ibmmachine", $Ibmmachine);
            $this->type("name=Ccitechname", $Ccitechname);
            $this->type("name=Createddate", $Createddate);
            $this->type("name=Requestdate", $Requestdate);
            $this->type("name=Ccipor", $Ccipor);
            $this->type("name=Vendor", $Vendor);
            $this->type("name=Orgpo", $Orgpo);
            $this->type("name=Partdesc", $Partdesc);
            $this->type("name=Supplierorder", $Supplierorder);
            $this->type("name=Rmano", $Rmano);
            $this->type("name=Srvdps", $Srvdps);
            $this->type("name=Replacementno", $Replacementno);
            $this->type("name=Trackingno", $Trackingno);
            $this->type("name=Replacementsn", $Replacementsn);
            $this->type("name=Closeddate", $Closeddate);
            $this->type("name=Addtnotes", $Addtnotes);
            $this->type("name=Problistdetail", $Problistdetail);
            $this->type("name=Troublelistdetail", $Troublelistdetail);
            $this->type("name=Cosmeticlistdetail", $Cosmeticlistdetail);
            $this->type("name=Cosmeticnotes", $Cosmeticnotes);
            sleep(1);
            $this->click("//span[contains(text(),'Save')]");
            sleep(2);
            $this->click("//span[contains(text(),'OK')]");
            sleep(2);
        }
    }

}

?>