<?php

class ExceptionsTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException Exception
     */
    public function testMustThrowException()
    {
        throw new Exception("Error", 1);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionCode 20
     */
    public function testMustThrowExceptionCode20()
    {
        throw new Exception("Failure", 20);
    }

} 