<?php
/**
 * PrisonersOffence Fixture
 */
class PrisonersOffenceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'prisoner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'offence_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'id' => '11',
			'prisoner_id' => '6',
			'offence_id' => '3'
		),
		array(
			'id' => '12',
			'prisoner_id' => '7',
			'offence_id' => '3'
		),
		array(
			'id' => '13',
			'prisoner_id' => '7',
			'offence_id' => '4'
		),
		array(
			'id' => '14',
			'prisoner_id' => '8',
			'offence_id' => '4'
		),
		array(
			'id' => '15',
			'prisoner_id' => '9',
			'offence_id' => '3'
		),
		array(
			'id' => '16',
			'prisoner_id' => '9',
			'offence_id' => '4'
		),
		array(
			'id' => '17',
			'prisoner_id' => '9',
			'offence_id' => '5'
		),
		array(
			'id' => '18',
			'prisoner_id' => '10',
			'offence_id' => '3'
		),
		array(
			'id' => '19',
			'prisoner_id' => '10',
			'offence_id' => '4'
		),
		array(
			'id' => '20',
			'prisoner_id' => '10',
			'offence_id' => '5'
		),
	);

}
