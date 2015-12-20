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
        
        /**
 * testGetBrandsBySizes method
 *
 * @return void
 */
	public function testGetBrandsBySex() {
		$result = $this->Ethny->getBrandsBySex(1);
//            debug($result); die();
        $expected = array(
            (int) 2 => 'Afro-Américaine',
            (int) 3 => 'Afro-Américain',
            
        );
        $this->assertEquals($expected, $result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
	}

}
