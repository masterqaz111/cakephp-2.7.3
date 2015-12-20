<?php
/**
 * Prisoner Fixture
 */
class PrisonerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'details' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'filename' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'ethny_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'id' => '6',
			'name' => 'Mathieu',
			'number' => '3545342',
			'details' => 'Solitaire',
			'user_id' => '12',
			'category_id' => '3',
			'created' => '2015-10-07',
			'modified' => '2015-10-07',
			'filename' => null,
			'ethny_id' => '1'
		),
		array(
			'id' => '7',
			'name' => 'Bob',
			'number' => '48457345',
			'details' => 'Être 2 gardiens lors de déplacement.',
			'user_id' => '12',
			'category_id' => '2',
			'created' => '2015-10-07',
			'modified' => '2015-10-07',
			'filename' => null,
			'ethny_id' => '1'
		),
		array(
			'id' => '8',
			'name' => 'sdfsdf',
			'number' => '5',
			'details' => 'dfsdfsdf',
			'user_id' => '10',
			'category_id' => '3',
			'created' => '2015-11-06',
			'modified' => '2015-11-07',
			'filename' => 'uploads/Penguins.jpg',
			'ethny_id' => '1'
		),
		array(
			'id' => '9',
			'name' => 'Anthony',
			'number' => '2147483647',
			'details' => 'dfsdfsdfsdfsdfds',
			'user_id' => '10',
			'category_id' => '2',
			'created' => '2015-11-09',
			'modified' => '2015-11-10',
			'filename' => 'uploads/Tulips.jpg',
			'ethny_id' => '5'
		),
		array(
			'id' => '10',
			'name' => 'youri',
			'number' => '456',
			'details' => 'gros',
			'user_id' => '10',
			'category_id' => '2',
			'created' => '2015-11-12',
			'modified' => '2015-11-12',
			'filename' => 'uploads/Penguins.jpg',
			'ethny_id' => '4'
		),
	);

}
