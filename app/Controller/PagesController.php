<?php
class PagesController extends AppController {
	
	public function index($id) {
		if (empty($this->request->data)) {
			$this->request->data = $this->Page->findById($id);
		} else {
			$this->Page->save($this->request->data);
		}
	}
	
	public function display($id) {
		
	}
}