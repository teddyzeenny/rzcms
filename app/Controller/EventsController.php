<?php
class EventsController extends AppController {
	public function display($catId = null, $eventId = null) {
		if (!isset($catId)) {
			$categories = $this->Event->Category->find('all', array(
				'order' => array(
					'Category.created' => 'ASC'
				)
			));
			$this->set('categories', $categories);
		} elseif (!isset($eventId)) {
			if (!empty($this->request->data)) {
				$this->request->data['Event']['category_id'] = $catId;
				$this->Event->create();
				$this->Event->save($this->request->data);
				unset($this->request->data);
			}
			$conditions = array(
				'Event.category_id' => $catId,
				'Category.created' => 'ASC'
			);
			$eventsList = $this->Event->find('all', array('conditions' => $conditions));
			$this->set('eventsList', $eventsList);
		} else {
			if (empty($this->request->data)) {
				$this->request->data = $this->Event->findById($eventId);
			} else {
				$this->Event->save($this->request->data);
			}
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			$this->Event->delete($id);
			$this->redirect($this->referer());
		}
	}
}