<?php
App::uses('Prisoner', 'Model');

/**
 * Prisoner Test Case
 */
class PrisonerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prisoner',
		'app.user',
		'app.category',
		'app.ethny',
		'app.sex',
		'app.comment',
		'app.offence',
		'app.prisoners_offence'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Prisoner = ClassRegistry::init('Prisoner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Prisoner);

		parent::tearDown();
	}
        
        /**
 * testIsOwnedBy method
 *
 * @return void
 */
	public function testIsOwnedByTrue() {
		$testIsOwnedBy = $this->Prisoner->IsOwnedBy(1,1);
                $this->assertTrue($testIsOwnedBy);
	}
        
        public function testIsOwnedByFalse() {
		$testIsOwnedBy = $this->Prisoner->IsOwnedBy(1,8);
                $this->assertFalse($testIsOwnedBy);
	}

}
