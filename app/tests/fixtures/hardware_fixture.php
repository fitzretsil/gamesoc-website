<?php
/* Hardware Fixture generated on: 2010-07-29 22:07:01 : 1280439241 */
class HardwareFixture extends CakeTestFixture {
	var $name = 'Hardware';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'cpu' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'ram' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'hdd' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'creation' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'modification' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'cpu' => 1,
			'ram' => 1,
			'hdd' => 1,
			'creation' => '1280439241',
			'modification' => '1280439241'
		),
	);
}
?>