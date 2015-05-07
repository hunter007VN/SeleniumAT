<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
require_once __DIR__ . '/../../lib/ExcelUtility.php';
require_once 'mink/vendor/facebook/php-webdriver/__init__.php';

/**
 * Description of SeleneseTestExcel
 *
 * @author luu.nguyen
 */
class WebDriverTest extends PHPUnit_Framework_TestCase {

    protected $_session;

    public function setUp() {
        parent::setUp();
        $web_driver = new WebDriver();
        $this->_session = $web_driver->session();
    }

    public function tearDown() {
        $this->_session->close();
        unset($this->_session);
        parent::tearDown();
    }

    public function test_mytest() {
        $this->_session->open('https://startingpage.com');
        $this->_session->element('id', 'pics')->click();
        echo $this->_session->element('id', 'pics')->text();
        $this->assertSame('https://startpage.com/', $this->_session->url()
        );
    }

}

?>