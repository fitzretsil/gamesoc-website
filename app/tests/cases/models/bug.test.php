<?php
/* Bug Test cases generated on: 2010-07-29 22:07:59 : 1280439059*/
App::import('Model', 'Bug');

class BugTestCase extends CakeTestCase {
	var $fixtures = array('app.bug', 'app.user', 'app.group');

	function startTest() {
		$this->Bug =& ClassRegistry::init('Bug');
	}

	function endTest() {
		unset($this->Bug);
		ClassRegistry::flush();
	}

}
?>