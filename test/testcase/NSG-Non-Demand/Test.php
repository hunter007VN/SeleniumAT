<?php
class NSG_Non_Demand_Test extends PHPUnit_Extensions_SeleniumTestSuite
{

    public static function suite()
    {
        require_once 'CreateCaseIdTest.php';

        $suite = new self('NSG-Non-Demand');
        $suite->addTest(new PHPUnit_Extensions_SeleniumTestSuite('CreateCaseIdTest'));
        return $suite;
    }

}
