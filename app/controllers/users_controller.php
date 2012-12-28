<?php
/**
 * All User functionality is handled in here including login
 * 
 * For data specific functionality see the User Model and for
 * the layout see the user views folder, each method will have
 * its own layout file
 * 
 * @author fitzretsil
 *
 */
class UsersController extends AppController {

	/**
	 * @var Controller Name
	 */
	var $name = 'Users';

	/**
	 * Admin method to display all currently registered users
	 * 
	 * Using the Paginate function defined in the Cake library's
	 * Controller class
	 */
	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
		$this->set( 'paid', $this->User->find( 'count', array( 'conditions' => array( 'User.paid' => 1 ) ) ) );
		$this->set( 'committee', $this->User->find( 'count', array( 'conditions' => array( 'User.committee' => 1 ) ) ) );
		$this->set( 'lifetime', $this->User->find( 'count', array( 'conditions' => array( 'User.lifetime' => 1 ) ) ) );
	}

	/**
	 * Given a user's ID returns an array of that User's data
	 *
	 * @param string $id
	 */
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	/**
	 * Admin method to add a new user to the site
	 */
	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	/**
  	 * Function to allow a user to register
  	 * 
  	 * This should be retired in favour of the Facebook 
  	 * registration method that exists below
  	 */
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

	/**
	 * Placeholder method to show the registered view
	 */
	function registered() {
	}	

	/**
	 * Admin function to update a user's details given
	 * their user id
	 * 
	 * @param string $id
	 */
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ( strlen( $this->data['User']['password'] ) == 0 ) {
				unset( $this->data['User']['password'] );
			}
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
	}

	/**
	 * Admin function to remove a User given their id
	 * 
	 * Fitzretsil: I don't like this function personally
	 * as it is too easy to accidentally delete a user,
	 * so think it should be removed in favour of a 
	 * manual clean up of users who have not paid for 
	 * more then a year
	 * 
	 * @param string $id
	 */
	function admin_delete($id = null) {
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

	/**
	 * Given a post request containing a username and
	 * password checks if the user exists to log them
	 * in else throws an error
	 */
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

	function committee() {
		$committee = $this->User->find('all', array( 'conditions' => array( 'User.committee' => 1 ), 'order' => "FIELD (User.subtitle,'President','Secretary','Treasurer','Kit Monkey','Publicity','Clan Leader','Webmaster','Server Admin','Ordinary Member')" ) );
		$this->set( 'committee', $committee );
		return $committee;
	}

	/**
	 * Logs out the current user
	 */
	function logout() {
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}

	/**
	 * Returns the current user's data
	 */
	function home() {
		$this->set( 'user', $this->User->find( 'first', array( 'conditions' => array( 'User.id' => $this->Session->read( 'Auth.User.id' ) ) ) ) );
	}
	
	/**
	 * New method to allow users to register using their Facebook
	 * details
	 */
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
	    $this->Auth->allowedActions = array('login', 'logout', 'register', 'registered', 'fbregister','committee' );
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
