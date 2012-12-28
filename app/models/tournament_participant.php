<?php
class TournamentParticipant extends AppModel {
	var $name = 'TournamentParticipant';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tournament' => array(
			'className' => 'Tournament',
			'foreignKey' => 'tournament_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	function standings() {
		$standings = $this->find('all', array( 'fields' => array('User.username','SUM(TournamentParticipant.points) as points'), 'group' => array('User.username'), 'recursive' => 0 ));
		return $standings;
	}
}
?>
