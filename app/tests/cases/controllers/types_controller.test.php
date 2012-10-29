<?php
/* Types Test cases generated on: 2010-07-22 21:07:45 : 1279830585*/
App::import('Controller', 'Types');

class TestTypesController extends TypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.type', 'app.event');

	function startTest() {
		$this->Types =& new TestTypesController();
		$this->Types->constructClasses();
	}

	function endTest() {
		unset($this->Types);
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