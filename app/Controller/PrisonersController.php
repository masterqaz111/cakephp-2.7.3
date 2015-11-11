<?php

App::uses('AppController', 'Controller');

/**
 * Prisoners Controller
 *
 * @property Prisoner $Prisoner
 * @property PaginatorComponent $Paginator
 */
class PrisonersController extends AppController {

    public $helpers = array('Js');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index', 'view');
    }

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Prisoner->recursive = 2;
        $this->set('prisoners', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Prisoner->exists($id)) {
            throw new NotFoundException(__('Invalid prisoner'));
        }
        $this->Prisoner->recursive = 2;
        $options = array('conditions' => array('Prisoner.' . $this->Prisoner->primaryKey => $id));
        $this->set('prisoner', $this->Prisoner->find('first', $options));

        $prisoner = $this->Prisoner->find('first', $options);
        $this->set('prisoner', $prisoner);
        $this->set('sex', $this->Prisoner->Ethny->Sex->find('first', array('conditions' => array('id' => $prisoner['Ethny']['sex_id']))));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Prisoner->create();
            $this->request->data['Prisoner']['user_id'] = $this->Auth->user('id');
            if ($this->Prisoner->save($this->request->data)) {
                $this->Session->setFlash(__('The prisoner has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The prisoner could not be saved. Please, try again.'), 'flash/error');
            }
        }
        $sexes = $this->Prisoner->Ethny->Sex->find('list');
        $ethnies = array('choisir sexe');
        $users = $this->Prisoner->User->find('list');
        $categories = $this->Prisoner->Category->find('list');
        $offences = $this->Prisoner->Offence->find('list');
        $this->set(compact('users', 'categories', 'offences', 'sexes', 'ethnies'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Prisoner->id = $id;
        if (!$this->Prisoner->exists($id)) {
            throw new NotFoundException(__('Invalid prisoner'));
        }
        $this->Prisoner->recursive = 2;
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Prisoner->save($this->request->data)) {
                $this->Session->setFlash(__('The prisoner has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The prisoner could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Prisoner.' . $this->Prisoner->primaryKey => $id));
            $this->request->data = $this->Prisoner->find('first', $options);
        }
        $sexes = $this->Prisoner->Ethny->Sex->find('list');



        $this->request->data['Prisoner']['sex_id'] = $this->request->data['Ethny']['sex_id'];
        if (isset($this->request->data['Ethny']['sex_id'])) {
            $ethnies = $this->Prisoner->Ethny->find('list', array('conditions' => array('sex_id' => $this->request->data['Ethny']['sex_id'])));
        } else {
            $ethnies = $this->Prisoner->Ethny->find('list', array('conditions' => array('sex_id' => 1)));
        }

        $users = $this->Prisoner->User->find('list');
        $categories = $this->Prisoner->Category->find('list');
        $offences = $this->Prisoner->Offence->find('list');
        $this->set(compact('users', 'categories', 'offences', 'sexes', 'ethnies'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Prisoner->id = $id;
        if (!$this->Prisoner->exists()) {
            throw new NotFoundException(__('Invalid prisoner'));
        }
        if ($this->Prisoner->delete()) {
            $this->Session->setFlash(__('Prisoner deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Prisoner was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }

    public function isAuthorized($user) {
        if (isset($user['role']) && ($user['role'] === 'admin' || $user['role'] === 'super-users')) {
            if (in_array($this->action, array('add', 'edit', 'delete'))) {
                return true;
            }
        }


        return parent::isAuthorized($user);
    }

}
