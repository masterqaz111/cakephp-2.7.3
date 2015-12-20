<?php
App::uses('AppModel', 'Model');
/**
 * Ethny Model
 *
 * @property Sex $Sex
 * @property Prisoner $Prisoner
 */
class Ethny extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sex' => array(
			'className' => 'Sex',
			'foreignKey' => 'sex_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Prisoner' => array(
			'className' => 'Prisoner',
			'foreignKey' => 'ethny_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
        public function getBrandsBySex($sex_id = null){
            return $this->find('list', array(
            'conditions' => array('Ethny.sex_id' => $sex_id),
            'recursive' => -1
        ));
        }

}
