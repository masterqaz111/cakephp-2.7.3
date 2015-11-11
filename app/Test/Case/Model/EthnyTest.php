<?php
App::uses('Ethny', 'Model');

/**
 * Ethny Test Case
 */
class EthnyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ethny',
		'app.sex',
		'app.prisoner',
		'app.user',
		'app.category',
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
		$this->Ethny = ClassRegistry::init('Ethny');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ethny);

		parent::tearDown();
	}

}
