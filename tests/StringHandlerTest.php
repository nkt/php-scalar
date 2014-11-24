<?php

namespace Nkt\Test;

class StringHandlerTest extends \PHPUnit_Framework_TestCase
{

    public function testLength()
    {
        $str = 'test';
        $this->assertEquals(4, $str->length());
    }

    public function testConcat()
    {
        $str = 'test';
        $this->assertEquals('test1', $str->concat('1'));
    }

    public function testRepeat()
    {
        $str = '!';
        $this->assertEquals('!!!', $str->repeat(3));
    }

    public function testFormat()
    {
        $str = 'Hello, %s!';
        $this->assertEquals('Hello, nkt!', $str->format('nkt'));
    }

    public function testContains()
    {
        $str = 'foobar';
        $this->assertTrue($str->contains('ob'));
    }

    public function testReplace()
    {
        $str = 'Hello, nkt!';
        $this->assertEquals('Hello, php!', $str->replace('nkt', 'php', $count));
        $this->assertEquals(1, $count);
    }

    public function testReverse()
    {
        $str = 'foo';
        $this->assertEquals('oof', $str->reverse());
    }

    public function testTrim()
    {
        $str = "\t\n\rfoo ";
        $this->assertEquals('foo', $str->trim());
        $this->assertEquals('foo ', $str->trim("\t\n\r"));
    }

    public function testTrimLeft()
    {
        $str = "\t\n\rfoo ";
        $this->assertEquals('foo ', $str->trimLeft());
    }

    public function testTrimRight()
    {
        $str = "\t\n\rfoo ";
        $this->assertEquals("\t\n\rfoo", $str->trimRight());
    }

    public function testLowerCaseFirst()
    {
        $str = 'FOO';
        $this->assertEquals('fOO', $str->lowerCaseFirst());
    }

    public function testUpperCaseFirst()
    {
        $str = 'foo';
        $this->assertEquals('Foo', $str->upperCaseFirst());
    }

    public function testUpperCaseWords()
    {
        $str = 'hello, world';
        $this->assertEquals('Hello, World', $str->upperCaseWords());
    }

    public function testSplit()
    {
        $str = 'hello';
        $this->assertEquals(['hello'], $str->split());
        $this->assertEquals(['h', 'e', 'l', 'l', 'o'], $str->split(''));
        $this->assertEquals(['h', 'e', 'l'], $str->split('', 3));
        $this->assertEquals(['he', '', 'o'], $str->split('l'));
        $this->assertEquals(['he', 'lo'], $str->split('l', 2));
    }

    public function testHash()
    {
        $str = 'hello';
        $this->assertEquals(md5($str), $str->hash('md5'));
    }
}
