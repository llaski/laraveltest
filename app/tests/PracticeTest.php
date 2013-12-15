<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

use Way\Tests\Factory;

class PracticeTest extends TestCase {

	// use ModelHelpers;
	use Way\Tests\ModelHelpers;


	// public function testBuildsAnchorTag()
	// {
	// 	$actual = link_me_to('dogs/1', 'Show Dog');
	// 	$expect = "<a href='http://localhost/dogs/1'>Show Dog</a>";

	// 	$this->assertEquals($expect, $actual);
	// }

	// public function testAppliesAttributesUsingArray()
	// {
	// 	$actual = link_me_to('dogs/1', 'Show Dog', ['class' => 'button']);
	// 	$expect = "<a href='http://localhost/dogs/1' class=\"button\">Show Dog</a>";

	// 	$this->assertEquals($expect, $actual);
	// }
	// 
	public function testHashesPasswordWhenSet()
	{
		Hash::shouldReceive('make')->once()->andReturn('hashed');

		$author = new User;
		$author->password = 'foo';

		$this->assertEquals('hashed', $author->password);
	}

	public function testIsInvalidWithoutAName()
	{
		$user = Factory::user(['name' => null]);
		$this->assertNotValid($user);
	}

	public function testIsInvalidWithoutAnEmail()
	{
		$user = Factory::user(['name' => 'Joe', 'email' => 'Foo']);

		$this->assertNotValid($user);
	}

	public function testIsInvalidWithoutAUniqueEmail()
	{
		Factory::create('user', ['name' => 'Joe', 'email' => 'test@resolute.com']);

		$user = Factory::user(['name' => 'Joe', 'email' => 'Foo']);

		$this->assertNotValid($user);
	}
}