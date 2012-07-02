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
				$success = $this->Event->save($this->request->data);
				if ($success) {
					unset($this->request->data);
				}
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
				$this->uploadImg($this->request->data['Event']['image']);
				unset($this->request->data['Event']['image']);
				$this->Event->save($this->request->data);
			}
			$images = $this->Event->Image->find('all', array(
				'conditions' => array(
					'Image.event_id' => $eventId
				)
			));
			$this->set('images', $images);
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			$eventImgs = $this->Event->Image->find('all', array(
				'conditions' => array(
					'Image.event_id' => $id
				)
			));
			$this->Event->delete($id);
			foreach ($eventImgs as $img) {
				$this->Event->Image->remove($img['Image']['id']);
			}
			$this->redirect($this->referer());
		}
	}
	
	public function uploadImg($params) {
		$file = APP . 'webroot' . DS . 'img' . DS . 'events' . DS;
		if (($params['type'] == 'image/jpeg') && ($params['error'] == 0) && ($params['size'] > 0)) {
			$this->Event->Image->create();
			$this->Event->Image->save(array(
				'event_id' => $this->request->data['Event']['id']
			));
			$file .= $this->Event->Image->getLastInsertID() . '.jpg';
			return move_uploaded_file($params['tmp_name'], $file);
		}
	}
}