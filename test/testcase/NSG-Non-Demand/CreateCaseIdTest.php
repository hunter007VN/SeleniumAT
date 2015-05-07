<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once __DIR__ . '/../../db/DbConnect.php';
require_once '/../../db/CasepartModel.class.php';
require_once '/../../db/ConfigModel.class.php';

/**
 * Description of CreateCaseId
 *
 * @author luu.nguyen
 */
class CreateCaseIdTest extends PHPUnit_Extensions_SeleniumTestCase {

    protected $object;

    function setUp() {

        $this->setBrowser(TEST_BROWSER);
        $this->setBrowserUrl(TEST_URL);
        $this->object = new DbConnect();
    }
    

     function testCreateCaseId() {
        $db = $this->object->connect();

      //before excute
         $sqlbefore = "select * from casepart where id = (select max(id) from casepart)";
         $cfgsql = "select cfgvalue  from config where cfgname = 'smproc3.caseid.count'";
        $resultbefore = CasepartModel::findBySql($db, $sqlbefore);
        $config = ConfigModel::findBySql($db, $cfgsql);
        for ($index = 0; $index < count($resultbefore); $index++) {
            $casecodebefore = $resultbefore[$index]->getCasecode();
            
            var_dump(substr($casecodebefore, -1));
        }
      //excute
      $this->open("/");
      sleep(2);
      $this->type("id=username-inputEl", "admin");
      $this->type("id=password-inputEl", "password");
      $this->click("//span[contains(text(),'Order')]");
      sleep(5);
      $this->click("id=tab-1034-btnEl]");
            sleep(5);
      $this->click("id=mnuNSGCreateCaseIDView-btnEl");
      sleep(2);
      $this->type("id=txtPNOfNSGCreateCaseID-inputEl", "SG500GB-BLACK");
      sleep(2);
      $this->click("id=btnCreateOfNSGCreateCaseID-btnEl");
      $this->waitForPopUp("", "30000");
      
      //after excute
        $sqlafter = "select * from casepart where id = (select max(id) from casepart)";
        $resultafter = CasepartModel::findBySql($db, $sqlafter);
        for ($index = 0; $index < count($resultafter); $index++) {
            $casecodeafter = $resultafter[$index]->getCasecode();
            var_dump(substr($casecodeafter, -1));
            $this->assertEquals(substr($casecodebefore, -3)+1, substr($casecodeafter, -3));
      } 

    }
    
    
}   


?>