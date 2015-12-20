<?php

App::uses('AppController', 'Controller');

class EthniesController extends AppController {

    public function getByCategory() {
        $sex_id = $this->request->data['Prisoner']['sex_id'];

        $ethnies = $this->Ethny->find('list', array(
            'conditions' => array('Ethny.sex_id' => $sex_id),
            'recursive' => -1
        ));

        $this->set('ethnies', $ethnies);
        $this->layout = 'ajax';
    }
    
    public function beforeFilter(){
        $this->Auth->allow('getByCategory');
    }

}
