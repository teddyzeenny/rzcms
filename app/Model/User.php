<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
	public function beforeSave() {
		if (!parent::beforeSave()) {
			return false;
		}
		$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);       
	}
}