<?php
class EventsController extends AppController {
	public $components = array('Security');
	
	public function index() {
		$this->set('categories', array(
			array(
				'Category' => array(
					'id' => 1,
					'name' => 'Past events'
				)
			),
			array(
				'Category' => array(
					'id' => 2,
					'name' => 'Current events'
				)
			)
		));
	}
	
	public function display($catId = null) {
		if (!empty($this->request->data)) {
			$this->request->data['Event']['category_id'] = $catId;
			$this->Event->create();
			$success = $this->Event->save($this->request->data);
			if ($success) {
				$this->request->data = array();
			}
		}
		$conditions = array();
		if ($catId == 1) {
			$conditions['Event.date <'] =  date('Y-m-d h:i:s');
		} else {
			$conditions['Event.date >='] =  date('Y-m-d h:i:s');
		}
		$eventsList = $this->Event->find('all', array(
			'conditions' => $conditions,
			'order' => array(
				'Event.date' => 'desc'
			)
		));
		$this->set('eventsList', $eventsList);
	}
	
	public function edit($id) {
		if (empty($this->request->data)) {
			$this->request->data = $this->Event->findById($id);
		} else {
			$this->_uploadImg($this->request->data['Event']['image']);
			unset($this->request->data['Event']['image']);
			$this->Event->save($this->request->data);
		}
		$images = $this->Event->Image->find('all', array(
			'conditions' => array(
				'Image.event_id' => $id
			)
		));
		$this->set('images', $images);
	}
	
	public function delete($id = null) {
		if ($id) {
			$eventImgs = $this->Event->Image->find('all', array(
				'conditions' => array(
					'Image.event_id' => $id
				)
			));
			$this->Event->delete($id);
		}
		$this->redirect($this->referer());

	}
	
	protected function _uploadImg($params) {
		$file = APP . 'webroot' . DS . 'img' . DS . 'events' . DS;
		if (($params['type'] == 'image/jpeg') && ($params['error'] == 0) && ($params['size'] > 0)) {
			$this->Event->Image->create();
			$this->Event->Image->save(array(
				'event_id' => $this->request->data['Event']['id']
			));
			$file .= $this->Event->Image->id . '.jpg';
			return move_uploaded_file($params['tmp_name'], $file);
		}
	}
}