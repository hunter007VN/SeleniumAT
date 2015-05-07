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
        $arrExcelData = $this->object->readExcel2Array(TEST_EXCEL_FILE_PATH4);
        $arrData = $arrExcelData[0];
        $countRealCol = ExcelUtility::countRealColumnsHeader($arrData);
        $countRealRow = ExcelUtility::countRealRows($arrData, $countRealCol);
        $arrSubArr = ExcelUtility::getSubArray($arrData, 1, $countRealRow, 0, $countRealCol);
////        $arrIndex = $arrData[0];
////        convert index to array			
//        $arrResult = ExcelUtility::mapExcelArrWithDataField($arrSubArr, $arrIndex);
        for ($f = 0; $f < $countRealRow - 1; $f++) {
            $actual0[] = $arrSubArr[$f][0];
            $actual1[] = $arrSubArr[$f][1];
            $actual2[] = $arrSubArr[$f][2];
            $actual3[] = $arrSubArr[$f][3];
            $actual4[] = $arrSubArr[$f][4];
            $actual5[] = $arrSubArr[$f][5];
        }

        $this->open("/");
        sleep(2);
        $this->type("id=textfield-1009-inputEl", "admin");
        $this->type("id=textfield-1010-inputEl", "password");
        $this->click("id=sm3button-1014-btnIconEl");
        sleep(5);
        $this->click("//span[contains(text(),'Administrator')]");
        $this->click("//span[contains(text(),'User')]");
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
            sleep(5);
            // print_r($Tagsn); die;
            // $this->focus("name=Accountname");
            // $this->type("//html/body/div[12]/@name=Accountname", 'asadadad');
            //$html= $this->getAllWindowIds();
            //$fields = $this->getAllFields("//html/body/div[12]");
            //$fields2 = $this->getSelectOptions();
            //print_r($fields); die;
            //$this->type("id=$fields[0]", $Tagsn);
//            for ($k = 10; $k < 12; $k++){
//             $flag=$this->getText("//html/body/div[$k]/div[2]/span/div/div/span/div/table/tbody/tr/td[2]/input");
//             if ($flag ==''){
//                 $this->type("//html/body/div[$k]/div[2]/span/div/div/span/div/table/tbody/tr/td[2]/input", $Tagsn);
//                 break;
//             }
//            }
            if  ($j==0){
                
                $this->check();
                
                //$this->type("//html/body/div[10]/div[2]/span/div/div/span/div/table/tbody/tr/td[2]/input", $Tagsn);
                sleep(5);
            }
            elseif($j==1 || $j==2 || $j==3  )
            {
                 sleep(5);
                 //$this->type("//html/body/div[11]/div[2]/span/div/div/span/div/table/tbody/tr/td[2]/input", $Tagsn);
            }else{
                $this->type("//html/body/div[12]/div[2]/span/div/div/span/div/table/tbody/tr/td[2]/input", $Tagsn);
            }
            
             
            //print_r($flag); die;
           // $this->type("//html/body/div[10]/div[2]/span/div/div/span/div/table/tbody/tr/td[2]/input", $Tagsn);
            $this->type("name=Hashedpassword", $Cciso);
            $this->type("name=ConfirmHashpassword", $Model);
            $this->type("name=Fullname", $Partno);
            $this->type("name=Email", $Ibmfru);
            $this->click("name=Roleid");
            $this->click("//ul/li[contains(text(),'Super User')]");
            //$this->click("id=$fields[5],$Ibmmachine)]");
            $this->click("//span[contains(text(),'Save')]");
            sleep(2);
            $this->click("//span[contains(text(),'OK')]");
            sleep(2);
        }
    }

}

?>