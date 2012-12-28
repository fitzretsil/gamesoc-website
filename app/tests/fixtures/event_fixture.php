<?php
/* Event Fixture generated on: 2010-07-22 21:07:41 : 1279830281 */
class EventFixture extends CakeTestFixture {
	var $name = 'Event';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'start' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'end' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'location' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'price' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'image' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'modifier' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'creator' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'type_id' => 1,
			'start' => '1279830281',
			'end' => '1279830281',
			'location' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'image' => 'Lorem ipsum dolor sit amet',
			'modifier' => 1,
			'modified' => '1279830281',
			'creator' => 1,
			'created' => '1279830281'
		),
	);
}
?>