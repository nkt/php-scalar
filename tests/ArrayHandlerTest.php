<?php

namespace Nkt\Test;

class ArrayHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testCount()
    {
        $arr = ['foo'];
        $this->assertEquals(count($arr), $arr->count());
    }

    public function testJoin()
    {
        $arr = ['hello', 'world'];
        $this->assertEquals('hello world', $arr->join(' '));
    }
}
