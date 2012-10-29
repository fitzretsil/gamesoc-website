<?php
/* Hardwares Test cases generated on: 2010-07-29 22:07:02 : 1280439242*/
App::import('Controller', 'Hardwares');

class TestHardwaresController extends HardwaresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HardwaresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.hardware', 'app.user', 'app.group');

	function startTest() {
		$this->Hardwares =& new TestHardwaresController();
		$this->Hardwares->constructClasses();
	}

	function endTest() {
		unset($this->Hardwares);
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