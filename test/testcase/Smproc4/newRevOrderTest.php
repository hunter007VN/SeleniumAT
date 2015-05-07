<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once __DIR__ . '/../../lib/ExcelUtility.php';

/**
 * Description of newOrderTest
 *
 * @author luu.nguyen
 */
class newOrderTest extends PHPUnit_Extensions_SeleniumTestCase {

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
        }

        $this->open("/");
        sleep(3);
        $this->type("id=textfield-1009-inputEl", "admin");
        $this->type("id=textfield-1010-inputEl", "password");
        $this->click("id=sm3button-1014-btnIconEl");
        sleep(8);
        $this->click("//span[contains(text(),'Order')]");
        $this->click("//span[contains(text(),'Listing')]");
        sleep(3);


//        for ($j = 0; $j < count($actual0); $j++) {

        $this->click("//span[contains(text(),'Add')]");
//        $all = $this->getAllFields();
//        
//        $one = $all[2];
//        $two = $all[3];
//        $three = $all[4];
//        $four = $all[5];
//        $five = $all[6];
//        $six = $all[7];
        $this->click("name=Partnerid");
        $this->type("name=Partnerid", 'Part1');
//        $this->click("name=Receiving");
////            $this->keyPress("name=Partnerid", 13);
//
        $this->click("name=Carrierid");
        $this->type("name=Carrierid", 'ups');

        $this->click("name=Shipmethid");
        $this->type("name=Shipmethid", 'DHL');

        $this->click("name=Recvtypeid");
        $this->type("name=Recvtypeid", 'us');

        $this->click("name=Requesttypeid");
        $this->type("name=Requesttypeid", 'ss');

        $this->click("name=Requestdate");
        $this->type("name=Requestdate", '05/20/2013');

        $this->click("name=Commitid");
        $this->type("name=Commitid", 'COMMIT');

        $this->click("//span[contains(text(),'Add Order Details')]");

        $this->click("name=addOrderDetail");
        $this->type("name=addOrderDetail", 'SERIALIZABLE');
        
//        $this->click("//html/body/div[21]/div[2]/span/div/table/tbody/tr/td[2]/table/tbody/tr/td/input");
//        $this->type("//html/body/div[21]/div[2]/span/div/table/tbody/tr/td[2]/table/tbody/tr/td/input", 'SERIALIZABLE');
        
        $this->keyPress("name=addOrderDetail", 13);
        sleep(8);
        $this->click("//span[contains(text(),'Save')]");
//        $this->click("name=Receiving");
        //           $this->keyPress("name=Carrierid", 13);
        sleep(8);
//        }
//            $this->click("//div[@id=$one]/ul/li");
//            $this->click("id=ext-gen1910");
//        sleep(8);   
//            $this->click("//div[@id=$two]/ul/li");
//            $this->click("id=ext-gen1921");
//            $this->click("//div[@id=$three]/ul/li");
//            $this->click("id=combobox-1249-inputEl");
//            $this->click("//div[@id='boundlist-1322-listEl']/ul/li");
//            $this->click("id=ext-gen1914");
//            $this->click("//div[@id='boundlist-1324-listEl']/ul/li");
//            $this->click("id=ext-gen1906");
//            $this->click("//div[@id='boundlist-1326-listEl']/ul/li");
//        $this->open("/");
//        $this->click("id=sm3button-1156-btnIconEl");
//        $this->click("id=ext-gen1898");
//        $this->click("//div[@id='boundlist-1316-listEl']/ul/li");
//        $this->click("id=ext-gen1910");
//        $this->click("//div[@id='boundlist-1318-listEl']/ul/li");
//        $this->click("id=ext-gen1921");
//        $this->click("//div[@id='boundlist-1320-listEl']/ul/li");
//        $this->click("id=combobox-1249-inputEl");
//        $this->click("//div[@id='boundlist-1322-listEl']/ul/li");
//        $this->click("id=ext-gen1914");
//        $this->click("//div[@id='boundlist-1324-listEl']/ul/li");
//        $this->click("id=ext-gen1906");
//        $this->click("//div[@id='boundlist-1326-listEl']/ul/li");
//        $this->click("id=ext-gen1918");
//        $this->click("link=14");
//        $this->type("id=textfield-1257-inputEl", "aa");
//        $this->type("id=textfield-1260-inputEl", "aa");
//        $this->click("id=ext-gen1931");
//        $this->click("//div[@id='boundlist-1331-listEl']/ul/li");
//        $this->type("id=textfield-1266-inputEl", "1111111");
//        $this->type("id=textfield-1258-inputEl", "11@yahoo.com");
//        $this->type("id=textfield-1261-inputEl", "1");
//        $this->click("id=ext-gen1935");
//        $this->click("//div[@id='boundlist-1333-listEl']/ul/li");
//        $this->type("id=textfield-1267-inputEl", "1111111");
//        $this->type("id=textfield-1259-inputEl", "1111");
//        $this->type("id=textfield-1262-inputEl", "11111");
//        $this->click("id=ext-gen1939");
//        $this->click("//div[@id='boundlist-1335-listEl']/ul/li");
//        $this->click("id=button-1301-btnIconEl");
//        $this->click("id=ext-gen2046");
//        $this->click("//div[@id='boundlist-1340-listEl']/ul/li");
//        $this->click("id=ext-gen2046");
//        $this->click("css=li.x-boundlist-item.x-boundlist-item-over");
//        $this->click("id=ext-gen2046");
//        $this->click("css=li.x-boundlist-item.x-boundlist-item-over");
//        $this->click("id=tool-1339-toolEl");
//        $this->click("id=sm3button-1304-btnIconEl");
//        $this->click("id=button-1005-btnIconEl");
    }

}

?>