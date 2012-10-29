<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function register() {
		if (!empty($this->data)) {
                        $this->User->create();
                        if ($this->User->save($this->data)) {
                                $this->redirect(array('action' => 'registered'));
                        } else {
                                $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
                        }
                }
                $groups = $this->User->Group->find('list');
                $this->set(compact('groups'));
	}

	function registered() {
	}	

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function login() {
		if (!empty($this->data)) {
			if ($this->Session->read('Auth.User')) {
				$this->Session->setFlash('You are logged in!');
				$this->redirect('/', null, false);
			} else {
				$this->Session->setFlash('There was a problem logging you in');
			}
		}
	}

	function logout() {
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}

	function home() {
		$this->set('user', $this->User->find('first', array(
							'conditions' => array(
								'User.id' => $this->Session->read('Auth.User.id')
							)
						)));
	}
	
	function fbregister() {
		define('FACEBOOK_APP_ID', '236283639834605');
		define('FACEBOOK_SECRET', 'e95e090a2a4228926c19c32ebe0813c4');
		
		$request = $this->params['form']['signed_request'];
		if ( $this->params['form'] ) {
  			$response = $this->_parse_signed_request($request, FACEBOOK_SECRET);
  			$this->set( 'response', $response );
		} else {
  			echo '$_REQUEST is empty';
		}
	}

	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('login', 'logout', 'register', 'registered', 'fbregister' );
	}
	
	private function _parse_signed_request($signed_request, $secret) {
		list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

		// decode the data
		$sig = $this->_base64_url_decode($encoded_sig);
		$data = json_decode($this->_base64_url_decode($payload), true);

		if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
			error_log('Unknown algorithm. Expected HMAC-SHA256');
			return null;
		}

		// check sig
		$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
		if ($sig !== $expected_sig) {
			error_log('Bad Signed JSON signature!');
			return null;
		}

		return $data;
	}

	private function _base64_url_decode($input) {
    	return base64_decode(strtr($input, '-_', '+/'));
	}
}
?>
