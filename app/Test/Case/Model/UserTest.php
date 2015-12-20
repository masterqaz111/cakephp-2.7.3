<?php
App::uses('User', 'Model');
/**
 * User Test Case
 */
class UserTest extends CakeTestCase {
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
		$this->User = ClassRegistry::init('User');
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);
		parent::tearDown();
	}
        
        public function testValidationRoleInvalide() {
            $data = array(
                'User' => array(
                    'username' => 'Role Invalide',
                    'password' => 'Role Invalide',
                    'role' => ''
			)
		);
		// Attempt to save
		$result = $this->User->save($data);
		// Test save failed
		$this->assertFalse($result);
        }
        
        public function testValidationUsernameIsNotValide() {
            $data = array(
                'User' => array(
                    'username' => '%%%%',
                    'password' => 'password',
                    'role' => 'membre'
			)
		);
		// Attempt to save
		$result = $this->User->save($data);
		// Test save failed
		$this->assertFalse($result);
        }
        
        public function testValidationPasswordVide() {
            $data = array(
                'User' => array(
                    'username' => 'username',
                    'password' => '',
                    'role' => 'membre'
			)
		);
		// Attempt to save
		$result = $this->User->save($data);
		// Test save failed
		$this->assertFalse($result);
        }
}