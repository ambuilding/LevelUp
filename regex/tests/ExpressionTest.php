<?php

use PHPUnit\Framework\TestCase;

class ExpressionTest extends TestCase
{
    function test_it_finds_a_string()
    {
        $regex = Expression::make()->find('www');
        //$this->assertRegExp((string)$regex, 'www');
        $this->assertTrue($regex->test('www'));

        $regex = Expression::make()->then('www');
        $this->assertTrue($regex->test('www'));
    }

    function test_it_checks_for_anything()
    {
        $regex = Expression::make()->anything();
        //$this->assertRegExp($regex->__toString(), 'foo');
        //$this->assertTrue(!! preg_match($regex, 'foo'));
        $this->assertTrue($regex->test('foo'));
    }

    function test_it_maybe_have_a_value()
    {
		$regex = Expression::make()->maybe('http');
        $this->assertTrue($regex->test('http'));
        $this->assertTrue($regex->test(''));
    }

    function test_it_can_chain_method_calls()
    {
    	$regex = Expression::make()->find('www')->maybe('.')->then('google');
        $this->assertTrue($regex->test('www.google'));
        $this->assertFalse($regex->test('wwwXgoogle'));
    }

    function test_it_can_exclude_values()
    {
    	$regex = Expression::make()
    		->find('foo')
    		->anythingBut('bar')
    		->then('biz');

    	$this->assertTrue($regex->test('foobazbiz'));
        $this->assertFalse($regex->test('foobarbiz'));
    }
}
