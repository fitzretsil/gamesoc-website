<?php
/* Bugs Test cases generated on: 2010-07-29 22:07:02 : 1280439062*/
App::import('Controller', 'Bugs');

class TestBugsController extends BugsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BugsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.bug', 'app.user', 'app.group');

	function startTest() {
		$this->Bugs =& new TestBugsController();
		$this->Bugs->constructClasses();
	}

	function endTest() {
		unset($this->Bugs);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>