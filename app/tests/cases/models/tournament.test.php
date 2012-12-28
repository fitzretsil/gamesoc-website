<?php
/* Tournament Test cases generated on: 2012-11-03 13:11:14 : 1351949234*/
App::import('Model', 'Tournament');

class TournamentTestCase extends CakeTestCase {
	var $fixtures = array('app.tournament');

	function startTest() {
		$this->Tournament =& ClassRegistry::init('Tournament');
	}

	function endTest() {
		unset($this->Tournament);
		ClassRegistry::flush();
	}

}
?>