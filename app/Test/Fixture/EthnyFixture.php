<?php
/**
 * Ethny Fixture
 */
class EthnyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sex_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'sex_id' => '2',
			'name' => 'Afro-Américaine'
		),
		array(
			'id' => '2',
			'sex_id' => '2',
			'name' => 'Coréene'
		),
		array(
			'id' => '3',
			'sex_id' => '2',
			'name' => 'Galloise'
		),
		array(
			'id' => '4',
			'sex_id' => '3',
			'name' => 'Afro-Américain'
		),
		array(
			'id' => '5',
			'sex_id' => '3',
			'name' => 'Coréen'
		),
		array(
			'id' => '6',
			'sex_id' => '3',
			'name' => 'Gallois'
		),
		array(
			'id' => '10',
			'sex_id' => '2',
			'name' => 'Arabe'
		),
		array(
			'id' => '11',
			'sex_id' => '3',
			'name' => 'Arabe'
		),
	);

}
