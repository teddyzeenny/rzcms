<?php
class ServicesController extends AppController {
	public $components = array('Security');
	
	public function index() {
		$servicesList = $this->Service->find('all', array(
			'order' => array(
				'Service.title' => 'asc'
			)
		));
		$this->set('servicesList', $servicesList);
	}
	
	public function edit($id = null) {
		if ($id) {
			if (empty($this->request->data)) {
				$this->request->data = $this->Service->findById($id);
			} else {
				$this->Service->save($this->request->data);
			}
		}
	}
}