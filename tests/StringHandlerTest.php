<?php

namespace Nkt\Test;

class StringHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testLength()
    {
        $str = 'test';
        $this->assertEquals(4, $str->length());
    }
}
