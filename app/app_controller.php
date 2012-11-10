<?php
class AppController extends Controller {
    var $components = array( 'Auth', 'Session');
    var $helpers = array( 'Html', 'Form', 'Time', 'Session' );

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authError = "Sorry, you are lacking access.";
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'home');
	$this->Auth->allowedActions = array( 'display', 'test', 'view', 'standings' );
	$this->layout = 'space';
    }
}
?>
