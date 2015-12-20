<?php
App::uses('AppController', 'Controller');
/**
 * PrisonersOffences Controller
 *
 * @property PrisonersOffence $PrisonersOffence
 * @property PaginatorComponent $Paginator
 */
class PrisonersOffencesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PrisonersOffence->recursive = 0;
		$this->set('prisonersOffences', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PrisonersOffence->exists($id)) {
			throw new NotFoundException(__('Invalid prisoners offence'));
		}
		$options = array('conditions' => array('PrisonersOffence.' . $this->PrisonersOffence->primaryKey => $id));
		$this->set('prisonersOffence', $this->PrisonersOffence->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PrisonersOffence->create();
			if ($this->PrisonersOffence->save($this->request->data)) {
				$this->Session->setFlash(__('The prisoners offence has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prisoners offence could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$prisoners = $this->PrisonersOffence->Prisoner->find('list');
		$offences = $this->PrisonersOffence->Offence->find('list');
		$this->set(compact('prisoners', 'offences'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->PrisonersOffence->id = $id;
		if (!$this->PrisonersOffence->exists($id)) {
			throw new NotFoundException(__('Invalid prisoners offence'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PrisonersOffence->save($this->request->data)) {
				$this->Session->setFlash(__('The prisoners offence has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prisoners offence could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('PrisonersOffence.' . $this->PrisonersOffence->primaryKey => $id));
			$this->request->data = $this->PrisonersOffence->find('first', $options);
		}
		$prisoners = $this->PrisonersOffence->Prisoner->find('list');
		$offences = $this->PrisonersOffence->Offence->find('list');
		$this->set(compact('prisoners', 'offences'));
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
		$this->PrisonersOffence->id = $id;
		if (!$this->PrisonersOffence->exists()) {
			throw new NotFoundException(__('Invalid prisoners offence'));
		}
		if ($this->PrisonersOffence->delete()) {
			$this->Session->setFlash(__('Prisoners offence deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Prisoners offence was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
