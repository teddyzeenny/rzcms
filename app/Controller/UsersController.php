<?php
class UsersController extends AppController {
	
	public function create() {
		if (isset($this->request->data)) {
			$this->User->create();
			$this->User->save($this->request->data);
		}
	}
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}