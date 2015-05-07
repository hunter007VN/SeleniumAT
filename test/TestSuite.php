<?php
class TestSuite extends PHPUnit_Framework_TestSuite
{

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('All tests');

        require_once 'testcase/NSG-Non-Demand/Test.php';
        $suite->addTestSuite('NSG_Non_Demand_Test');

        require_once 'testcase/NSG-WIP/Test.php';
        $suite->addTestSuite('NSG_WIP_Test');
        return $suite;
    }
}
