<?php
/* Tournaments Test cases generated on: 2012-11-03 13:11:08 : 1351949288*/
App::import('Controller', 'Tournaments');

class TestTournamentsController extends TournamentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TournamentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tournament');

	function startTest() {
		$this->Tournaments =& new TestTournamentsController();
		$this->Tournaments->constructClasses();
	}

	function endTest() {
		unset($this->Tournaments);
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

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>