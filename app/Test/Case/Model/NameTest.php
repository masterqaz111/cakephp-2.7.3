<?php
App::uses('Name', 'Model');

/**
 * Name Test Case
 */
class NameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.name'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Name = ClassRegistry::init('Name');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Name);

		parent::tearDown();
	}
        
        /**
 * testGetTitleNames method
 *
 * @return void
 */
	public function testGetTitleNames() {
            $testGetTitleNames = $this->Name->getTitleNames("D");
            $this->assertEqual($testGetTitleNames, array("1" => "David","2" => "Dylan"));
	}

}
