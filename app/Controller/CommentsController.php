<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 * @property Comment $Comment
 * @property PaginatorComponent $Paginator
 */
class CommentsController extends AppController {

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
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
		$this->set('comment', $this->Comment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            $this->Comment->recursive = 3;
		if ($this->request->is('post')) {
			$this->Comment->create();
                        $this->request->data['Comment']['email'] = $this->Auth->user('email');
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$prisoners = $this->Comment->Prisoner->find('list');     
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
        $this->Comment->id = $id;
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
               $this->Comment->recursive = 3;
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
			$this->request->data = $this->Comment->find('first', $options);
		}
		$prisoners = $this->Comment->Prisoner->find('list');
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
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('Comment deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comment was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
        
        public function isAuthorized($user) {
        // All registered users can add prisoners
      if (isset($user['role']) && ($user['role'] === 'admin' || $user['role'] === 'super-users')) {
           if (in_array($this->action, array('add','edit', 'delete'))) {
            return true;
        }
        $this->Comment->recursive = 3;
        if (in_array($this->action, array('edit', 'delete'))) {
            $commentEmail = (String) $this->request->data['Comment']['email'];
            if ($this->Comment->isOwnedBy($commentEmail, $user['email'])) {
                return true;
            } else {
                $this->Flash->error(__("You are not allowed to access this!"));
            }
        }

        return parent::isAuthorized($user);
    }
}
}