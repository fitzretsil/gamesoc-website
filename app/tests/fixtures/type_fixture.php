<?php
/* Type Fixture generated on: 2010-07-22 21:07:30 : 1279830570 */
class TypeFixture extends CakeTestFixture {
	var $name = 'Type';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'image' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'creation' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modification' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'image' => 'Lorem ipsum dolor sit amet',
			'creation' => '1279830570',
			'modification' => '1279830570'
		),
	);
}
?>