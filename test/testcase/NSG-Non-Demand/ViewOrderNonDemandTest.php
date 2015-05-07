<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once __DIR__ . '/../../db/DbConnect.php';

/**
 * Description of ViewOrderNonDemandTest
 *
 * @author luu.nguyen
 */
class ViewOrderNonDemandTest extends PHPUnit_Extensions_SeleniumTestCase {

    function setUp() {
        $this->setBrowser(TEST_BROWSER);
        $this->setBrowserUrl(TEST_URL);
        $this->object = new DbConnect();
    }

    function testViewOrderNonDemandList() {

        $this->open("/index.html");
        sleep(2);
        $this->type("id=username-inputEl", "admin");
        $this->type("id=password-inputEl", "password");
        $this->click("id=sm3button-1010-btnEl");
        sleep(5);
        $this->click("//span[contains(text(),'Order')]");
        $this->click("//span[contains(text(),'Non-demand Order Listing')]");
        sleep(5);
        for ($index = 1; $index < 6; $index++) {
            $uioui = $this->getText("//html/body/div/div[3]/div/div/div/div[3]/div/table/tbody/tr[2]/td[$index]/div");
            var_dump($uioui);
        }
        //sleep();
    }

}

?>