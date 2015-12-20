<?php
App::uses('AppController', 'Controller');
/**
 * Offences Controller
 *
 * @property Offence $Offence
 * @property PaginatorComponent $Paginator
 */
class OffencesController extends AppController {

    public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
     $this->Auth->allow('index','view');
}
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash','Session');

      
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Offence->recursive = 0;
		$this->set('offences', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Offence->exists($id)) {
			throw new NotFoundException(__('Invalid offence'));
		}
                $this->Offence->recursive = 3;
		$options = array('conditions' => array('Offence.' . $this->Offence->primaryKey => $id));
		$this->set('offence', $this->Offence->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Offence->create();
			if ($this->Offence->save($this->request->data)) {
				$this->Session->setFlash(__('The offence has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The offence could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$prisoners = $this->Offence->Prisoner->find('list');
		$this->set(compact('prisoners'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Offence->id = $id;
		if (!$this->Offence->exists($id)) {
			throw new NotFoundException(__('Invalid offence'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Offence->save($this->request->data)) {
				$this->Session->setFlash(__('The offence has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The offence could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Offence.' . $this->Offence->primaryKey => $id));
			$this->request->data = $this->Offence->find('first', $options);
		}
		$prisoners = $this->Offence->Prisoner->find('list');
		$this->set(compact('prisoners'));
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
		$this->Offence->id = $id;
		if (!$this->Offence->exists()) {
			throw new NotFoundException(__('Invalid offence'));
		}
		if ($this->Offence->delete()) {
			$this->Session->setFlash(__('Offence deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Offence was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
        
          public function isAuthorized($user) {
        if (isset($user['role']) && ($user['role'] === 'admin' || $user['role'] === 'super-users')) {
           if (in_array($this->action, array('add','edit', 'delete'))) {
            return true;
        }
        }
        

        return parent::isAuthorized($user);
    }
}

