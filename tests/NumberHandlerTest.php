<?php

namespace Nkt\Test;

class NumberHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testCos()
    {
        $num = 1;
        $this->assertEquals(cos($num), $num->cos($num));
    }
}
