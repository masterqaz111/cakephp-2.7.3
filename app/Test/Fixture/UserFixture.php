<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
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
			'id' => '10',
			'username' => 'admin',
			'password' => '$2a$10$EmDwJDM69tFzXCHZx1SYg.LAAaSPIA7nRZ3ZpYX9hu8srxE9AqusC',
			'role' => 'admin',
			'email' => 'admin@hotmail.com',
			'created' => '2015-10-07',
			'modified' => '2015-10-07',
			'active' => 1
		),
		array(
			'id' => '12',
			'username' => 'super',
			'password' => '$2a$10$Snsw5oKuOq7.5Mt0agdYb.fACoXnMKUvb.ySPjiYntBFaI5e8G0iq',
			'role' => 'super-users',
			'email' => 'super@hotmail.com',
			'created' => '2015-10-07',
			'modified' => '2015-10-07',
			'active' => 0
		),
		array(
			'id' => '13',
			'username' => 'membre',
			'password' => '$2a$10$EbVMfuu476PVOINJEYm/IOc.L5kblXnZir.lC8u9ZgeBpmywYvSIC',
			'role' => 'membre',
			'email' => 'membre@hotmail.com',
			'created' => '2015-10-07',
			'modified' => '2015-10-07',
			'active' => 0
		),
		array(
			'id' => '14',
			'username' => 'simon',
			'password' => '$2a$10$G151iOOSttv0lAxxdqUy7.5QuSAIQCwGYeUxzix74r0fDjEPZHlnq',
			'role' => 'admin',
			'email' => 'mathieu.dubreuil33@gmail.com',
			'created' => '2015-11-11',
			'modified' => '2015-11-11',
			'active' => 0
		),
		array(
			'id' => '15',
			'username' => 'malik',
			'password' => '$2a$10$oMJ5.6.l/o2C8hTdPSxNO.WvoT35JLQAGOdEyoyhiNRVR2UmJ9tq2',
			'role' => 'admin',
			'email' => 'mathieu.dubreuil33@gmail.com',
			'created' => '2015-11-11',
			'modified' => '2015-11-11',
			'active' => 0
		),
		array(
			'id' => '16',
			'username' => 'bobtest',
			'password' => '$2a$10$wwPD/.DtkOOu7g1P44YtpejZ5RTxpE5cdn1rJ8maulEC6bgnWvV7G',
			'role' => 'admin',
			'email' => 'mathieu.dubreuil33@gmail.com',
			'created' => '2015-11-11',
			'modified' => '2015-11-11',
			'active' => 1
		),
		array(
			'id' => '17',
			'username' => 'boby',
			'password' => '$2a$10$KhqkYZVlzpVZg6IyJJGj4.4mlmYYedPvRJCGY9LPQJ2FEFfz3g9xm',
			'role' => 'super-users',
			'email' => 'mathieu.dubreuil33@gmail.com',
			'created' => '2015-11-11',
			'modified' => '2015-11-11',
			'active' => 1
		),
		array(
			'id' => '23',
			'username' => 'ant',
			'password' => '$2a$10$bYxxSaAzl875P8t62bOvv.HToaNUSmkojQcsxwufP2LIRfjmtj.Ci',
			'role' => 'super-users',
			'email' => 'mathieu.dubreuil33@gmail.com',
			'created' => '2015-11-11',
			'modified' => '2015-11-11',
			'active' => 1
		),
	);

}
