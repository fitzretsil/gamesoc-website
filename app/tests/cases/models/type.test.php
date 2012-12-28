<?php
/* Type Test cases generated on: 2010-07-22 21:07:30 : 1279830570*/
App::import('Model', 'Type');

class TypeTestCase extends CakeTestCase {
	var $fixtures = array('app.type', 'app.event');

	function startTest() {
		$this->Type =& ClassRegistry::init('Type');
	}

	function endTest() {
		unset($this->Type);
		ClassRegistry::flush();
	}

}
?>