<?php
class AppController extends Controller {
    var $components = array('Acl', 'Auth', 'Session');

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->authError = "Sorry, you are lacking access.";
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'home');
		$this->Auth->allowedActions = array( 'display', 'test' );
    }
}
?>
