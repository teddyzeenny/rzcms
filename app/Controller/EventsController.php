<?php
class EventsController extends AppController {
	public function display() {
		$categories = $this->Event->Category->find('all', array(
			'order' => array(
				'Category.created' => 'ASC'
			)
		));
		FireCake::log($categories);
		$eventsList = $this->Event->find('all');
		$this->set('eventsList', $eventsList);
	}
}