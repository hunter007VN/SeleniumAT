<?php
class NSG_WIP_Test extends PHPUnit_Framework_TestSuite
{

    public static function suite()
    {
        require_once 'OpenTest.php';
        $suite = new self('NSG_WIP');
        $suite->addTest(new PHPUnit_Framework_TestSuite('OpenTest'));
        return $suite;
    }

}
