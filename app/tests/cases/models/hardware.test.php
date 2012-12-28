<?php
/* Hardware Test cases generated on: 2010-07-29 22:07:01 : 1280439241*/
App::import('Model', 'Hardware');

class HardwareTestCase extends CakeTestCase {
	var $fixtures = array('app.hardware', 'app.user', 'app.group');

	function startTest() {
		$this->Hardware =& ClassRegistry::init('Hardware');
	}

	function endTest() {
		unset($this->Hardware);
		ClassRegistry::flush();
	}

}
?>