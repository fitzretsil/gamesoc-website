<?php
/* TournamentParticipant Test cases generated on: 2012-11-10 17:11:56 : 1352568416*/
App::import('Model', 'TournamentParticipant');

class TournamentParticipantTestCase extends CakeTestCase {
	var $fixtures = array('app.tournament_participant', 'app.tournament', 'app.event', 'app.type', 'app.user', 'app.group', 'app.hardware');

	function startTest() {
		$this->TournamentParticipant =& ClassRegistry::init('TournamentParticipant');
	}

	function endTest() {
		unset($this->TournamentParticipant);
		ClassRegistry::flush();
	}

}
?>