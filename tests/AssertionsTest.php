<?php

class AssertionsTest extends PHPUnit_Framework_TestCase {

    public function testAssertTrue()
    {
        $value = 10.99;
        $this->assertTrue(is_numeric($value), 'Message');
    }

    public function testAssertEqual()
    {
        $expected = '10';
        $this->assertEquals($expected, 5 + 5);
    }

    public function testAssertSame()
    {
        $expected = 10;
        $this->assertSame($expected, 5 + 5);
    }

    public function testAssertContains()
    {
        $fruits = ['Apple', 'Orange', 'Grapefruit'];
        $this->assertContains('Apple', $fruits);
    }

    public function testAssertInternalType()
    {
        $fruits = ['Apple', 'Orange', 'Grapefruit'];
        $this->assertInternalType('array', $fruits);
    }

    public function testAssertInstanceOf()
    {
        $date = new DateTime();
        $this->assertInstanceOf('DateTime', $date);
    }

} 