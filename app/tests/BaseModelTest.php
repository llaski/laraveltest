<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

class BaseModelTest extends TestCase
{
	protected $model;

	public function setUp()
	{
		parent::setUp();

		$this->model = $model = new BaseModel;
		$model::$rules = ['title' => 'required'];
	}

	public function testReturnsTrueIfValidationPasses()
	{
		Validator::shouldReceive('make')->once()->andReturn(
			Mockery::mock(['passes' => true])
		);

		$this->model->title = 'Foo Title';
		$result = $this->model->validate();

		$this->assertTrue($result);
	}

	public function testSetsErrorsOnObjectIfValidationFails()
	{
		Validator::shouldReceive('make')->once()->andReturn(
			Mockery::mock(['passes' => false, 'messages' => 'messages'])
		);

		$result = $this->model->validate();


		$this->assertFalse($result);
		$this->assertEquals('messages', $this->model->errors);
	}
}