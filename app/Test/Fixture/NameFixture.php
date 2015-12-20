<?php
/**
 * Name Fixture
 */
class NameFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'id' => '36',
			'name' => 'Adam',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '37',
			'name' => 'Alex',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '38',
			'name' => 'Alexandre',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '39',
			'name' => 'Alexis',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '40',
			'name' => 'Anthony',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '41',
			'name' => 'Antoine',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '42',
			'name' => 'benjamin',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '43',
			'name' => 'Cédric',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '44',
			'name' => 'Charles',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
		array(
			'id' => '45',
			'name' => 'Christopher',
			'created' => '2015-11-09 17:50:05',
			'modified' => '2015-11-09 17:50:05'
		),
	);

}
