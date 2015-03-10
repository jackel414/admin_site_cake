<?php
class GroupsController extends AppController {
	public function all() {
		$this->set('groups', $this->Group->find('all', array('conditions' => array('Group.active' => true), 'order' => array('Group.name'))));
	}
}