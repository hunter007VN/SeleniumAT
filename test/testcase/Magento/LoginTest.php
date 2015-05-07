<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

/**
 * Description of newSeleneseTest
 *
 * @author luu.nguyen
 */
class newSeleneseTest extends PHPUnit_Extensions_SeleniumTestCase {

    public function setUp() {
        $this->setBrowser(TEST_BROWSER);
        $this->setBrowserUrl(TEST_URL);
        $this->admin('log_in_to_admin', false);
        if ($this->_findCurrentPageFromUrl() != 'log_in_to_admin' && $this->controlIsPresent('link', 'log_out')) {
            $this->logoutAdminUser();
        }
        $this->validatePage('log_in_to_admin');
        $this->clickControl('link', 'forgot_password');
        if ($this->controlIsPresent('pageelement', 'captcha')) {
            $this->loginAdminUser();
            $this->navigate('system_configuration');
            $this->systemConfigurationHelper()->configure('disable_admin_captcha');
            $this->logoutAdminUser();
        }
    }

    /**
     * Login to Admin
     *
     * @test
     * @return array
     */
    public function testloginValidUser() {
        //Data
        $loginData = array('user_name' => $this->_configHelper->getDefaultLogin(),
            'password' => $this->_configHelper->getDefaultPassword());
        //Steps
        $this->adminUserHelper()->loginAdmin($loginData);
        //Verifying
        $this->assertTrue($this->checkCurrentPage('dashboard'), $this->getParsedMessages());
        $this->logoutAdminUser();

        return $loginData;
    }

}

?>