<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once __DIR__ . '/../../db/DbConnect.php';

/**
 * Description of CreateReceiveOrderTest
 *
 * @author luu.nguyen
 */
class CreateReceiveOrderTest extends PHPUnit_Extensions_SeleniumTestCase {

    function setUp() {
        $this->setBrowser(TEST_BROWSER);
        $this->setBrowserUrl(TEST_URL);
        $this->object = new DbConnect();
    }

    function testCreateReceiveOrder() {
 
        $this->open("/index.html");
        sleep(2);
        $this->type("id=username-inputEl", "admin");
        $this->type("id=password-inputEl", "password");
        $this->click("id=sm3button-1010-btnEl");
        sleep(5);
        $this->click("id=tab-1034-btnInnerEl");
        $this->click("id=mnuNSGNonDemandListView-btnInnerEl");
        $this->type("id=txtShipment_NSGNonDemandListView-inputEl", "123456789");
        $this->keyPress("id=txtShipment_NSGNonDemandListView-inputEl", 13);
        $this->type("id=txtPalletID_NSGNonDemandListView-inputEl", "123456789");
        $this->keyPress("id=txtPalletID_NSGNonDemandListView-inputEl", 13);
        
        //getCaseId
        $this->type("id=txtCaseID_NSGNonDemandListView-inputEl", "NNDSG500G0000142");
        $this->keyPress("id=txtCaseID_NSGNonDemandListView-inputEl", 13);
        $this->type("id=txtPN_NSGNonDemandListView-inputEl", "SG500GB-BLACK");
        $this->keyPress("id=txtPN_NSGNonDemandListView-inputEl", 13);
        $this->type("id=txtCOO_NSGNonDemandListView-inputEl", "SG500GB-BLACK");
        $this->keyPress("id=txtCOO_NSGNonDemandListView-inputEl", 13);
        $this->type("id=txtSN_NSGNonDemandListView-inputEl", "dsdadsf3");
        $this->keyPress("id=txtSN_NSGNonDemandListView-inputEl", 13);
        $this->click("id=btnNSGNonDemandPost-btnEl");

    }

}

?>