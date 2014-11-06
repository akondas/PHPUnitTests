<?php

class ExampleTest extends PHPUnit_Framework_TestCase {

    public function testGreetings()
    {
        $greetings = 'Hello World';
        $this->assertEquals('Hello World', $greetings);
    }

} 