<?php
/* TournamentParticipant Fixture generated on: 2012-11-10 17:11:56 : 1352568416 */
class TournamentParticipantFixture extends CakeTestFixture {
	var $name = 'TournamentParticipant';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'tournament_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'points' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'creator' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modifier' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => '509e8e60-9138-426d-aec4-21d8e0f00508',
			'tournament_id' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'points' => 1,
			'creator' => 1,
			'created' => '2012-11-10 17:26:56',
			'modifier' => 1,
			'modified' => '2012-11-10 17:26:56'
		),
	);
}
?>