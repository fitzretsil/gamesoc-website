<?php
class TournamentsController extends AppController {

	var $name = 'Tournaments';

	function index() {
		$this->Tournament->recursive = 0;
		$this->set('tournaments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tournament', true));
			$this->redirect(array('action' => 'index'));
		}
		$tournament = $this->Tournament->read(null, $id);
		$this->set('tournament', $tournament);
		ini_set('user_agent','whatever');
		$wikiUrl = "http://en.wikipedia.org/w/api.php?format=xml&action=query&titles=" . urlencode($tournament['Tournament']['game']) . "&prop=revisions&rvprop=content";
		$doc = new DOMDocument();
		$doc->load( $wikiUrl );
		$x = $doc->documentElement;
		$description = "";
		foreach ($x->childNodes AS $item) {
  			$description .= $item->nodeValue;
  		}
		$start = strpos($description, "image");
		$start = strpos( $description, "=", $start );
		$end = strpos($description, "]]", $start);
		$image = substr( $description, $start+1, ($end-$start)+1);
		$this->set('image', $this->parse($image)); 
		$start = strpos($description, "'''''");
		$drop = strpos($description, "==");
		$description = substr($description, $start, $drop-$start);
		$this->set('description', $this->parse($description));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tournament->create();
			if ($this->Tournament->save($this->data)) {
				$this->Session->setFlash(__('The tournament has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tournament could not be saved. Please, try again.', true));
			}
		}
		$events = $this->Tournament->Event->find('list');
                $this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tournament', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tournament->save($this->data)) {
				$this->Session->setFlash(__('The tournament has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tournament could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tournament->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tournament', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tournament->delete($id)) {
			$this->Session->setFlash(__('Tournament deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tournament was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function standings() {
		$this->set( 'standings', $this->Tournament->TournamentParticipant->standings() );
		return $this->Tournament->TournamentParticipant->standings();
	}

	function admin_index() {
		$this->Tournament->recursive = 0;
		$this->set('tournaments', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tournament', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tournament', $this->Tournament->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Tournament->create();
			if ($this->Tournament->save($this->data)) {
				$this->Session->setFlash(__('The tournament has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tournament could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tournament', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tournament->save($this->data)) {
				$this->Session->setFlash(__('The tournament has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tournament could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tournament->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tournament', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tournament->delete($id)) {
			$this->Session->setFlash(__('Tournament deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tournament was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function parse($text) {
		$doc = new DOMDocument();
                $doc->load( "http://en.wikipedia.org/w/api.php?action=parse&text=" . rawurlencode($text) . "&prop=text&format=xml" );
                $x = $doc->documentElement;
                $description = "";
                foreach ($x->childNodes AS $item) {
                        $description .= $item->nodeValue;
                }
		return $description;
	}
}
?>
