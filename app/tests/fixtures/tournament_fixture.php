<?php
/* Tournament Fixture generated on: 2012-11-03 13:11:14 : 1351949234 */
class TournamentFixture extends CakeTestFixture {
	var $name = 'Tournament';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'game' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 420),
		'time' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'spaces' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'creator' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modifier' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => '50951bb2-7ae0-4e2d-ae87-3b7be0f00508',
			'name' => 'Lorem ipsum dolor sit amet',
			'game' => 'Lorem ipsum dolor sit amet',
			'time' => '1351949234',
			'spaces' => 1,
			'creator' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-11-03 13:27:14',
			'modifier' => 'Lorem ipsum dolor sit amet',
			'modified' => '2012-11-03 13:27:14'
		),
	);
}
?>