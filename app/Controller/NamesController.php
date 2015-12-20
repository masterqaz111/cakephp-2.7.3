<?php

class NamesController extends AppController {

    public $layout = 'default';
    public $components = array('RequestHandler');

    public function index() {
        if ($this->request->is('ajax')) {
            $term = $this->request->query('term');
            $nameNames = $this->Name->getNameNames($term);
            $this->set(compact('nameNames'));
            $this->set('_serialize', 'nameNames');
        }
    }

}
