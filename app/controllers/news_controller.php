<?php

class NewsController extends AppController {

	var $name = 'News';
	var $paginate = array(
        	'limit' => 3,
        	'order' => array(
        	    'News.publish_date' => 'desc'
        	)
    );
	var $helpers = array('Html', 'Form', 'Javascript');
	
	function index() {
		$this->News->recursive = 1;
        $this->set('news', $this->paginate());
	}
	
	function test() {
		$this->layout = 'space';
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}
	
	function admin() {
                $this->News->recursive = 0;
                $this->set('news', $this->paginate());
        }

	function add() {
		if (!empty($this->data)) {
			$this->data['News']['member_id'] = $this->Auth->User('id');
			if ($this->News->save($this->data)) {
				$this->Twitter = ConnectionManager::getDataSource('twitter');
				$response = $this->Twitter->account_verify_credentials();
				$search_results = $this->Twitter->help_test();
				debug($response);
				debug($search_results);
				$this->Session->setFlash('Your post has been saved.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function delete($id) {
		$this->Post->delete($id);
		$this->Session->setFlash('The post with id: '.$id.' has been deleted.');
		$this->redirect(array('action'=>'index'));
	}

	function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->allow('index');
	    $this->Auth->allowedActions = array('index','test');
    }
}
?>
