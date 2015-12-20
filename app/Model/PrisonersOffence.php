<?php
App::uses('AppModel', 'Model');
/**
 * PrisonersOffence Model
 *
 * @property Prisoner $Prisoner
 * @property Offence $Offence
 */
class PrisonersOffence extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Prisoner' => array(
			'className' => 'Prisoner',
			'foreignKey' => 'prisoner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Offence' => array(
			'className' => 'Offence',
			'foreignKey' => 'offence_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
