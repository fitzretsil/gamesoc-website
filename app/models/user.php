<?php
class User extends AppModel {
	var $name = 'User';

	var $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'All Users must have a Username',
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'All Users must have a password',
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Invalid Email format',
			),
		),
	);

	var $belongsTo = array();

	var $hasMany = array (
		'Hardware' => array(
	            'className'  => 'Hardware',
		    'foreignKey' => 'user_id'
	        )
	);

}
?>
