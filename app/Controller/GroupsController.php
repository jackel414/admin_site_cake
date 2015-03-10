<?php
class GroupsController extends AppController {
	public function all() {
		$this->set('groups', $this->Group->find('all', array('conditions' => array('Group.active' => true), 'order' => array('Group.name'))));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('Group saved successfully'));
				return $this->redirect(array('action' => 'all'));
			}
			$this->Session->setFlash(__('Unable to save group'));
		}
	}
}