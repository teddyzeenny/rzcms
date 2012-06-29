<?php
class ServicesController extends AppController {
	public function display($id = null) {
		if (isset($id)) {
			if (empty($this->request->data)) {
				$this->request->data = $this->Service->findById($id);
			} else {
				$this->Service->save($this->request->data);
			}
			
		} else {
			$servicesList = $this->Service->find('all');
			$this->set('servicesList', $servicesList);
		}
	}
}