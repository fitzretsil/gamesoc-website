<?php
class HardwareController extends AppController {

	var $name = 'Hardware';

	function index() {
		$this->Hardware->recursive = 0;
                $this->set('hardware', $this->paginate());
	}

	function admin() {
		$this->Hardware->recursive = 0;
		$this->set('hardware', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid hardware', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('hardware', $this->Hardware->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Hardware->create();
			$this->data['Hardware']['creation'] = date('Y-m-d G:i:s');
			$this->data['Hardware']['user_id'] = $this->Session->read('Auth.User.id');
			if ($this->Hardware->save($this->data)) {
				$this->Session->setFlash(__('The hardware has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hardware could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Hardware->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid hardware', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['modification'] = date('Y-m-d G:i:s');
			if ($this->Hardware->save($this->data)) {
				$this->Session->setFlash(__('The hardware has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hardware could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Hardware->read(null, $id);
		}
		$users = $this->Hardware->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for hardware', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Hardware->delete($id)) {
			$this->Session->setFlash(__('Hardware deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hardware was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('index');
            $this->Auth->allowedActions = array('index');
        }


}
?>
