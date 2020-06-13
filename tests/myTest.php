<?php
require_once( "classes.php") ;

use PHPUnit\Framework\TestCase ;

class myClassTest extends TestCase
{
	protected static $myClass ;

	public static function setUpBeforeClass() : void
	{
		self::$myClass = new myCLass() ;
	}
	
	public function testCorrectAddition() : void
	{
		$this->assertEquals( 4, self::$myClass->addition( 2, 2)) ;
	}

	public static function tearDownAfterClass() : void
	{
		self::$myClass = null ;
	}
}

?>
