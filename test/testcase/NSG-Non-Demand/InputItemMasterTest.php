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
        $this->setBrowserUrl(TEST_URL);
        $this->object = new ExcelUtility();
    }

    function testMyTestCase() {

        ini_set('memory_limit', '-1');
        $arrExcelData = $this->object->readExcel2Array(TEST_EXCEL_FILE_PATH);
        $arrData = $arrExcelData[0];
        $countRealCol = ExcelUtility::countRealColumnsHeader($arrData);
        $countRealRow = ExcelUtility::countRealRows($arrData, $countRealCol);
        $arrSubArr = ExcelUtility::getSubArray($arrData, 1, $countRealRow, 0, $countRealCol);
//        $arrIndex = $arrData[0];
//        convert index to array			
//        $arrResult = ExcelUtility::mapExcelArrWithDataField($arrSubArr, $arrIndex);
        for ($j = 0; $j < $countRealRow - 1; $j++) {
            $actual[] = $arrSubArr[$j][3];
        }
//        print_r($actual);
        $temp = array_unique($actual);
        $arrtemp = array_values($temp);
        
//         var_dump($arrtemp);
//        for ($j = 0; $j < count($arrtemp); $j++) {
//            $value = $arrtemp[$j];
//            var_dump($value);
//        }
        
        $this->open("/index.html");
        sleep(2);
        $this->type("id=username-inputEl", "nondemandm");
        $this->type("id=password-inputEl", "nondemandm");
        $this->click("id=sm3button-1010-btnEl");
        sleep(7);
        $this->click("id=mnuItemmasterListView-btnEl");

        for ($j = 0; $j < count($arrtemp); $j++) {
            $value = $arrtemp[$j];
            $this->click("id=btnItemmasterAdd");
            $this->type("id=partno-inputEl", "$value");
            $this->type("id=itemdesc-inputEl", "$value");
            $this->type("id=typeid-inputEl", "HDD");
            $this->keyPress("id=typeid-inputEl", 13);
            $this->type("id=minqty-inputEl", "5");

            $this->click("//span[contains(text(),'Save')]");
            sleep(2);
            $this->click("//span[contains(text(),'OK')]");
        }
        
    }

}

?>