<?php
/**
 * Created by PhpStorm.
 * User: joey.rivera
 * Date: 5/30/15
 * Time: 5:14 PM
 */

require 'Calc.php';

class CalcTest extends PHPUnit_Framework_TestCase
{
	protected $calc;

	public function setUp()
	{
		$this->calc = new Calc();
	}

	public function tearDown()
	{
		$this->calc = null;
	}

	public function testAddition()
	{
		$value = $this->calc->add(2, 2);

		$this->assertEquals(4, $value);
	}

	public function testAdditionDecimal()
	{
		$value = $this->calc->add(1.1, 2.2);

		$this->assertEquals(3.3, $value);
	}

	/**
	 * @expectedException Exception
	 */
	public function testAdditionException()
	{
		$this->calc->add(4, "asdfasdf");
	}

	/**
	 * expectedException Exception
	 */
	public function testAdditionHex()
	{
		//$this->calc->add(3, 0x539);
	}
}