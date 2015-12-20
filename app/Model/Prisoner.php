<?php
App::uses('AppModel', 'Model');
/**
 * Prisoner Model
 *
 * @property User $User
 * @property Category $Category
 * @property Ethny $Ethny
 * @property Comment $Comment
 * @property Offence $Offence
 */
class Prisoner extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'details' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
                            )
			),
                    'filename' => array(
                           // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
            'uploadError' => array(
                'rule' => 'uploadError',
                'message' => 'Something went wrong with the file upload',
                'allowEmpty' => TRUE,
            ),
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
            'mimeType' => array(
                'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
                'message' => 'Invalid file, only images allowed',
                'allowEmpty' => TRUE,
            ),
           'filesize' => array(
                'rule' => array('filesize', '<=', '1MB'),
                'message' => 'Article image must be less then 1MB',
                'allowEmpty' => TRUE,
            ),
            // custom callback to deal with the file upload
            'processImageUpload' => array(
                'rule' => 'processImageUpload',
                'message' => 'Something went wrong processing your file',
                'allowEmpty' => TRUE,
            ),
		
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ethny' => array(
			'className' => 'Ethny',
			'foreignKey' => 'ethny_id',
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
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'prisoner_id',
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


        /**
 * Upload Directory relative to WWW_ROOT
 * @param string
 */

/**
 * Process the Upload
 * @param array $check
 * @return boolean
 */
  /**
 * Process the Upload
 * @param array $check
 * @return boolean
 */
public function processImageUpload($check=array()) {
//    debug($check); die();
        // deal with uploaded file
        if (!empty($check['filename']['tmp_name'])) {

                // check file is uploaded
                if (!is_uploaded_file($check['filename']['tmp_name'])) {
                        return FALSE;
                }

                // build full filename
                $filename = WWW_ROOT . 'img' . DS . 'uploads'. DS . $check['filename']['name'];

                // @todo check for duplicate filename

                // try moving file
                if (!move_uploaded_file($check['filename']['tmp_name'], $filename)) {
                        return FALSE;

                // file successfully uploaded
                } else {
                        // save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
                        $this->data[$this->alias]['filename'] = 'uploads' . '/' . $check['filename']['name'];
                }
        }

        return TRUE;
}
        /**
 * Before Validation
 * @param array $options
 * @return boolean
 */
public function beforeValidate($options = array()) {
        // ignore empty file - causes issues with form validation when file is empty and optional
        if (!empty($this->data[$this->alias]['filename']['error']) && $this->data[$this->alias]['filename']['error']==4 && $this->data[$this->alias]['filename']['size']==0) {
                unset($this->data[$this->alias]['filename']);
        }

        parent::beforeValidate($options);
}

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Offence' => array(
			'className' => 'Offence',
			'joinTable' => 'prisoners_offences',
			'foreignKey' => 'prisoner_id',
			'associationForeignKey' => 'offence_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

        
        public function isOwnedBy($prisoner, $user) {
    return $this->field('id', array('id' => $prisoner, 'user_id' => $user)) !== false;
}
}