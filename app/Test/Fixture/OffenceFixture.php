<?php
/**
 * Offence Fixture
 */
class OffenceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'id' => '3',
			'name' => 'Vol',
			'description' => 'S\'approprier furtivement ou par la force le bien d\'autrui.'
		),
		array(
			'id' => '4',
			'name' => 'Meurtre',
			'description' => 'Fait de tuer volontairement quelqu\'un.'
		),
		array(
			'id' => '5',
			'name' => 'Viol',
			'description' => 'Rapport sexuel imposé à quelqu\'un par la violence, obtenu par la contrainte, qui constitue pénalement un crime.'
		),
	);

}
