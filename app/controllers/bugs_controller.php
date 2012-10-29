<?php
class BugsController extends AppController {

	var $name = 'Bugs';

	function index() {
		$this->Bug->recursive = 0;
		$this->set('bugs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bug', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bug', $this->Bug->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Bug->create();
			if ($this->Bug->save($this->data)) {
				$this->Session->setFlash(__('The bug has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bug could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Bug->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bug', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bug->save($this->data)) {
				$this->Session->setFlash(__('The bug has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bug could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bug->read(null, $id);
		}
		$users = $this->Bug->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bug', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bug->delete($id)) {
			$this->Session->setFlash(__('Bug deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bug was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>